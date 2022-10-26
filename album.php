<?php //Header and navigation
include 'header.php';
include 'nav.php';
?>

<link rel="stylesheet" href="style.css">

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

<?php
function getPostDetailsFromDatabase()
{
  // Get the post name
  $postName = rawurldecode($_GET["name"]);

  // Get the imageupload that matches the postName
  include_once './includes/db_connect.php';
  $sql = "SELECT * FROM posts WHERE name ='" . $postName . "'";
  $result = mysqli_query($conn, $sql);

  // Get the first row from the result as an associative array
  $postDetails = mysqli_fetch_assoc($result);
  return $postDetails;
}
?>
     
<main>
  <?php
  $postDetails = getPostDetailsFromDatabase();  // This function prints information from the image posts like name, author, date and description
  ?>

  <h2> <?php echo $postDetails["name"]; ?> <h2>
      <div> <?php echo $postDetails["author"]; ?> </div>
      <div> <?php echo $postDetails["date"]; ?> </div>
      <div> <?php echo $postDetails["description"]; ?> </div>

</main>

</html>