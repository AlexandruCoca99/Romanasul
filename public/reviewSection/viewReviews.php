<?php
$db_name = 'mysql:host=localhost;dbname=reviewsdatabase';
$db_user_name = 'root';
$db_user_password = '';

try {
    $connection = new PDO($db_name, $db_user_name, $db_user_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// query 
$sql = "SELECT name, surname, rating, comment, date FROM reviewsystem ORDER BY date DESC";
$stmt = $connection->prepare($sql);
$stmt->execute();

// all 
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>View Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .review {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        .review strong {
            font-size: 1.2em;
        }
        .review p {
            margin: 5px 0;
        }
        .review small {
            color: #555;
        }
    </style>
</head>
<body>

<h1>All Reviews</h1>
<?php
if ($reviews) {
    // display review
    foreach ($reviews as $review) {
        echo "<div class='review'>";
        echo "<strong>" . htmlspecialchars($review['name']) . " " . htmlspecialchars($review['surname']) . "</strong>";
        echo " (Rating: " . htmlspecialchars($review['rating']) . "/5)<br>";
        echo "<p>" . nl2br(htmlspecialchars($review['comment'])) . "</p>";
        echo "<small>Reviewed on: " . htmlspecialchars($review['date']) . "</small>";
        echo "</div>";
    }
} else {
    echo "No reviews yet.";
}
?>

</body>
</html>
