<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>READ - WRITE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <?php


    // echo "First method \n";
    // file_put_contents('data/example.txt', "Hello PHP \n");
    // echo file_get_contents('data/example.txt');
    // echo "<br>";

    $file = 'data/example.txt';

    // Open file in append mode
    $handle = fopen($file, 'a');

    // Data to append
    $data = "Hello PHP\n";
    // Write data to file
    fwrite($handle, $data);

    $data = "This is a new line of text. \r\n";

    // Write data to file
    fwrite($handle, $data);

    // Close the file
    fclose($handle);

    echo "Data has been appended to the file. <br>";

    echo file_get_contents('data/example.txt');
    echo "<br>";

    $dir = "LoginProject";

    // Sort in ascending order - this is default
    $a = scandir($dir);

    // Sort in descending order
    $b = scandir($dir, 1);

    echo "<br>";
    print_r($a);
    
    echo "<br>";
    print_r($b);

    ?>

    <br>

    <a href="index.php">Home</a>

</body>

</html>