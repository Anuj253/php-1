<?php
class Db_connection {
    private $connection;

    function __construct() {
        $this->db_connect();
    }

    public function db_connect() {
        $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
        if (mysqli_connect_error()) {
            die("This connection is not established: " . mysqli_connect_error() . mysqli_connect_error());
        }
    }

    function create($name, $email, $interests, $age, $gender, $country) {
        $db_sql = "INSERT INTO subscribers (name, email, interests, age, gender, country) VALUES ('$name', '$email', '$interests', '$age', '$gender', '$country')";
        $res = mysqli_query($this->connection, $db_sql);

        if ($res) {
            $insertedId = mysqli_insert_id($this->connection);
            $selectSql = "SELECT * FROM subscribers WHERE id = $insertedId";
            $result = mysqli_query($this->connection, $selectSql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Entry created successfully:<br>";
                /*echo "ID: " . $row['id'] . "<br>";
                echo "Name: " . $row['name'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Interests: " . $row['interests'] . "<br>";
                echo "Age: " . $row['age'] . "<br>";
                echo "Gender: " . $row['gender'] . "<br>";
                echo "Country: " . $row['country'] . "<br>";
                */
            }
        } else {
            echo "Entry not created";
        }
    }

    function read($id = NULL) {
        $sql = "SELECT * FROM subscribers";
        if ($id) {
            $sql .= " WHERE id=$id";
        }
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
}

$database = new Db_connection();
?>
