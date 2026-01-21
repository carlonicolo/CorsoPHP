<!DOCTYPE html>
<html>

<body>

  <?php

  // Get the current Unix timestamp
  $ts = time();

  // Format timestamp
  $curDate = date('d-m-y H:i:s', $ts);

  echo "<h3>Current time: " . $curDate . "</h3>";

  $t = date("H");

  if ($t < "10") {
    echo "<h3>Have a good morning!</h3>";
  } elseif ($t < "20") {
    echo "<h3>Have a good day!</h3>";
  } else {
    echo "<h3>Have a good night!</h3>";
  }

  #echo date("d-m-y");

  ?>

  <a href="index.php">Home</a>

</body>

</html>