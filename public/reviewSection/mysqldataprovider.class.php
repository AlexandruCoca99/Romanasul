<?php

class MySqlDataProvider
{
    private function connect()
    {
        try {
            return new PDO(CONFIG['db_name'], CONFIG['db_user_name'], CONFIG['db_user_password']);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insert_review($name, $surname, $rating, $comment)
    {
        $database = $this->connect();

        if ($database == null) {
            return;
        }

        $sql = 'INSERT INTO reviewsystem (name, surname, rating, comment) VALUES (:name, :surname, :rating, :comment)'; // interogare 
        $stmt = $database->prepare($sql);

        $stmt->execute([
            ':name' => $name,
            'surname' => $surname,
            'rating' => $rating,
            'comment' => $comment
        ]);

        $stmt = null;
        $database = null;
    }
}
