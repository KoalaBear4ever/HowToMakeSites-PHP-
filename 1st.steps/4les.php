<?php

var_dump(5/2);          // Выведет тип получившегося значения\выражения
echo '<br>';


$result = 2 < 4;
var_dump($result);                 // Так же может выводить тип переменной
echo '<br>';

# Приорететы
$result = 2 + 2 * 2;
var_dump($result);

$result = (2 + 2) * 2;
var_dump($result);

$y = ($x = 5) * 2;
var_dump($x);
var_dump($y);

# Сокращенные операторы
$x = 5;
$y = 7;

$y += $x;
$y *= $x;
# И т.д.

# Запись полезная при скрещивании строк
$x = 'Hello';
$x .= 'World!';
var_dump($x);

# Операторы сравнения
$x = 2;
$y = 3;

var_dump($x == $y);

# Операторы тождественного сравнения
$x = 2;
$y = '3';

var_dump($x === $y);                        // Сравниваем типы выведет false
var_dump($x !== $y);                        // выведет true

# Оператор SpaceShip
$x = 2;
$y = 2;

var_dump($x <=> $y);

# Постфикс сначала возвращает значение перменной, а потом выведет результат / подобное с инкрементами
$x = 4;
$y = $x++;

# Префиксный выводит результат
$x = 4;
$y = ++$x;


# ДЗ
echo 'ДЗ <br>';
var_dump(!1);
echo '<br>';
var_dump(!0);
echo '<br>';
var_dump(!true);
echo '<br>';
var_dump(2 && 3);
echo '<br>';
var_dump(5 && 0);
echo '<br>';
var_dump(3 || 0);
echo '<br>';
var_dump(5 / 1);
echo '<br>';
var_dump(1 / 5 );
echo '<br>';
var_dump(5 + '5string');
echo '<br>';
var_dump('5' == 5);
echo '<br>';
var_dump('05' == 5);
echo '<br>';
var_dump('05' == '5');

