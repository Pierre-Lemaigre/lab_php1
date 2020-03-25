<?php
class Calculator
{
 public function sum($x, $y)
 {
  return $x + $y;
 }

 public function divide($x, $y)
 {
  return $x / $y;
 }

 public function substract($x, $y)
 {
  return $x - $y;
 }

 public function multiply($x, $y)
 {
  return $x - $y;
 }
}
$calc = new Calculator();
$op   = $_GET["op"];
$x    = $_GET["x"];
$y    = $_GET["y"];
if (in_array($op, ["multiply", "susbstract", "divide", "sum"]) and $x and $y) {
 echo "<h1>" . $calc->$op($x, $y) . "</h1";
} elseif (!$x or !$y) {
 echo "<h1>Incorrect or incomplete data</h1>";
} else {
 echo "<h1>Wrong operation : $op</h1>";
}
