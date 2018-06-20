<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Переменные</title>
</head>
<body>
    <?php
    $fact = 'Что-то';       // Присваиваем значение
    echo $fact;
    $just = &$fact;         // Ссылка на значение
    echo $just ;
    ?>
</body>
</html>