<?
$hour = date(H);
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
if (($hour < 8) or ($hour >= 20)) echo 'style="background-color: rgba(0,0,0,0.8);"';
?>>
    <span><b>Моя страница</b></span>
    <span><a href="table/table.html" target="_blank" <?
        if (($hour < 8) or ($hour >= 20)) echo 'class="a_night"';
        ?>>Моя таблица Менделеева</a> </span>
    <span><a href="arrays/arrays.php" target="_blank" <?
        if (($hour < 8) or ($hour >= 20)) echo 'class="a_night"';
        ?>>Массивы</a> </span>
</header>
</body>
</html>
