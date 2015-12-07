<?php
session_start();

if(isset($_SESSION['login_user']))
{
    # echo 'You are Logged as '.$_SESSION['login_user'].'<br/>';
}
include ('headerAdmin.php');
// header('Location: headerAdmin.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Movies</title>
	<link rel="stylesheet" href="main.css">
    </head>
    
    <!-- 
<ul>
		<li><a href="movies_admin.php?action=addMovie">Add New Movie</a></li>
		<li><a href="movies_admin.php?action=listAdmin">List All Movies</a></li>
		   		
	</ul>
	
 -->
	<body>
    	<section>    
			<p><a href="movies_admin.php?action=addMovie">Add New Movie</a></p>
			<p><a href="movies_admin.php?action=listAdmin">List All Movies</a></p>  
 		</section>
 	</body>
 	
 </html>