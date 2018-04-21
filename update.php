<?php
session_start();
include('connect.php');
echo "Your vote has been recorded!!!";
$name=$_GET['q'];
$u=$_SESSION['user'];
$query="update candidate set votecount=votecount+1 where idno=\"$name\"";
mysqli_query($dbh,$query) or die("error querying");
$que="update login set voted=1 where idno=\"$u\"";
mysqli_query($dbh,$que) or die("error querying");
?>

