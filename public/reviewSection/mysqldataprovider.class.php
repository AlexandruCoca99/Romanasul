<?php

class MySqlDataProvider
{
    private $db_name;
    private $db_user_name;
    private $db_user_password;
    private $connection;
    public function __construct($db_name, $db_user_name, $db_user_password)
    {
        $this->db_name = $db_name;
        $this->db_user_name = $db_user_name;
        $this->db_user_password = $db_user_password;
    }
    private function connect()
    {
        try {
            return new PDO($this->db_name, $this->db_user_name, $this->db_user_password);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insert_review($name, $surname, $rating, $comment)
    {
        $this->connection = $this->connect();


        $sql = 'INSERT INTO reviewsystem (name, surname, rating, comment) VALUES (:name, :surname, :rating, :comment)'; // interogare 
        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            ':name' => $name,
            'surname' => $surname,
            'rating' => $rating,
            'comment' => $comment
        ]);

        $stmt = null;
        $this->connection = null;
    }
}
