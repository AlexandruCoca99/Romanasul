<?php
// DB connection
$db_name = 'mysql:host=localhost;dbname=reviewsdatabase';
$db_user_name = 'root';
$db_user_password = '';

try {
    $connection = new PDO($db_name, $db_user_name, $db_user_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully<br>";


    // $sql = "INSERT INTO reviewsystem (name, surname, rating, comment) VALUES ('Cokaa', 'Alexei', '5', 'Fainutz')";
    // $connection->exec($sql);

    // review       
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_button'])) {
        //collect data 
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];
        $date = $_POST['date'];

        $sql = 'INSERT INTO reviewsystem (name, surname, rating, comment) VALUES (:name, :surname, :rating, :comment)'; // interogare 
        $stmt = $connection->prepare($sql);
        // var -> param
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':rating', $rating);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':date', $date);
        $stmt->execute();

        echo '<script>alert("Review added");</script>';
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
