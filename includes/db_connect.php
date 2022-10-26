<?php
    $dbServer = "localhost";
    $dbUsername = "root";    // This is the same username as phpMyAdmin
    $dbPassword = "root";    // This is the same password as phpMyAdmin
    $dbName = "photo_cms";   // This selects the photo_cms database

    // This creates the connection to my database
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>