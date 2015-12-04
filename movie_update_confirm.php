<?php
session_start();


	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$title = addslashes($_POST['title']);
			$MovieID= $_POST['MovieID'];
			$rate = $_POST['rate'];
			$comments = $_POST['comments'];
			$user = $_SESSION['login_user'];
			echo $movieID;
			#echo $user;
			
			$update_statement = "INSERT INTO ReviewMovie VALUES('$comments', $rate, '$user', '$MovieID');";
			 
			
			#echo $update_statement;
			$db->exec($update_statement);
		}
		catch(Exception $e) {
					echo "Error: Updating Movie";
		}
		header('Location: userhome.php');

?>
