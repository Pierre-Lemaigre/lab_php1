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
  $content_filtered = file_get_contents($url);
  $words = explode(" ", $content_filtered);
  foreach($words as $word) {
    trim($word);
    if ($stats_words[$word]) {
      $stats_words[$word] += 1;
    } else {
      $stats_words[$word] = 1;
    }
  }
  arsort($stats_words);
  $most_word = array_slice($stats_words, 0, 10, true);
  print_r($most_word);
}

calculateWordsStats("http://www.gutenberg.org/files/1321/1321-0.txt");
?>