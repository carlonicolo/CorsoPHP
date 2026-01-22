<!DOCTYPE html>
<html>

<body>

    <?php

    $frutti = ['mela', 'banana', 'arancia'];
    echo $frutti[1]; // Stampa banana
    echo "<br>";

    $persona = ['nome' => 'Marco', 'età' => 28];
    echo $persona['nome']; //Stampa 'Marco'
    echo "<br>";

    $studenti = [
        ['nome' => 'Luca', 'voto' => 85],
        ['nome' => 'Sara', 'voto' => 92]
    ];

    echo $studenti[1]['nome']; // Stampa 'Sara'

    echo "<br>";
    echo "<br>";

    foreach($frutti as $fruit){
        echo $fruit . "<br>";
    }

    ?>

    <br>

    <a href="index.php">Home</a>

</body>

</html>