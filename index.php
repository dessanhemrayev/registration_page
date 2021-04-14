<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>


</head>

<body>
    <form id="forma" action="" method="post">
    <p class="error_p" id="error_result"> </p>
        <label> Логин </label>

        <input type="text" id="login" name="login" placeholder="Введите логин" oninput="">

        <label> Пароль</label>

        <input type="password" id="password" name="password" placeholder="Введите пароль" oninput="f()">
        <div id="">
            <span class="succes_span" id="succes"> </span>
            <span class="error_span" id="error"> </span>
        </div>

        <button type="submit" id="btn">Войти</button>
        <p>У вас нет аккаунта? - <a href="regist.php">зарегистрируйтесь</a>!</p>
        
    </form>


</body>

</html>