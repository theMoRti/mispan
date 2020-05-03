<?php

$id=$_GET['id'];
$connection=mysqli_connect('localhost','root','','mispan');
$query="DELETE FROM infotbl WHERE user_id='$id'";
mysqli_query($connection,$query);
header("location:panel.php?delete=ok");

?>