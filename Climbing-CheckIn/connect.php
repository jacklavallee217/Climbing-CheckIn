<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "metrorock";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM customers, items";

    $result = $conn->query($sql);

    session_id('mySessionID');

?>

