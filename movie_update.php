<?php


if (!isset($db)) {
    require('dbconnect.php');
    $db = get_connection();

$title = $_POST['title'];
$title = addslashes($title);
$movieID = $_POST['MovieID'];
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


<form action="movie_update_confirm.php" method="post">
    <label>Movie Name:</label>
    <input type="text" name="title" value="<?php echo $title; ?>" /><br>
    <label>Enter your rate(1-10):</label>
    <input type="int" name="rate" /><br>
    <label>Any comments:</label>
    <input type="text" name="comments" /><br>
    
    <input type='hidden' name='MovieID' value="<?php echo $MovieID; ?>"/>
    <input type="submit" value="Review Movie" />
</form>