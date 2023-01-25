<?php

//Set post to variables

$fmovie = $_POST['fmovie'];
$fmusic = $_POST['fmusic'];
$fbook = $_POST['fbook'];
$fnum = $_POST['fnum'];

//Going to echo to ensure I have the post values from the insert form

echo $fmovie;
echo '<br>';

//set up database and table names
$db_name = "db1";

$table_name = "interests";

include 'databaseconnect.php';


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


//call to see if an SSN exists
$sql = "INSERT INTO $table_name
        (fmovie, fmusic, fbook, fnum)
        VALUES
        ('$fmovie', '$fmusic', '$fbook', '$fnum')";

        if (mysqli_query($connection, $sql))
                    {
                       echo "New record created successfully";
                       echo '<br>';
                      echo '<br>';
                       echo '<a href="index.html">Go to Main Menu';
                    }
                    else
                    {
                       echo "Error: " . $sql . "" . mysqli_error($connection);
                    }




?>
