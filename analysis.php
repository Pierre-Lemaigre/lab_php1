<?php
$name = (isset($_GET['name'])) ? $_GET['name'] : "World";
echo "<h1>Hello, $name!</h1>";
