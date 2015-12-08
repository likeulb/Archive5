<?php
session_start();

if(isset($_SESSION['login_user']))
{
   # echo 'You are Logged as '.$_SESSION['login_user'].'<br/>';
    include('header1.php'); 
    
}
else
{
include('header.php');
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
	<title>Movies</title>
	<link rel="stylesheet" href="main.css">
	
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
			case 'list':
				include('movie_list.php');
				break;
			case 'user_create_list':
			     include('user_create_list.php');
				break;
			case 'search':
				include('movie_search.php');
				break;
			case 'register':
				include('movie_register.php');
				break;
			case 'loggeredUserSearch':
			    header('Location:header1.php');
			case 'mylist':
				include('movie_mylist.php');
				break;
			case 'addlist':
				include('movie_addlist.php');
				break;
			case 'deletelist':
			    $title =  $_POST['title'];
				include('movie_deletelist.php');
				break;
			case 'deletereview':
			    $title =  $_POST['movieid'];
				include('movie_deletereview_confirm.php');
				break;
		    case 'update':
			    $title =  $_POST['title'];
				$MovieID= $_POST['movieID'];
     #  echo $title, $MovieID;
				include('movie_update.php');
				break;
			default:
	}?>
  </section>
  

</body>
<footer>
	<p>&copy; TCSS545, Group 8</p>
  </footer>
</html>


 