<?php
include 'config.php';
class MySqlDataProvider
{
    private $db_name;
    private $db_user_name;
    private $db_user_password;
    private $connection;
    public function __construct()
    {
        $this->db_name = CONFIG['db_name'];
        $this->db_user_name = CONFIG['db_user_name'];
        $this->db_user_password = CONFIG['db_user_password'];
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

        if ($this->connection == null) {
            return;
        }


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

    public function get_review()
    {
        $this->connection = $this->connect();

        if ($this->connection == null) {
            return [];
        }

        $querry = $this->connection->query('SELECT * FROM reviewsystem');
        $data = $querry->fetchAll(PDO::FETCH_ASSOC);

        $querry = null;
        $this->connection = null;

        return $data;
    }

    // Fetch rating statistics for the overview
    public function fetchRatingStats()
    {
        $this->connection = $this->connect();

        if ($this->connection == null) {
            return [];
        }
        // SQL query to get the count of each rating level
        $querry = "SELECT rating, COUNT(*) as count FROM reviewsystem GROUP BY rating";
        $data = $this->connection->query($querry); // Execute the query
        return $data->fetchAll(PDO::FETCH_ASSOC); // Fetch the results as an associative array
    }
}
