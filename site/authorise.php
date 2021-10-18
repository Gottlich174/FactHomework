<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<style>
    body{
        background-image: url("images/back.jpg");
        background-size: cover;
        margin: 1%;
    }
</style>
<body>

</body>
</html>
<?
$str = '';
?>
    <div style="border: solid 2px; border-radius: 20px; padding: 20px; background-color: rgba(255, 255, 255, 0.9);">
        <div style="align-content: center">

            <h1 style="align-content: center; text-align: center">Авторизация</h1>
            <form method="post">
                <p style="align-content: center; text-align: center;">
                    <input type="text" name="login" placeholder="Введите логин">
                </p>
                <p style="align-content: center; text-align: center;">
                    <input type="password" name="password" id="password-input" placeholder="Введите пароль"
                           name="password">
                </p>
                <p style="align-content: center; text-align: center;">
                    <button onclick="return show_hide_password(this);">Показать пароль</button>
                </p>
                <script>
                    function show_hide_password(target) {
                        var input = document.getElementById('password-input');
                        if (input.getAttribute('type') == 'password') {
                            input.setAttribute('type', 'text');
                        } else {
                            input.setAttribute('type', 'password');
                        }
                        return false;
                    }
                </script>
                <p>
                    <button type="submit" style="width: 100%;">Войти</button>
                </p>
            </form>
            <a href="main.php" style = "text-decoration: none; color: black;"><button style="width: 100%;">Вернуться на главную</button></a>
        </div>
    </div>

<?php
$login = $_POST['login'];
if ((md5(trim($_POST['password'])) == 'd4b94369bf6574e95eb80df2f202ca80') && (md5(trim($_POST['login'])) == 'e3afed0047b08059d0fada10f400c1e5'))
    echo "
    <div style = 'position: fixed; text-align: center; align-content: center; width: 100%; top: 0; right:0; left: 0; bottom: 0; height: 100%; z-index: 100; background-color: rgba(0, 0, 0 , 0.8);'>
    <div style='background-color: white; border: solid 2px; border-radius: 10px;
    margin: 10px 40px 0px 40px'>
        <h1>Здравствуйте, $login, введите свой комментарий</h1>
    <form method='get'>
    <p> 
    <textarea name='comment' style = 'width: 70%;'></textarea>
</p>
    <button type='submit' style='margin-bottom: 10px;'>Отправить</button>
</form>
</div>
    </div>
    ";
elseif ((count($_POST) > 0) && (($_POST['login'] == '') || ($_POST['password']) == ''))
    echo "
    <div style = 'position: fixed; text-align: center; align-content: center; width: 100%; top: 0; right:0; left: 0; bottom: 0; height: 100%; z-index: 100; background-color: rgba(0, 0, 0 , 0.8);'>
    <div style='background-color: white; border: solid 2px; border-radius: 10px;
    margin: 10px 40px 0px 40px'>
        <h1>Вы не ввели логин или пароль</h1>
        <form>
        <button type='submit' style='margin-bottom: 10px'>Повторить попытку</button>
</form>
</div>
    </div>
    ";
elseif ((count($_POST) > 0) && (($_POST['login'] != '') || ($_POST['password']) != ''))
    echo "
    <div style = 'position: fixed; text-align: center; align-content: center; width: 100%; top: 0; right:0; left: 0; bottom: 0; height: 100%; z-index: 100; background-color: rgba(0, 0, 0 , 0.8);'>
    <div style='background-color: white; border: solid 2px; border-radius: 10px;
    margin: 10px 40px 0px 40px'>
        <h1>Вы ввели неверный логин или пароль</h1>
        <form>
        <button type='submit' style='margin-bottom: 10px'>Повторить попытку</button>
</form>
</div>
    </div>
    ";
//Логин Admin e3afed0047b08059d0fada10f400c1e5
//Пароль Fact6 d4b94369bf6574e95eb80df2f202ca80
if (isset($_GET)) {
    $str = $_GET['comment'];
    mail('kaisermgntv@gmail.com', 'Comment', $str);
}
?>