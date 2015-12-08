<?php
session_start();

if(isset($_SESSION['login_user']))
{
    # echo 'You are Logged as '.$_SESSION['login_user'].'<br/>';
}
include ('header1.php');

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
		<p><a href="movies.php?action=list"> Movies you haven't reviewed</a></p>
		<p><a href="movies.php?action=mylist">My Reviewed Movie</a></p>  
		<p><br></p>
		<p><a href="movies.php?action=addlist">Create My Movie List</a></p>
		<p><a href="movies.php?action=user_create_list">My Created Movie List</a></p>
  	</section>
 </body>
 <footer>
	<p>&copy; TCSS545, Group 8</p>
 </footer>
 </html>