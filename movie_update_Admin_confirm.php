<?php
session_start();


	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			
			$title = addslashes($_POST['title']);
            $movieID = $_POST['MovieID'];
            $year = $_POST['year'];
            $genre= $_POST['genre'];
            $intro= $_POST['intro'];

			#echo $movieID;
			#echo $user;
			
			$update_statement = "UPDATE MoviesProject SET MovieName='$title', MovieYear='$year', MovieGenre='$genre', Introduction='$intro' where MovieID=$movieID;";
			
			
			#echo $update_statement;
			$db->exec($update_statement);
		}
		catch(Exception $e) {
					echo "Error: Updating Movie";
		}
		#header('Location: userhome.php');
		header('Location: headerAdmin.php');

?>
