<?php

//set up database and table names
$db_name = "db1";

$table_name = "interests";

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
    fmovie = '$_POST[fmovie]'
    WHERE fmovie = '$_POST[fmovie]'";


    $result = @mysqli_query($connection, $sql) or die(mysqli_error());

    echo '<br>';
   echo '<br>';
    echo '<a href="index.html">Go to Main Menu';

?>
