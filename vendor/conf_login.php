<?php

require_once "../include/connect_db.php";

$login=$_POST["login"];


$check_user=mysqli_query($connect,"SELECT * FROM `user`WHERE `login`='$login'");

if (mysqli_num_rows($check_user)==1)
{
    $user=mysqli_fetch_assoc($check_user);
  
    echo json_encode(array("result"=>"error"));
}
else
{
    echo json_encode(array("result"=>"good"));
}

?>