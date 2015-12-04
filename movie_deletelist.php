<?php
	echo '<h2>Delete From My Movie List</h2>';

?>

<form action="movie_deletelist_new.php" method="post">
<label>Enter Title:</label>
<input type="text" name="title" value="<?php echo $title; ?>" /><br>
<input type="submit" value="Delete movie list" />