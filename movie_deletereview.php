<?php
	echo '<h2>Delete From My Movie List</h2>';

?>

<form action="movie_deletereview_confirm.php" method="post">
<label>Enter Title:</label>
<input type="text" name="movieid" value="<?php echo $movieid; ?>" /><br>
<input type="submit" value="Delete movie list" />