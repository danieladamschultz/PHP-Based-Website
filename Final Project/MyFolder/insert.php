<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>

<html>
<body>

<p> Insert a record </p>
<br>

<form method = "post"
	action = "insert2.php" name="verify">

<table cellpadding="0" cellspacing="0" border="0" >
<tr>
<td width=33%>
<div id="admin">


<br>
    <label for "fname">First Name:</label>
    <input type = "text" name = "fname"  value = "" size="12" maxlength="12">
<br>
<br>
    <label for "lname">Last Name:</label>
    <input type = "text" name = "lname"  value = "" size="12" maxlength="12">
<br>
<br>
    <label for "email">Email:</label>
    <input type = "text" name = "email"  value = "" size="12" maxlength="12">
<br>
<br>
    <label for "age">Age:</label>
    <input type = "text" name = "age"  value = "" size="12" maxlength="12">
<br>
<br>
    <label for "location">Location:</label>
    <input type = "text" name = "location"  value = "" size="12" maxlength="12">
<br>
<br>


<div class="submit_form" id="submit">
	<input type="submit" value="Submit" class="button" />
</div>


</tr>


</form>

</body>
</html>
