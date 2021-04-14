<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/script.js"></script>


</head>

<body>
    <form id="forma_regist" action="" method="post">
    <p class="error_p" id="error_result"> </p>
        <label> Логин </label>

        <input type="text" id="login" name="login" placeholder="Введите логин" oninput="prover()">
        <div id="">
            <span class="succes_span" id="succes_login"> </span>
            <span class="error_span" id="error_login"> </span>
        </div>
        <label> Пароль</label>

        <input type="password" id="password" name="password" placeholder="Введите пароль" oninput="f()">
        <div id="">
            <span class="succes_span" id="succes"> </span>
            <span class="error_span" id="error"> </span>
        </div>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" oninput="confirm_pass()">
        <div id="">
            <span class="succes_span" id="conf_pass_y"> </span>
            <span class="error_span" id="conf_pass_n"> </span>
        </div>

        <button type="submit" id="btn_regist">Регистрация</button>
        <p> <a href="index.php">Назад</a></p>
        
    </form>


</body>

</html>