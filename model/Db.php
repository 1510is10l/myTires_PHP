<?php
    class Db {
        public function connect() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mytires";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }
    }
?>