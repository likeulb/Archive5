<?php
	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$MovieListName = ($_POST['title']);
			$MovieListTag = $_POST['tag'];
			$MovieListDes= $_POST['des'];
			$user1= $_POST['user'];
			#$user = $_SESSION['login_user'];
			echo $user;
			$insert_statement = "INSERT INTO MovieList VALUES('$MovieListName', '$MovieListTag',  '$MovieListDes', '$user1');";
			#echo "$insert_statement";
			$db->exec($insert_statement);
		}
		catch(Exception $e) {
					echo "Inserting Movie";
		}
		header('Location: movies.php?action=user_create_list');

?>
