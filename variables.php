<!DOCTYPE html>
<html>
<body>

<h1>PHP variables</h1>

<?php

$txt = "PHP";
echo "I love " . $txt . "!" . "<br/>";;

$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x . "<br/>";
echo $y . "<br/>";

echo "Utilizzo var_dump() function <br/>";

var_dump(5);
echo "<br/>";

var_dump("John");
echo "<br/>";

var_dump(3.14);
echo "<br/>";

var_dump(true);
echo "<br/>";

var_dump([2, 3, 56]);
echo "<br/>";

var_dump(NULL);
echo "<br/>";

?>

<a href="index.php">Home</a>

</body>
</html>