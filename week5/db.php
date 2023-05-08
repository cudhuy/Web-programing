<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database_name = "test";

    // Create connection
    $db = mysqli_connect($host, $username, $password);
    // Check connection
    if (!$db) {
        exit("Cannot connect to $host using $username!");
    } else {
        mysqli_select_db($db, $database_name);
    }
?>