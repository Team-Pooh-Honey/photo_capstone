<?php
   // Get the data to insert into the db
   $name = $_POST["name"];
   $description = $_POST["description"];
   $author = $_POST["author"];
   $date = $_POST["date"];
   //TODO add file/image functionality

   // Insert the data with the sql query
   include_once './includes/db_connect.php';
   $sql="INSERT INTO posts (name, description, author, date) VALUES ('" .     
       $name . "','" .  $description . "','" . $author . "','" . $date . "')";
   $result = mysqli_query($conn, $sql);
   
   // Redirect to homepage
   header("Location: index.php");
?>