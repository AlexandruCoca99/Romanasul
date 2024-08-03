<?php

function translateText($text, $targetLanguage) {
    $url = 'https://libretranslate.com/translate';
    $data = [
        'q' => $text,
        'source' => 'ro', // Limba sursă, poți ajusta în funcție de necesități
        'target' => $targetLanguage,
        'format' => 'text'
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        return "Error in translation";
    }

    $response = json_decode($result, true);
    return $response['translatedText'];
}

function getHtmlContent() {
    $file = 'index.html';
    if (file_exists($file)) {
        return file_get_contents($file);
    } else {
        echo "File does not exist: " . realpath($file);
        exit;
    }
}

function saveTranslatedHtml($content) {
    file_put_contents('translated.html', $content);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Request method is POST<br>";

    if (isset($_POST['lang'])) {
        $targetLanguage = $_POST['lang'];
        echo "Target language: $targetLanguage<br>";
    } else {
        echo "Language not set<br>";
        exit;
    }

    // Încarcă conținutul HTML original
    $htmlContent = getHtmlContent();
    echo "Original HTML content loaded<br>";

    // Utilizează regex pentru a extrage textul din tagurile HTML
    $translatedContent = preg_replace_callback('/>([^<]+)</', function($matches) use ($targetLanguage) {
        $originalText = $matches[1];
        echo "Translating: $originalText<br>";
        $translatedText = translateText($originalText, $targetLanguage);
        echo "Translated: $translatedText<br>";
        return '>' . $translatedText . '<';
    }, $htmlContent);

    // Salvează conținutul tradus
    saveTranslatedHtml($translatedContent);
    echo "Translated content saved<br>";

    // Afișează conținutul tradus
    echo $translatedContent;
} else {
    echo "Request method is not POST<br>";
}
