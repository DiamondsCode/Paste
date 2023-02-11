<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $content = $_POST['content'];

  // Connect to the database
  $host = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "pastes";
  $conn = mysqli_connect($host, $username, $password, $dbname);

  // Insert the paste into the database
  $sql = "INSERT INTO pastes (content) VALUES ('$content')";
  mysqli_query($conn, $sql);

  // Get the ID of the newly created paste
  $paste_id = mysqli_insert_id($conn);

  // Redirect to the paste page
  header("Location: paste.php?id=$paste_id");
  exit;
}
?>
