<?php

    $var = 123;
    $var = 'string';
    $var = 3.14;

    # Пример работы ковычек 2х - " и 1х - '
    $var = 123;

    echo "Значение переменой: $var";        // В " ищет переменную изи php
	echo '<br>';
	echo 'Значение переменой: $var';        // В ' не ищет
	echo '<br>';
    # Конкатенация строк
    $var = 123;
    echo 'Значение переменой:' . $var;

	$var = 123;
	$string = 'Значение переменой:' . $var;
	echo '<br>';

	# Автоматическое приведение типов
	$x = 1;
	echo $x + '2';
	echo '<br>';
	# В ручную переводим типы по формуле (тип)значение
	$string = '123';                        // Здесь строка
	$numeric = (int) $string;               // Переделали в целочисленный тип

	# Тип Boolean
	$x = true;
	$y = false;

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
