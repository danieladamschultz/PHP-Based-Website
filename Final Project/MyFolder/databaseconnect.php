<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'db1');
if (!$connection) {
    die('Could not connect: ' . mysqli_connect_error());
}
else
  //optional else statememnt to test if connected.  comment out when live
  {
  echo 'Connected successfully';
  echo '<br>';
  }
?>
