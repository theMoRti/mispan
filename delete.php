<?php

// get id in url form db with GET method
$id=$_GET['id'];
// connection to the db and run the query
$connection=mysqli_connect('localhost','root','','mispan');
$query="DELETE FROM infotbl WHERE user_id='$id'";
mysqli_query($connection,$query);
header("location:panel.php?delete=ok");

?>