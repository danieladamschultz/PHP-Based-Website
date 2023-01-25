<?php

//Set post to variables

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$location = $_POST['location'];


//Going to echo to ensure I have the post values from the insert form

echo $fname;
echo '<br>';

//set up database and table names
$db_name = "db1";

$table_name = "user";
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
        (fname, lname, email, age, location)
        VALUES
        ('$fname', '$lname', '$email', '$age', '$location')";

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
