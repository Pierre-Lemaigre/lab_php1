<?php
$names = array("Patrick", "John", "Marie", "claire", "Paul");
foreach ($names as $name) {
 if (substr($name, 0, 2) == 'Pa') {
  print "$name\n";
 }
}
?>
<p></p>
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
echo $calc->sum(7, 5);
print '<p></p>';
echo $calc->divide(7, 5);
print '<p></p>';
echo $calc->multiply(7, 5);
print '<p></p>';
echo $calc->substract(7, 5);
print '<p></p>';

function calculateWordsStats($url)
{
  $stats_words = [];
  $content = file_get_contents($url);
  $words = explode(" ", $content);
  foreach($words as $word) {
    $trimmed = trim($word);
    if (strlen($trimmed) == 0) {
      continue;
    }
    if (!isset($stats_words[$trimmed])) {
      $stats_words[$trimmed] = 0;
    }
    $stats_words[$trimmed] += 1;
  }
  arsort($stats_words);
  $most_word = array_slice($stats_words, 0, 10, true);
  echo "<ul>";
  foreach($most_word as $word => $apparations) {
    echo "<li>" . $word . " - " .  $apparations . "</li>";
  }
  echo "</ul>";
}

calculateWordsStats("http://www.gutenberg.org/files/1321/1321-0.txt");
