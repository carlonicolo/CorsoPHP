<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <!-- <form method='post'> -->
    <form method='get'>
        Età: <input name='eta'>
        <input type='submit'>
    </form>

    <?php

    //if ($_POST) {
    //    echo ($_POST['eta'] >= 18) ? 'Maggiorenne' : 'Minorenne';
    //}

    if ($_GET) {
        echo ($_GET['eta'] >= 18) ? 'Maggiorenne' : 'Minorenne';
    }

    ?>

    <br>

    <a href="index.php">Home</a>

</body>

</html>