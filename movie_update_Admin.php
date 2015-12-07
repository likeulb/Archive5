<?php


if (!isset($db)) {
    require('dbconnect.php');
    $db = get_connection();

$title = $_POST['title'];
$title = addslashes($title);
$movieID = $_POST['MovieID'];
$year = $_POST['year'];
$genre= $_POST['genre'];
$intro= $_POST['intro'];
$select_statement = "SELECT * FROM MoviesProject WHERE MovieName='$title' AND MovieID=$movieID;";
#echo $select_statement;
$movie = $db->query($select_statement);
$movie = $movie->fetch();

}


if(!isset($_SESSION['login_user']))
{
    echo 'please register or login to review the movie';
  
}



?>


<form action="movie_update_Admin_confirm.php" method="post">
    <label>Movie Name:</label>
    <input type="text" name="title" value="<?php echo $title; ?>" /><br>
    <label>Movie Year:</label>
    <input type="int" name="year" value="<?php echo $year; ?>"/><br>
    <label>Movie Genre:</label>
    <input type="int" name="genre" value="<?php echo $genre; ?>"/><br>
    <label>Movie Introduction:</label>
    <input type="int" name="intro" value="<?php echo $intro; ?>"/><br>
    
    <input type='hidden' name='MovieID' value="<?php echo $MovieID; ?>"/>
    <input type="submit" value="Update Movie" />
</form>