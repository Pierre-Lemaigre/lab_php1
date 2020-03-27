<?php
function fdisplay($name_array)
{
 foreach ($name_array as $name) {
  $name = trim($name);
  if (isset($_POST['filter'])) {
   $filter = $_POST['filter'];
   if (!strstr($name, $filter) and $filter != "") {
    continue;
   }
  }
  echo "<li>" . $name . "</li>";
 }
}

$filename = 'friends.txt';
if (file_exists($filename)) {
 $name_array = file($filename);
 fdisplay($name_array);
}
if (isset($_POST['name'])) {
 $name = $_POST['name'];
 if (!$name == "") {
  echo "<b><li>" . $name . "</li></b>";
  $file = fopen($filename, 'a');
  fwrite($file, $name . "\n");
  fclose($file);
 }
}
