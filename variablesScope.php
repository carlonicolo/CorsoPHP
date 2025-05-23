<!DOCTYPE html>
<html>
<body>

<h1>Variables scope</h1>

<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15

$txt1 = "Learn PHP";
$txt2 = "TPS course";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";


?>


<a href="index.php">Home</a>

</body>
</html>


