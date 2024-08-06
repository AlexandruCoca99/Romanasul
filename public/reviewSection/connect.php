<?php
// DB connection
$db_name = 'mysql:host=localhost;dbname=reviewsdatabase';
$db_user_name = 'root';
$db_user_password = '';

try {
    $connection = new PDO($db_name, $db_user_name, $db_user_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// review
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_review'])) {
    //collect data 
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $date = $_POST['date'];

    $sql = "INSERT INTO reviewsystem (name, surname, rating, comment, date) VALUES (:name, :surname, :rating, :comment, :date)"; // interogare 
    $stmt = $connection->prepare($sql);
    // var -> param
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':date', $date);
    $stmt->execute();

    echo "Review added successfully<br>";
}

// display reviews
$sql = "SELECT name, surname, rating, comment, date FROM reviewsystem ORDER BY date DESC";
$stmt = $connection->prepare($sql);
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Review Section</title>
</head>

<body>

    <h1>Submit a Review</h1>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br>
        <label for="surname">Surname:</label><br>
        <input type="text" name="surname" id="surname" required><br>
        <label for="rating">Rating:</label><br>
        <select name="rating" id="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="comment">Comment:</label><br>
        <textarea name="comment" id="comment" required></textarea><br>
        <label for="date">Date:</label><br>
        <input type="date" name="date" id="date" required><br>
        <input type="submit" name="submit_review" value="Submit Review">
    </form>

    <h1>Reviews</h1>
    <?php
    if ($reviews) {
        foreach ($reviews as $review) {
            echo "<div>";
            echo "<strong>" . htmlspecialchars($review['name']) . " " . htmlspecialchars($review['surname']) . "</strong>";
            echo " (Rating: " . htmlspecialchars($review['rating']) . "/5)<br>";
            echo "<p>" . nl2br(htmlspecialchars($review['comment'])) . "</p>";
            echo "<small>Reviewed on: " . htmlspecialchars($review['date']) . "</small>";
            echo "</div><hr>";
        }
    } else {
        echo "No reviews yet.";
    }
    ?>

</body>

</html>