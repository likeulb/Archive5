<?php
	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$MovieListName = ($_POST['title']);
			$insert_statement = "DELETE FROM MovieList WHERE MovieListName='$MovieListName';";
			//echo "$insert_statement";
			$db->exec($insert_statement);
		}
		catch(Exception $e) {
					echo "Deleting Movie";
		}
		header('Location: movies.php?action=user_create_list');

?>
