<!DOCTYPE html>
<html>
<body>

<h1>My first OOP PHP script</h1>
<body>
<?php

class Prodotto {
  public $nome, $prezzo;

  function __construct($n, $p) {
    $this->nome = $n;
    $this->prezzo = $p;
  }

  function mostra() {
    echo "$this->nome: $this->prezzo";}
  }

$p = new Prodotto('Penna', 1.5);
$p->mostra();

?>

</body>
</html>
