
<?php
	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$username = $_POST['username'];
			$password= $_POST['password'];
			$email = $_POST['email'];
			$sex = $_POST['Sex'];
			$insert_statement = "INSERT INTO User VALUES('$username', '$password', '$email', '$sex');";
			#echo "$insert_statement";
			$db->exec($insert_statement);
			#$message = "success! please login";
			echo $message;
			
		}
		catch(Exception $e) {
					echo "Trying to register, please waite";
		}
		
?>


<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Movies</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
<section>
<form action="" method="post">
<label>Setup your user name:</label>
<input type="text" name="username" required /><br>
<label>Setup your password:</label>
<input type="text" name="password" required /><br>
<label>Enter your email:</label>
<input type="text" name="email" required/><br>
<label>Male: </label>
<input type="radio" name="Sex" value="M" /><br/>
<label>Female：</label>
<input type="radio" name="Sex" value="F" /><br/>
<input type="submit" value="Register" onclick="location.href='../index.php'" >
</form>
</section>
</body>


</html>