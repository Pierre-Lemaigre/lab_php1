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
<?php include 'friends.php';?>
</ul>
<form action="index.php" method="post">
  <input type="text" name="filter">
  <input type="submit" value="Filter list" />
</form>
<?php include 'footer.html';?>
</body>
</html>