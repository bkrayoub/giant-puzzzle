<?php
    // connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "giant_puzzle";

    $conn = new mysqli($servername, $username, $password,$database);

    if ($conn->connect_error) {
        echo "hoho";
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo '';
    }
?>
