<!DOCTYPE html>
<html>

<body>

    <?php

    function greeting()
    {
        echo "Hello 5° TPS";
    }

    function greetingUser($user)
    {
        echo "Hello " . $user;
    }

    function addizione($x, $y)
    {
        return $x + $y;
    }



    echo greeting();
    echo "<br>";
    echo greetingUser("Karlitos");
    echo "<br>";
    echo addizione(10, 20);
    echo "<br>";

    ?>

    <br>

    <a href="index.php">Home</a>

</body>

</html>