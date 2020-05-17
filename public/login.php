<?php
session_start();
// a function for check the data that user submit in form with db datas ( compare the form with db )
function userlogin($data){
    $connection = mysqli_connect('localhost', 'root', '', 'mispan');
    // checking the username
    $sql = "SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row = mysqli_query($connection, $sql);
    $res = mysqli_fetch_assoc($row);
    // checking the password
    if($res['password'] == $data['password']){
        $_SESSION['user'] = $res['username'];
        header("location:panel.php");
    } else {
        header("location:index.php?login=error");
    }
}