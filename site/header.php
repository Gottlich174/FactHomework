<?
session_save_path($_SERVER['DOCUMENT_ROOT'] . '/tmp');
session_start();
$hour = date(H);
function darkthememenuitem($hour)
{
    if (($hour < 8) or ($hour >= 20)) echo 'class="a_night"';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header <?
darktheme($hour);
?>>
        <span><b>Моя страница</b></span>
        <span><a href="table/table.html" target="_blank" <?
            darkthememenuitem($hour);
            ?>>Моя таблица Менделеева</a> </span>
        <span><a href="arrays/arrays.php" target="_blank" <?
            darkthememenuitem($hour);
            ?>>Массивы</a> </span>
        <span><a href="authorise.php" target="_blank" <?
            darkthememenuitem($hour);
            ?>>Авторизоваться</a> </span>
    <?
if (($_COOKIE['auth'] == 1) && (isset($_SESSION['lastlink'])))
    echo "Последний раз вы посещали сайт компании ". $_SESSION['lastlink'];
    ?>
        <form>
            <select name="theme">
                <option disabled selected>Выберите тему</option>
                <option name="theme" value="techno.jpg">Техно</option>
                <option name="theme" value="cosmos.jpg">Космос</option>
                <option name="theme" value="sky.jpg">Небеса</option>
            </select>
            <button type="submit">Применить</button>
        </form>
    <?
    if (isset($_GET['theme']))
        $_SESSION['theme'] = $_GET['theme'];
    ?>
</header>
</body>
</html>
