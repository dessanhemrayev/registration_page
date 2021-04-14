let fl = false;
let fl2 = false;
let fl3 = false;
const prover = () => {
    document.getElementById("error_result").innerHTML = "";

    let login = document.getElementById("login").value;
    if (login.length > 0) {

        $.ajax({
            url: 'vendor/conf_login.php', //url страницы (vendor/sign.php)
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#" + 'forma_regist').serialize(), // Сеарилизуем объект

            success: function(data) {

                let dt = $.parseJSON(data);
                if (dt.result === "good") {
                    document.getElementById("succes_login").innerHTML = "Правильно";
                    document.getElementById("error_login").innerHTML = "";

                    document.getElementById("btn_regist").disabled = false;
                    fl3 = true;

                } else if (dt.result === "error") {
                    document.getElementById("succes_login").innerHTML = "";
                    document.getElementById("error_login").innerHTML = "Пользователь с таким логинем уже существует!!!";
                    fl3 = false;
                    document.getElementById("btn_regist").disabled = true;
                }
            },

            error: function(response) { // Данные не отправлены
                document.getElementById("error_result").innerHTML = "Ошибка при отправке данных";
            }
        });
    }


    return false;
};


const f = () => {
    let st = document.getElementById("password").value;
    let k = 0;
    let l = 0;
    let lk = 0;

    if (st.length === 0) {
        document.getElementById("succes").innerHTML = "";
        document.getElementById("error").innerHTML = "";
    } else

    if (st.length > 5) {
        for (let i = 0; i < st.length; i++) {
            let ui = st[i].charCodeAt(0);
            if (((st[i].charCodeAt(0) > 1040) && (st[i].charCodeAt(0) < 1071)) || ((st[i].charCodeAt(0) >= 65) && (st[i].charCodeAt(0) <= 90))) {
                k++;
            }
            if (((st[i].charCodeAt(0) > 1072) && (st[i].charCodeAt(0) < 1103)) || ((st[i].charCodeAt(0) >= 95) && (st[i].charCodeAt(0) <= 122))) {
                l++;
            }
            if ((st[i].charCodeAt(0) > 48) && (st[i].charCodeAt(0) < 58)) {
                lk++;
            }
        }

        if (k != 0 && l != 0 && lk != 0) {
            fl = true;
            document.getElementById("succes").innerHTML = "Правильно";
            document.getElementById("error").innerHTML = "";
        } else {
            fl = false;
            document.getElementById("succes").innerHTML = "";
            document.getElementById("error").innerHTML = "Не правильно";
        }
    } else {
        fl = false;
        document.getElementById("succes").innerHTML = "";
        document.getElementById("error").innerHTML = "Не правильно";
    }

};

function confirm_pass() {
    let st = document.getElementById("password").value;
    let st2 = document.getElementById("confirm_password").value;
    if (st.lenght === 0 || st2.lenght === 0) {
        document.getElementById("conf_pass_y").innerHTML = "";
        document.getElementById("conf_pass_n").innerHTML = "";
    }

    if ((st === st2)) {
        document.getElementById("conf_pass_y").innerHTML = "Пароли совпадают";
        document.getElementById("conf_pass_n").innerHTML = "";
        fl2 = true;
    } else {
        document.getElementById("conf_pass_y").innerHTML = "";
        document.getElementById("conf_pass_n").innerHTML = "Пароли не совпадают";
        fl2 = false;
    }
};




$(document).ready(function() { //авторизация
    $("#btn").click(
        function() {
            if (fl) {
                sendAjaxForm('forma', 'vendor/sign.php');
                return false;
            }

        }
    );
});

$(document).ready(function() { //регистрация

    $("#btn_regist").click(

        function() {
            if (fl && fl2 && fl3) {
                sendAjaxForm('forma_regist', 'vendor/signup.php');
                return false;
            }
        }

    );



});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url: url, //url страницы (vendor/sign.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + ajax_form).serialize(), // Сеарилизуем объект

        success: function(data) {
            console.log(data);
            let dt = $.parseJSON(data);
            if (dt.result === "good") {
                location.href = 'user/index.php'; // если все прошло успешно, данные все проверились и ответ good отправляем на index.php
            } else if (dt.result === "error") {
                document.getElementById("error_result").innerHTML = "Неверный логин или пароль"; // выводим ошибку
            }
        },

        error: function(response) { // Данные не отправлены
            document.getElementById("error_result").innerHTML = "Ошибка при отправке данных";
        }
    });
}