<?php

echo '<h2>Have you seen those movies?</h2>';

if (isset($_POST['title']))
    $filter = addslashes($_POST['title']);
else
    $filter = '';

if (!isset($db)) {
    require('dbconnect.php');
    $db = get_connection();
}
$select_statement = "SELECT MovieName, MovieYear, Introduction, MovieGenre, AVG(ReviewRate) as score, MoviesProject.MovieID  FROM MoviesProject 
left join ReviewProject on MoviesProject.MovieID=ReviewProject.MovieID ";
$user = $_SESSION['login_user'];

if ($filter != '')
    $select_statement .= "where MovieName LIKE '%$filter%' AND MoviesProject.MovieID not in (select Movies_MovieID from ReviewMovie where User_UserID='$user') group by MoviesProject.MovieID;";
else
    $select_statement .= "where MoviesProject.MovieID not in (select Movies_MovieID from ReviewMovie where User_UserID='$user') group by MoviesProject.MovieID;";
$movies = $db->query($select_statement);
#echo $select_statement;
if ($movies != null) {
    echo "<table border='1'>";
    echo "<tr><th></th><th>Movie Name</th><th>Year</th><th>Introduction</th><th>Genre</th><th>Average Score</th></tr>";
    foreach ($movies as $movie) {
        $title = htmlentities($movie[1], ENT_QUOTES);
        #echo $title;
        echo "<tr><td><form action='movies.php?action=update' method='post'><input type='hidden' name='title' value='$movie[0]' />
			        		<input type='hidden' name='movieID' value='$movie[5]' /><input type='submit' value='Rate this movie' /></form></td>";
        
        echo "<td>" . $movie[0] . "</td>";
        echo "<td>" . $movie[1] . "</td>";
        echo "<td>" . $movie[2] . "</td>";
        echo "<td>" . $movie[3] . "</td>";
        echo "<td>" . $movie[4] . "</td></tr>";
    }
    echo "</table>";
}
?>