<?php
$name = $_GET['name'];
if ($name) {
  echo "<h1>Hello, $name!</h1>";
} else {
  echo "<h1>Hello, World!</h1>";
}
