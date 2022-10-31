<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
  <title>
    Photo CMS Capstone Project
  </title>
</head>

<?php // Get all the post titles from the posts table should display images also
function getPostInformationFromDatabase() { 
  include_once './includes/db_connect.php';
  $sql = "SELECT `name`, `description`, `file` FROM posts";
  $result = mysqli_query($conn, $sql);

  // Get each result row as an assoc array, then add title to $postName
  $postName = array();
  $postDescription = array();
  $postFile = array();
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($postName ['name']);
    } return $postName;
}
?>

<body>
  <?php //Header and Navigation 
  include 'header.php';
  include 'nav.php';
  ?>

  <main>
    <ul>
      <?php
      // Display post titles, descriptions and images, TODO: Test echo function
      $postInformation = getPostInformationFromDatabase();
      foreach ($postNames as $postName); {
              echo "<li><a href='upload.php?Name=" . $postName . "' class='name'>" . $postName ."</a></li>";
              }
      ?>

    </ul>
  </main>
</body>

</html>