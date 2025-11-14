<?php  /* sesusi dengan database yang telah dibuat*/

    $host = "localhost";
    $database = "db_penilaiandosen";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $database);  
    if ($conn->connect_error) {
        die ($conn->connect_error);
    };
?>