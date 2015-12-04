<?php
	echo '<h2>Add To My Movie List</h2>';
	$user = $_SESSION['login_user'];
	#echo $user

?>

<form action="movie_addlist_new.php" method="post">
<label>Movie List name:</label>
<input type="text" name="title" required /><br>
<label>Description:</label>
<input type="text" name="des" required /><br>
<label>Tags:</label>
<input type="text" name="tag" required/><br>
<input type='hidden' name='user' value="<?php echo $user; ?>"/>
<input type="submit" value="Create My Movie List" />
</form>