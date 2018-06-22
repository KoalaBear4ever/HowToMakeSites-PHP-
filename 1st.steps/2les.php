<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Переменные</title>
</head>
<body>
    <?php

        $x = 2+3;
        $y = ($x * 2) / ($x + 1);
        echo $y;

        # Переменные лучше прописывать в стиле CamelCase. Пара примеров:
        $itsGoodName  = '';
        $AndThisOneToo = '';
        $butnotthis = '';
        $aNDnOTtHIS = '';

        # Каждая переменная должна что-то значить. Примеры:
        $descriptionOfDescription = 'Описание';        //Переменная говорит о том что она дает описание описанию
        $catName = 'Пушистик';                         //Переменная точно дает понять что это имя кота
        $a = 'Барса выиграла в футболл';               // Переменная понятнрая нам, но не другим

        #ДЗ Через переменную
        echo '<br>';
        $a = 3;
        $b = 5;
        $c = $a;
        $a = $b;
        $b = $c;
        echo $a ,"<br>", $b;

        # ДЗ без перменной
        echo '<br>';
        $a = 3;
        $b = 5;
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
        echo $a ,"<br>", $b;
    ?>
</body>
</html>