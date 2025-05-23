<!DOCTYPE html>
<html>
<body>

<h1>Variables scope</h1>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br/>";
echo $myCar->message();
?>

<a href="index.php">Home</a>

</body>
</html>