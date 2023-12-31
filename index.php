<?php

//$arr = [10, 20, 30, 40, 50];
//
//foreach ($arr as $key => $value) {
//    if ($value > 30) {
//        echo $value . PHP_EOL;
//    }
//}

$var1 = 'primer';
$var2 = '';

$var2 =& $var1;

var_dump($var2);

/* 1. Ссылки - средство доступа к значению переменной под разными именами
    $a = 5;
    $b =& $a;
    $a = 3;
    echo $b // => 3
    & - амперсанд


    2. Есть 3 операции с ссылками:
   - присвоение по ссылке.
    $a =& $b ($a указывает на то же значение что и $b)

   - передача по ссылке.
    f foo(&$var) { $var++; }
    $a = 5;
    foo($a); // => 6 (передача параметров по ссылке)

   - возврат по ссылке.
    public $value = 42;
    public function &getValue() {
        return $this->value;
    }
    $obj = new foo;
    $myValue = &$obj->getValue(); // $myValue указывает на $obj->value, равное 42.
    $obj->value = 2;
    echo $myValue;   // отобразит новое значение $obj->value, то есть 2.


    3. Есть 10 типов данных:
    bool, int, float, string, array, object, callable, mixed, resource, null
    скалярные (простые) типы - bool, int, float, string

    4. инкремент, декремент - операторы, увеличивающие или уменьшающие число на единицу.
    префиксная операция сначала прибавляет, а затем присваивает значение
    постфиксная сначала присваивает, а затем происходит операция над значением

    5. Рекурсия - вызов функции внутри самой себя.
    например, получение факториала числа
    function factorial($n) {
     if ($n <= 1) return 1;
     return $n * factorial($n - 1); // повторный вызов
    }

    echo factorial(5); // 120

    6. = - присвоение переменной значение
       == - нестрогое сравнение двух переменных по значению с авто-приведением типов
       === - строгое сравнение переменных по значению и типу данных

    7. абстракция, инкапсуляция, наследование, полиморфизм

    8. В php динамическая типизация, то есть тип данных переменной выводится во время исполнения кода,
    а не заранее задается пользователем. однако мы можем сами создать строгую проверку на типы

    преимущества: быстрая компиляция и запуск кода, легкость в написании
    недостатки: непредвиденные ошибки типизации, отсутствие type hinting


    9. include - включает и выполняет файл. если файл не найден или в нем ошибка, то
    выйдет warning и скрипт продолжится.
       require - работает как include, однако при фатал ошибке скрипт остановится.


*/