<!DOCTYPE html>
<html>
<body>

<h1>My first OOP PHP script</h1>

<?php
class Automobile {
  // Proprietà (attributi)
  public $marca;
  public $modello;
  public $anno;
  // Metodo costruttore
  function __construct($marca, $modello, $anno) {
    $this->marca = $marca;
    $this->modello = $modello;
    $this->anno = $anno;
  }
  // Metodo
  function getInfo() {
    return "$this->marca $this->modello ($this->anno)";
  }
}

// Creazione di un nuovo oggetto Automobile
$auto1 = new Automobile("Fiat", "500", 2020);

// Utilizzo dei metodi dell'oggetto
echo $auto1->getInfo(); // Stampa: Fiat 500 (2020)
echo "<br>";
// Accesso alle proprietà pubbliche
echo "Stampa modello auto: " . $auto1->marca; // Stampa: Fiat
echo "<br>";

// Creazione di un altro oggetto dalla stessa classe
$auto2 = new Automobile("Tesla", "Model 3", 2021);
echo $auto2->getInfo(); // Stampa: Tesla Model 3 (2021)
echo "<br>";
?>

</body>
</html>
