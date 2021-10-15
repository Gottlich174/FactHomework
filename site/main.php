<?
$hour = date("H");
function darktheme($hour)
{
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
}

function darkthemeitems($hour)
{
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
}

function dbody($hour)
{
    if (($hour < 8) or ($hour >= 20)) echo '<body style="color: white;">';
    else
        echo '<body>';
}

function davatar($hour)
{
    if (($hour < 8) or ($hour >= 20)) echo 'class="avatar_night"';
    else echo 'class="avatar"';
}

function datecounter()
{
    $hb = date('d.m.Y', strtotime($_POST['hb']));
    echo date("d.m.Y") . "</div>";
    echo "<div>Дата рождения: " . $hb . "</div>";
    echo "<div> Прошло дней: " . $dateDiff = date_diff(new DateTime(), new DateTime($hb))->days . "</div>";
}

function multicolortext()
{

    $str = "Весь материал преподаётся доступно для всех. И даже тот факт, что я уже имел опыт работы с HTML,
                    CSS, Git и др.,
                    не делает их менее интересным. С удовольствием выполняю домашние работы. Надеюсь мы все будем
                    продолжать в том же духе и достигнем определённых высот в Web-разработке!";
    $strarr = explode(' ', $str);
    foreach ($strarr as $num => $value)
        if ($num % 2 == 0) echo "<text style='color: blue'>" . $value . "</text> ";
        else echo "<text style='color: yellow'>" . $value . "</text> ";
}

function tellaboutyself()
{
    $str = "Я имею большое количество увлечений, но больше всего я предпочитаю баскетбол, им я занимаюсь более 10 лет, и спортивное программирование, которое привлекло меня не так давно.
                Обучаюсь на втором курсе по программе 'Прикладная информатика', работаю в фитнес-клубе администратором.";
    $num = strpos($str, '.');
    echo "<text style='color: red'>" . mb_substr($str, 0, $num + 1) . "</text>" . substr($str, $num + 1);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
     minimum-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<?
dbody($hour);
?>
<?
require('header.php');
?>
<div class="main">
    <div <?
    davatar($hour);
    ?>>
        <img
                src="images/avatar.jpg"
                width=100%
                alt="Упс... Что-то пошло не так"
                height=100%
        >
    </div>
    <div class="aboutme">
        <div class="name" <?
        darktheme($hour);
        ?>>
            <span style="margin-top: 100px;">Данил Гузняев</span>
        </div>
        <div class="info" <?
        darktheme($hour);
        ?>>
            <div class="hobby" <?
            darktheme($hour);
            ?>>
                <div>
                    <?
                    tellaboutyself();
                    ?>
                </div>
            </div>
            <div class="preference" <?
            darktheme($hour);
            ?>>
                <div>
                    <?
                    multicolortext();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container1" <?
darktheme($hour);
?>>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/buterfly.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        darktheme($hour);
        ?>>Данаида монарх - бабочка из семейства нимфалид. Их легко узнать по характерному рисунку на крыльях: чёрные полосы на рыжем фоне.</span>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/redsea.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        darktheme($hour);
        ?>>Красное море - внутреннее море Индийского океана, расположенное между Аравийским
            полуостровом и Африкой. Самое солёное море в мире.</span>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/everest.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        darktheme($hour);
        ?>>Джомолунгма - высочайшая вершина Земли. Находится в Гималаях в хребте Махалангур-Химал.
            Её абсолютная высота составляет 8848 метров.</span>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/greenland.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        darktheme($hour);
        ?>>Гренландия является самым большим островом на планете. Расположен он на северо-востоке
            Северной Америки. Его площадь составляет 2166086 километров квадратных.</span>
    </div>
</div>
<div class="container2" <?
darktheme($hour);
?>>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/rosomaha.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        darktheme($hour);
        ?>>Росомаха
        </div>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/kasp.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        darktheme($hour);
        ?>>Каспийское море
        </div>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/alps.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        darktheme($hour);
        ?>>Альпы
        </div>
    </div>
    <div <?
    darkthemeitems($hour);
    ?>>
        <img src="images/madagaskar.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        darktheme($hour);
        ?>>Мадагаскар
        </div>
    </div>
</div>
<footer <? darktheme($hour);
?>>
    <?
    require('counter.php');
    ?>
    <div>
        <form name="DataDif" method="post">
            <label>Выберите дату:</label>
            <input type="date" name="hb" value="<?php echo date('d.m.Y'); ?>"
                   max="2021-10-07">
            <input type="submit" value="OK">
        </form>
    </div>
    <div>
        Текущая дата: <?
        datecounter();
        ?>
</footer>
</body>
</html>