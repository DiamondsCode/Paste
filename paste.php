<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "pastes";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Get the ID of the paste to display
$paste_id = $_GET['id'];

// Get the content of the paste from the database
$sql = "SELECT content FROM pastes WHERE id = $paste_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$content = $row['content'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paste #<?php echo $paste_id; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Paste #<?php echo $paste_id; ?></h1>
    <pre><?php echo $content; ?></pre>
  </body>
</html>
