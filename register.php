<?php

if(isset($_POST['submit'])){

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if(!empty($fullname) && !empty($username) && !empty($password) && !empty($email)){
		require ("./include/connect.php");
		$dbusername = mysql_query("SELECT username FROM cms_users WHERE username='$username'") or die(mysql_error());
		$count = mysql_num_rows($dbusername);


		if($count==0){

			echo "Username is available!";
		}
		else{
			echo "Username is already in use!";
		}
		
	}
	else{
		echo "Please fill in all the fields!";
	}


}
else{
?>
<html>
<head>
</head>
<body>

<form action="register.php" method="POST">
<table>
<tr>
	<td>
		Full Name:
		<input type="text" name="fullname" />
	</td>
<tr>
<tr>
	<td>
		Username:
		<input type="text" name="username" />
	</td>
</tr>
<tr>
	<td>
		Password:
		<input type="password" name="password" />
	</td>
<tr>
<tr>
	<td>
		E-mail:
		<input type="text" name="email" />
	</td>
<tr>
<tr>
	<td>
		<input type="submit" name="submit" value="Register" />
	</td>
<tr>
</table>
</form>
<?php
}
?>
</body>
</html>