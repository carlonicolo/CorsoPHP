<html>
<body>
<form method='post'>
Nome: <input name='nome'>
Età: <input name='eta'>
<input type='submit'>
</form>
<?php
if ($_POST) {
$name = $_POST['nome'];
echo ($_POST['eta'] >= 18) ? 'Maggiorenne' : 'Minorenne';
echo "<br>";
$welcome = "Welcome to PHP Course " . $name;
file_put_contents('notes.txt',$welcome);
echo file_get_contents('notes.txt');

}
?>
</body>
</html>
