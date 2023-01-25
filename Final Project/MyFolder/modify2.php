<?php

//set up database and table names
$db_name = "db1";

$table_name = "user";

//Set posts to variables
$fname = $_POST['fname'];
echo $fname;
echo '<br>';

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
$sql = "SELECT * from $table_name WHERE fname = $fname";
$result = @mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);

//Check if a row came back
if ($num > 1) {
	  echo "Not a Valid Age"; ?>
	  <a href='index.html'><h3>Click Here to Return Back to the MAIN MENU</h3></a>
	  <?php
      exit;
	  }


if ($num == 1) {
   while ($row = mysqli_fetch_array($result)) {
             $age = $row['age'];
             $fname = $row['fname'];


      }
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>

<html>
<body>

<form method = "post"
	action = "modify3.php" name="verify">

<table cellpadding="0" cellspacing="0" border="0" >
<tr>
<td width=33%>
<div id="admin">

<br>
    <label for "fname">First Name:</label>
    <input type = "text" name = "fname"  value = "<?php echo $fname ?>" size="12" maxlength="12">
<br>
<div class="submit_form" id="submit">
	<input type="submit" value="Submit" class="button" />
</div>


</tr>


</form>

</body>
</html>
