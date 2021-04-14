<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ПрофилЬ пользователя</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <link rel="stylesheet" href="../styles/style.css">
    
<style>
form{
    align-items: center;
    justify-content: center;
}

</style>

</head>

<body>
    <form >
<h1>Привет <?=$_SESSION['user']['user_login']?></h1>
        
    </form>


</body>

</html>