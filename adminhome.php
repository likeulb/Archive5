<?php
session_start();

if(isset($_SESSION['login_user']))
{
    # echo 'You are Logged as '.$_SESSION['login_user'].'<br/>';
}
#include ('headerAdmin.php');
header('Location: headerAdmin.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Movies</title>
	<link rel="stylesheet" href="main.css">
    </head>
 
 
 </html>