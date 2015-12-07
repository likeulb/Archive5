<?php

echo '<h2>Movie List</h2>';

if (isset($_POST['title']))
    $filter = addslashes($_POST['title']);
else
    $filter = '';

if (!isset($db)) {
    require('dbconnect.php');
    $db = get_connection();
}
$select_statement = "SELECT MovieName, MovieYear,MovieGenre, starName, Introduction, MoviesProject.MovieID 
FROM MoviesProject, StarsInProject where StarsInProject.MovieID=MoviesProject.MovieID;";


$movies = $db->query($select_statement);

if ($movies != null) {
    echo "<table border='1'>";
    echo "<tr><th></th><th>Movie Name</th><th>Year</th><th>Genre</th><th>Star</th><th>Introduction</th></tr>";
    foreach ($movies as $movie) {
        $title = htmlentities($movie[1], ENT_QUOTES);
        #echo $title;
        echo "<tr><td><form action='movies_admin.php?action=updateMovie' method='post'><input type='hidden' name='title' value='$movie[0]' />
                <input type='hidden' name='year' value='$movie[1]' /><input type='hidden' name='genre' value='$movie[2]' /><input type='hidden' name='intro' value='$movie[4]' />
			        		<input type='hidden' name='movieID' value='$movie[4]'/><input type='submit' value='update' /></form></td>";
        echo "<td>" . $movie[0] . "</td>";
        echo "<td>" . $movie[1] . "</td>";
        echo "<td>" . $movie[2] . "</td>";
        echo "<td>" . $movie[3] . "</td>";
        echo "<td>" . $movie[4] . "</td></tr>";
    }
    echo "</table>";
}
?>