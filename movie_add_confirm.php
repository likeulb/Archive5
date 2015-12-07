<?php
session_start();


	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			$title = addslashes($_POST['title']);
			$year = $_POST['year'];
			$star = $_POST['star'];
			$intro = $_POST['intro'];
			$MovieID= $_POST['MovieID'];
			$genre = $_POST['genre'];
			$user = $_SESSION['login_user'];
			echo $movieID;
			#echo $user;
			
			$select_id = "select MovieID from MoviesProject order by MovieID DESC limit 1;";
			$sth=$db->query($select_id);
			while($r=$sth->fetch()){
			    $newid = $r[0]+1;
			    $insert_movie = "INSERT INTO MoviesProject values ($newid, '$title', $year, '$genre', '$intro');";
			    $db->query($insert_movie);
			    #echo $insert_movie;
			    
			    $select_statement = "SELECT * FROM yyxia.StarsProject WHERE StarName='$star';";
			    #echo $select_statement;
			    $starname = $db->query($select_statement);
			    $row=$starname->fetch();
			    echo $row;
			    if ($row == null) {
                    #echo "ttttt";
                    $insert_star = "INSERT INTO StarsProject values ('$star', '','');";
                    $db->query($insert_star);
		        }
		        $insert_starin = "INSERT INTO StarsInProject values ('$newid','$star');";
		        $db->query($insert_starin);
			    
			}
			#echo "Movie has been added";
			
			
		
		}
		catch(Exception $e) {
					echo "Error: Updating Movie";
		}
		header('Location: headerAdmin.php');
		
		

?>

