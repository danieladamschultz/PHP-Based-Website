<?php

//set up database and table names
$db_name = "db1";

$table_name = "user";

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


  $sql = "UPDATE $table_name SET
    fname = '$_POST[fname]'
    WHERE fname = '$_POST[fname]'";


    $result = @mysqli_query($connection, $sql) or die(mysqli_error());

    echo '<br>';
   echo '<br>';
    echo '<a href="index.html">Go to Main Menu';

?>
