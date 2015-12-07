<?php
	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$movieid = ($_POST['movieid']);
			$user = $_SESSION['login_user'];
			$insert_statement = "DELETE FROM ReviewMovie WHERE Movies_MovieID='$movieid' AND User_UserID='$user';";
			#echo "$insert_statement";
			
			$db->exec($insert_statement);
			echo "Movie review has been deleted";
		}
		catch(Exception $e) {
					echo "Inserting Movie";
		}
		#header('Location: movies.php?action=user_create_list');

?>
