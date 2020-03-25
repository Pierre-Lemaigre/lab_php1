<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP WebSite!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.html';?>
<form action="index.php" method="post">
  Name: <input type="text" name="name">
  <input type="submit" />
</form>
<h1>My Friends</h1>
<ul>
<?php
$filename = 'friends.txt';
if (file_exists($filename)) {
 $file = fopen($filename, 'r');
 $name = false;
 while (!feof($file)) {
  if ($name) {
   echo "<li>" . $name . "</li>";
  }
  $name = fgets($file);
 }
 fclose($file);
}
if (isset($_POST['name'])) {
 $name = $_POST['name'];
 echo "<b><li>" . $name . "</li></b>";
 $file = fopen($filename, 'a');
 fwrite($file, $name . "\n");
 fclose($file);
}
?>
</ul>
<?php include 'footer.html';?>
</body>
</html>