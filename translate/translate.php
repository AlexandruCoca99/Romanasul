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
    // Încarcă conținutul HTML dintr-un fișier sau dintr-o bază de date
    return file_get_contents('index.html');
}

function saveTranslatedHtml($content) {
    // Salvează conținutul tradus într-un fișier sau într-o bază de date
    file_put_contents('translated.html', $content);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetLanguage = $_POST['lang'];

    // Încarcă conținutul HTML original
    $htmlContent = getHtmlContent();

    // Utilizează regex pentru a extrage textul din tagurile HTML
    $translatedContent = preg_replace_callback('/>([^<]+)</', function($matches) use ($targetLanguage) {
        $originalText = $matches[1];
        $translatedText = translateText($originalText, $targetLanguage);
        return '>' . $translatedText . '<';
    }, $htmlContent);

    // Salvează conținutul tradus
    saveTranslatedHtml($translatedContent);

    // Afișează conținutul tradus
    echo $translatedContent;
}
