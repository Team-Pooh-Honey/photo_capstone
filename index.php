<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
  <title>
    Photo CMS Capstone Project
  </title>
</head>

<?php
//TODO Clean, comment, work on photo display/functionality
//Note: Original photo size is 1440 x 900
?>

<?php // Get all the post titles from the posts table should display images also, build db_connect.php and database (images)
function getPostTitlesFromDatabase() { 
  include_once './includes/db_connect.php';
  $sql = "SELECT title FROM posts";
  $result = mysqli_query($conn, $sql);

  // Get each result row as an assoc array, then add title to $postTitles
  $postTitles = array();
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($postTitles, $row['title']);
    } return $postTitles;
}
?>

<body>
  <?php //Refactored header and navigation elements
  include 'header.php';
  include 'nav.php';
  ?>

    <?php //TODO getPostTitlesFromDatabase function should display images also, getPostFileFromDatabase and getPostDescriptionFromDatabase could work. Should this live outside the body or somewhere else in the page?
        $postTitles = getPostTitlesFromDatabase();
        foreach($postTitles as $postTitle) {
            echo "<li><a href='upload.php?title=" . $postTitle 
            . "' class='title'>" . $postTitle . "</a></li>";
        }
    ?>

  <main>
    <ul>
      <?php
      // Display post titles, TODO display post images and post description too
      $postTitles = getPostTitlesFromDatabase();
      foreach ($postTitles as $postTitle) {
        echo "<li><a href='upload.php?title=" . $postTitle . "'>" . $postTitle .
          "</a></li>";
      }
      ?>

    </ul>
  </main>
</body>

</html>