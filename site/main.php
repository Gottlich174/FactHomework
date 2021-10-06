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
if(($hour < 8) or ($hour >= 20)) echo '<body style="color: white;">';
else
    echo '<body>'
?>
<header <?
if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
?>>
    <span><b>Моя страница</b></span>
    <span><a href="../table/table.html" target="_blank" <?
        if(($hour < 8) or ($hour >= 20)) echo 'class="a_night"';
        ?>>Моя таблица Менделеева</a> </span>
</header>
<div class="main">
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'class="avatar_night"';
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
        if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
        ?>>
            <span style="margin-top: 100px;">Данил Гузняев</span>
        </div>
        <div class="info" <?
        if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
        ?>>
            <div class="hobby" <?
            if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
            ?>>
            <span>Я имею большое количество увлечений, но больше всего я предпочитаю баскетбол, им я занимаюсь более 10 лет, и спортивное программирование, которое привлекло меня не так давно.
            Обучаюсь на втором курсе по программе "Прикладная информатика", работаю в фитнес-клубе администратором.
            </span>
            </div>
            <div class="preference" <?
            if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
            ?>>
            <span>Весь материал преподаётся доступно для всех. И даже тот факт, что я уже имел опыт работы с HTML, CSS, Git и др.,
             не делает их менее интересным. С удовольствием выполняю домашние работы. Надеюсь мы все будем продолжать в том же духе и достигнем определённых высот в Web-разработке!</span>
            </div>
        </div>
    </div>
</div>
<div class="container1" <?
if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
?>>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/buterfly.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Данаида монарх - бабочка из семейства нимфалид. Их легко узнать по характерному рисунку на крыльях: чёрные полосы на рыжем фоне.</span>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/redsea.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Красное море - внутреннее море Индийского океана, расположенное между Аравийским
            полуостровом и Африкой. Самое солёное море в мире.</span>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/everest.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Джомолунгма - высочайшая вершина Земли. Находится в Гималаях в хребте Махалангур-Химал.
            Её абсолютная высота составляет 8848 метров.</span>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/greenland.jpg" alt="Упс... Что-то пошло не так">
        <span <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Гренландия является самым большим островом на планете. Расположен он на северо-востоке
            Северной Америки. Его площадь составляет 2166086 километров квадратных.</span>
    </div>
</div>
<div class="container2" <?
if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
?>>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/rosomaha.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Росомаха</div>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/kasp.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Каспийское море</div>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/alps.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Альпы</div>
    </div>
    <div <?
    if(($hour < 8) or ($hour >= 20)) echo 'style="background-color: darkblue"';
    ?>>
        <img src="images/madagaskar.jpg" alt="Упс... Что-то пошло не так">
        <div <?
        if(($hour < 8) or ($hour >= 20)) echo '<body style="background-color: rgba(0,0,0,0.8);"';
        ?>>Мадагаскар</div>
    </div>
</div>
<footer></footer>
</body>
</html>