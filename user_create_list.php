<?php

echo '<h2>My Created Movie List</h2>';

if (isset($_POST['title']))
    $filter = addslashes($_POST['title']);
else
    $filter = '';

if (!isset($db)) {
    require('dbconnect.php');
    $db = get_connection();
}
$user = $_SESSION['login_user'];
$select_statement = "SELECT * FROM MovieList where User_UserID='$user';";


    #echo $select_statement;
$movies = $db->query($select_statement);

if ($movies != null) {
    echo "<table border='1'>";
    echo "<tr><th></th><th>Movie List Name</th><th>Tag</th><th>Description</th></tr>";
    foreach ($movies as $movie) {
        $title = htmlentities($movie[1], ENT_QUOTES);
        #echo $title;
        echo "<tr><td><form action='movies.php?action=deletelist' method='post'>
			        		<input type='hidden' name='title' value='$movie[0]' /><input type='submit' value='Delete' /></form></td>";
        echo "<td>" . $movie[0] . "</td>";
        echo "<td>" . $movie[1] . "</td>";
        echo "<td>" . $movie[2] . "</td></tr>";
    }
    echo "</table>";
}
?>