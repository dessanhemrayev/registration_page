<?php

$connect=mysqli_connect($host="localhost",$user="root",$password="",$database="users");

if(!$connect)
    {
        die("Ошибка подключение!");
    }
?>
