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
//call to see if SSN exists
$sql = "SELECT * from $table_name";
$result = @mysqli_query($connection, $sql);
//$num = mysqli_result($result);
$num = mysqli_num_rows($result);

//Check if a row came back
if ($num > 1) {
	  echo "Not a Valid Age"; ?>
	  <a href='index.html'><h3>Click Here to Return Back to the MAIN MENU</h3></a>
	  <?php
      exit;
	  }


if ($num > 0) {
   while ($row = mysqli_fetch_array($result)) {
             $age = $row['age'];
             $fname = $row['fname'];

    echo 'Displays in php code';
    echo '<br>';
    echo '<br>';
   	echo 'age: ', $age;
    echo '<br>';
    echo 'First Name: ', $fname;
    echo '<br>';
    echo '---------------------------------------';
    echo '<br>';
      }
    }
    echo '<br>';
    echo '<br>';
    ?>
    <a href='index.html'><h3>Click Here to Return Back to the MAIN MENU</h3></a>
    <?php
?>
