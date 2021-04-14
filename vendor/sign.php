<?php
session_start();
require_once "../include/connect_db.php";

$login=$_POST["login"];
$parol=md5($_POST["password"]);

$check_user=mysqli_query($connect,"SELECT * FROM `user`WHERE `login`='$login' AND `parol`='$parol'");

if (mysqli_num_rows($check_user)==1)
{
    $user=mysqli_fetch_assoc($check_user);

    $_SESSION['user']=[
        "user_login"=>$user['login']

    ];
    echo json_encode(array("result"=>"good"));
}
else
{
    echo json_encode(array("result"=>"error"));
}

?>

