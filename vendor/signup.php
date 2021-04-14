<?php
session_start();
require_once "../include/connect_db.php";

$login=$_POST["login"];
$parol=md5($_POST["password"]);



if (mysqli_query($connect,"INSERT INTO `user` ( `login`, `parol`) VALUES ( '$login', '$parol')")==1)
{
   

    $_SESSION['user']=['user_login'=>$login];
    echo json_encode(array("result"=>"good"));
}
else
{
    echo json_encode(array("result"=>"error"));
}

?>

