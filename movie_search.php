<?php
	echo '<h1>Please enter movie title</h1>';

?>

<form action="movies.php" method="post">
<label>Enter title:</label>
<input type="text" name="title" required/>
<input type="submit" value="Search" />
<input type="hidden" name="action" value="list" /><br>
</form>