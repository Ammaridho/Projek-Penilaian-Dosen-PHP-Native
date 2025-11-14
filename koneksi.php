<?php  /* sesusi dengan database yang telah dibuat*/

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_web";

    $conn = new mysqli($host, $username, $password, $database);  
    if ($conn->connect_error) {
        die ($conn->connect_error);
    };
?>