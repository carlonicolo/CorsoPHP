<!DOCTYPE html>
<html>
<body>

<h1>Variables scope</h1>

<?php

function myMessage() {
  echo "Welcome to PHP class!";
}

myMessage();


function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

$names = ["Pippo", "Pluto", "Zico"];
//$size_names = count($names);

echo "<br/>";
echo "$names[0]" . "<br/>";
echo "$names[1]" . "<br/>";
echo "$names[2]" . "<br/>";
echo "<br/>";

foreach($names as $name){
	//echo "$name" . "<br/>";
	familyName($name);
}
/*
$firstname = ["Pippo", "Pluto", "Zico"];
$lastname = ["Lippo", "Pullo", "Lallo"];

$completedName = ["Pippo":"Lippo", "Pluto":"Pullo", "Zico":"Lallo" ];

familyNameAdv($firstname, $lastname){
	foreach($firstname, $lastname as $fname . $lname){
		echo "$fname" . " $lname" . <br/>";
	}
}
*/


$completedName = array("Pippo"=>"Lippo","Pluto"=>"Pullo","Zico"=>"Lallo");

function familyNameAdv($completedName){
	foreach ($completedName as $firstname => $lastname){
		echo "$firstname" . " $lastname" . "<br/>";
	}
}

familyNameAdv($completedName);

?>

<br/>
<a href="index.php">Home</a>

</body>
</html>
