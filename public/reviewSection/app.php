<?php
require "config.php";
require "mysqldataprovider.class.php";

$db_name = CONFIG["db_name"];
$db_user_name = CONFIG["db_user_name"];
$db_user_password = CONFIG["db_user_password"];

$dataProvider = new MySqlDataProvider($db_name, $db_user_name, $db_user_password);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-button'])) {
    //collect data 
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    // $date = $_POST['date'];
    print_r('$name');

    $dataProvider->insert_review($name, $surname, $rating, $comment);
    // print_r "Review inserted successfully!";
}
