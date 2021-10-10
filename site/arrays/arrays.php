<?
function array_keys_recursive($myArray, $name)
{
    $count = 0;
    foreach ($myArray as $family)
        foreach ($family as $member)
            if ($member == $name)
                $count++;
    return $count;
}

$hour = date(H);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Массивы</title>
</head>
<body>
<div class="container2" <?
if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8); color: white;"';
?>>
    <div style="font-size: 150%; <?
    if (($hour < 8) or ($hour >= 20)) echo 'background-color: darkblue';
    ?>">
        <?
        /*5 задача, с прошлого занятия
        Посчитать количество членов семьи Ivanovs, Petrovs, Smith. Посчитать количество Ivan (1),Kate(2), Tom(1) и т.д.*/
        $arr = array(
            'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
            'Petrovs' => array('Bob', 'Ann', 'Tanya'),
            'Smith' => array('Kate', 'Same'),
        );
        echo "<h1>Пятая задача</h1> <br>";
        echo "В семье Ивановых " . count($arr['Ivanovs']) . " человека <br>";
        echo "В семье Петровых " . count($arr['Petrovs']) . " человека <br>";
        echo "В семье Смит " . count($arr['Smith']) . " человека <br>";
        echo "Ivan: " . array_keys_recursive($arr, 'Ivan') . "<br>";
        echo "Kate: " . array_keys_recursive($arr, 'Kate') . "<br>";
        echo "Tom: " . array_keys_recursive($arr, 'Tom') . "<br>";
        echo "Bob: " . array_keys_recursive($arr, 'Bob') . "<br>";
        echo "Ann: " . array_keys_recursive($arr, 'Ann') . "<br>";
        echo "Tanya: " . array_keys_recursive($arr, 'Tanya') . "<br>";
        echo "Same: " . array_keys_recursive($arr, 'Same') . "<br>";
        ?>
    </div>
    <div style="font-size: 150%; <?
    if (($hour < 8) or ($hour >= 20)) echo 'background-color: darkblue';
    ?>">
        <?
        echo "<h1>Первая задача из ДЗ</h1>";
        $n = 5;
        for ($i = 0; $i < $n; $i++)
            $ex1[$i] = rand();
        foreach ($ex1 as $value)
            if ($value % 2 == 0)
                echo "<b>$value</b><br>";
            else
                echo "$value<br>";
        ?>
    </div>
    <div style="font-size: 150%; <?
    if (($hour < 8) or ($hour >= 20)) echo 'background-color: darkblue';
    ?>">
        <?
        echo "<h1>Вторая задача из ДЗ</h1>";
        $ex2 = array(
            array('Apple', 'Violet', 'Circus'),
            array('Struggle', 'Author', 'Align'),
            array('Christ', 'Jesus'),
        );
        foreach ($ex2 as $arrays)
            foreach ($arrays as $value)
                if (substr($value,0,1) == 'A') echo "$value<br>";
        ?>
    </div>
    <div style="font-size: 150%; <?
    if (($hour < 8) or ($hour >= 20)) echo 'background-color: darkblue';
    ?>">
        <?
        echo "<h1>Третья задача из ДЗ</h1>";
        $ex3 = array(
            array(1, 2, 3, 4),
            array(5, 6),
            array(7, 8, 9),
        );
        for ($i = 1; $i <= count($ex3); $i++)
            echo "В $i измерении ". count($ex3[$i - 1]) . " элемента <br>";
        $a = count($ex3, 1) - count($ex3);
        echo "Всего: $a<br>";
        ?>
    </div>
</div>
</body>
</html>
