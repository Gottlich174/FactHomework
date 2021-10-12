<?
$hour = date("H");
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
if (($hour < 8) or ($hour >= 20)) echo '<body style="color: white;">';
else
    echo '<body>'
?>
<?
require('header.php');
?>
<div class="main">
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'class="avatar_night"';
    else echo 'class="avatar"';
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
        if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
        ?>>
            <span style="margin-top: 100px;">Данил Гузняев</span>
        </div>
        <div class="info" <?
        if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
        ?>>
            <div class="hobby" <?
            if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
            ?>>
            <div>
<?
                $str="Я имею большое количество увлечений, но больше всего я предпочитаю баскетбол, им я занимаюсь более 10 лет, и спортивное программирование, которое привлекло меня не так давно.
                Обучаюсь на втором курсе по программе 'Прикладная информатика', работаю в фитнес-клубе администратором.";
                $num = strpos($str, '.');
                echo "<text style='color: red'>".mb_substr($str, 0, $num + 1)."</text>". substr($str, $num+1);
?>
            </div>
            </div>
            <div class="preference" <?
            if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
            ?>>
                <div>
                    <?
                   $str ="Весь материал преподаётся доступно для всех. И даже тот факт, что я уже имел опыт работы с HTML,
                    CSS, Git и др.,
                    не делает их менее интересным. С удовольствием выполняю домашние работы. Надеюсь мы все будем
                    продолжать в том же духе и достигнем определённых высот в Web-разработке!";
                   $strarr = explode(' ', $str);
                   foreach ($strarr as $num => $value)
                       if ($num % 2 == 0) echo "<text style='color: blue'>".$value."</text> ";
                       else echo "<text style='color: yellow'>".$value."</text> ";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container1" <?
if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
?>>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/buterfly.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Данаида монарх - бабочка из семейства нимфалид. Их легко узнать по характерному рисунку на крыльях: чёрные полосы на рыжем фоне.</span>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/redsea.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Красное море - внутреннее море Индийского океана, расположенное между Аравийским
            полуостровом и Африкой. Самое солёное море в мире.</span>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/everest.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Джомолунгма - высочайшая вершина Земли. Находится в Гималаях в хребте Махалангур-Химал.
            Её абсолютная высота составляет 8848 метров.</span>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/greenland.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Гренландия является самым большим островом на планете. Расположен он на северо-востоке
            Северной Америки. Его площадь составляет 2166086 километров квадратных.</span>
    </div>
</div>
<div class="container2" <?
if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
?>>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/rosomaha.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Росомаха
        </div>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/kasp.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Каспийское море
        </div>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/alps.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Альпы
        </div>
    </div>
    <div <?
    if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/madagaskar.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if (($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Мадагаскар
        </div>
    </div>
</div>
<footer <? if (($hour < 8) or ($hour >= 20)) echo "style='background-color: rgba(0,0,0,0.8);'";
?>>
    <?
    require ('counter.php');
    ?>
    <div>
        <form name="DataDif" method="post">
            <label>Выберите дату:</label>
                <input type="date" name="hb" value="<?php echo date('d.m.Y');?>"
                       max="2021-10-07">
                <input type="submit" value="OK">
        </form>
    </div>
    <div>
        Текущая дата: <?
        $hb = date('d.m.Y', strtotime($_POST['hb']));
        echo date("d.m.Y")."</div>";
        echo "<div>Дата рождения: ".$hb."</div>";
        echo "<div> Прошло дней: ".$dateDiff = date_diff(new DateTime(), new DateTime($hb))->days."</div>";
        ?>
</footer>
</body>
</html>