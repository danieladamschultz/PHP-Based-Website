<?php

//Set posts to variables
$fname = $_POST['fname'];
echo $fname;
echo '<br>';

//set up database and table names
$db_name = "db1";

$table_name = "user";

// Connect to the database
include "databaseconnect.php";
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


$sql = "DELETE from $table_name WHERE fname = ('$fname')";



if ($connection->query($sql) === TRUE && $connection->affected_rows > 0) {
    echo "Record deleted successfully";
} elseif ($connection->affected_rows == 0) {
        echo "Record not deleted from table ";
        echo "<br />";
        echo "Error deleting record: " . $connection->error;
}
else
  {
      echo "Error deleting record: " . $connection->error;
      echo "<br />";
}

?>
<br>
<a href='index.html'> <h2>Go to Main Menu</h2></a>
