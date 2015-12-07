<?php
session_start();

if(isset($_SESSION['login_user']))
{
   # echo 'You are Logged as '.$_SESSION['login_user'].'<br/>';
   # include('header1.php'); 
    
}
else
{
#include('header.php');
}
	if (isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = 'list';
	if (!isset($db)) {
		require('dbconnect.php');
		$db = get_connection();
	}

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	
	
	  		<ul>
	    		<a href="adminhome.php" class="current">Get Back</a>
	    		
	  		</ul>
  	
	
	
</head>

<body>


  <section>
  <?php
  	switch($action) {
  	        case 'listAdmin':
  	            include('movie_list_Admin.php');
				break;
  	        case 'addMovie':
  	            include('movie_addmovie.php');
				break;
			case 'addMovieconfirm':
  	            include('movie_add_confirm.php');
				break;
			case 'updateMovie':
			    $title =  $_POST['title'];
				$MovieID= $_POST['movieID'];
				$year= $_POST['year'];
				$genre= $_POST['genre'];
				$intro= $_POST['intro'];
  	            include('movie_update_Admin.php');
				break;
			
			
			default:
	}?>
  </section>
  

</body>
</html>