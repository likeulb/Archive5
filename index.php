<?php
session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 

$sql="SELECT UserID FROM yyxia.User WHERE UserID='$myusername' and UserPassword='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("myusername");

//$_SESSION['myusername']=$myusername;

$_SESSION['login_user']=$myusername;

$var1="admin";
if(strcmp($myusername, $var1)==0){   
    header("location: adminhome.php");
}
else{
    header("location: userhome.php");
    }
}
else 
{
$error="Your Login Name or Password is invalid";
echo $error;
}
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

 <?php include('header.php'); ?>

  <section>
    <form action="" method="post">
   
<label>User Name :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Log in "/><br />
</form>
  </section>

<section>
 <h1>Welcome to our Movies site! Please login!</h1>
</section>

  <footer>
	<p>&copy; TCSS545, Group 8??</p>
  </footer>
</body>
</html>