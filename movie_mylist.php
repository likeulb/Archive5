<?php
#session_start();
echo '<h2>My Reviewed Movie List</h2>';

	if (!isset($db)) {
			require('dbconnect.php');
			$db = get_connection();
	}
		try {
			global $db;
			
			$user = $_SESSION['login_user'];
			
			#$list_statement = "select MovieListName, MovieListYear, MovieListLength, MovieListGenre, MovieListRate from MovieList";
			$list_statement = "select MovieName, ReviewRate, ReviewComment from ReviewMovie, Movies where User_UserID='$user' and Movies_MovieID=MovieID;";
			
			#$insert_statement = "INSERT INTO User VALUES('$username', '$password', '$email', '$sex', '', '');";
			#$insert_statement = "INSERT INTO Movies VALUES('$title', $year, $length, '$genre', '$studio', null);";
			 
			
			#echo $list_statement;
			
			$movies = $db->query($list_statement);

if ($movies != null) {
    echo "<table border='1'>";
    echo "<tr><th>Title</th><th>My Rate</th><th>My Comments</th></tr>";
    foreach ($movies as $movie) {
        $title = htmlentities($movie[1], ENT_QUOTES);
        #echo $title;
        
        
        echo "<td>" . $movie[0] . "</td>";
        echo "<td>" . $movie[1] . "</td>";
        echo "<td>" . $movie[2] . "</td></tr>";
    }
    echo "</table>";
}
		}
		catch(Exception $e) {
					echo "Error: Updating Movie";
		}
	

