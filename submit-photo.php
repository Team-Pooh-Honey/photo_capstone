<?php

   // Get data to insert into database
   $name = $_POST["name"];
   $description = $_POST["description"];
   $author = $_POST["author"];
   $date = $_POST["date"];
   $file = $_POST["file"];

   // Insert new row into existing SQL database
   include_once './includes/db_connect.php';
   $sql="INSERT INTO posts (name, description, author, date, file) VALUES ('" .     
       $name . "','" .  $description . "','" . $author . "','" . $date . "','" . $file . "')";
   $result = mysqli_query($conn, $sql);
   
   // Redirect to homepage after the upload is complete
   header("Location: index.php");
?>