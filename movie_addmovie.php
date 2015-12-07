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
		#header('Location: headerAdmin.php');

?>

<form action="movie_add_confirm.php" method="post">
    <label>Movie Name:</label>
    <input type="text" name="title" value="<?php echo $title; ?>" /><br>
    <label>Movie Year:</label>
    <input type="int" name="year" value="<?php echo $year; ?>"/><br>
    <label>Movie Star:</label>
    <input type="text" name="star" value="<?php echo $star; ?>"/><br>
    <label>Movie Introduction:</label>
    <input type="text" name="intro" value="<?php echo $intro; ?>"/><br>
    <label>Movie Genre:</label>
    <input type="text" name="genre" value="<?php echo $genre; ?>"/><br>
    
    
    <input type='hidden' name='MovieID' value="<?php echo $MovieID; ?>"/>
    <input type="submit" value="Add Movie" />
</form>