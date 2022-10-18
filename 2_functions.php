<?php

// функция как инструмент стуктуризации кода +
// аргументы и параметры +
// возврат +
// колбэк + рекурсия +
// передача по значению и по ссылке +
// анонимные и стрелочные функции +
// замыкания +

// императивный стиль
//$a = 2;
//$b = 3;
//$c = $a + $b;

//function add(int $a, int $b): int
//{
//    return $a + $b;
//}
//function sub(int $a, int $b): int
//{
//    return $a - $b;
//}
//function multiple(int $a, int $b): int
//{
//    return $a * $b;
//}
//
//// декларативный стиль
//function operation(int $a, int $b, callable $x): int
//{
//    return $x($a, $b);
//}

//var_dump(
//    operation(2, 4, add(...))
//);
//var_dump(
//    operation(2, 4, sub(...))
//);
//var_dump(
//    operation(2, 4, multiple(...))
//);

// 0 1 2 3 4 5 6  7
// 1 1 2 3 5 8 13 21
//function fib(int $i): int
//{
//    if ($i < 0) {
//        return 0;
//    }
//    if ($i === 0 || $i === 1) {
//        return 1;
//    }
//    return fib($i-1) + fib($i-2);
//}


//function add(int $a, int $b): int
//{
//    $b = $a + $b;
//    return $b;
//}
//
//$a = 2;
//$b = 3;
//
//echo memory_get_usage() . "\n";
//foreach (range(1,1000000) as $item) {
//    add($a, $b);
//}
//echo memory_get_usage() . "\n";

//
//$arr = [1,2,3];
//foreach ($arr as &$item) {
//    $item = $item * $item;
//}
//
//$arr = [1,2,3];
//foreach ($arr as $i => $item) {
//    $arr[$i] = $item * $item;
//}
//
//// передача по ссылке для объекта
//class Test
//{
//    public int $a = 5;
//    public int $b = 6;
//}
//
//function modify(Test $x) {
//    $x = null;
//}
//
//$y = new Test();
//var_dump($y);
//
//modify($y);
//var_dump($y);

//$a = function(int $a, int $b): int {
//    return $a + $b;
//};

//$input = [1,2,3];
//$output = array_map(fn($a) => $a * $a, $input);

//function tmp(): callable
//{
//    $c = 0;
//    return function(int $a, int $b) use (&$c): int {
//        $tmp = $a + $b;
//        $c += $tmp;
//        var_dump($c);
//        return $tmp;
//    };
//}
//
//$z = tmp();
//var_dump($z(2, 4));
//var_dump($z(2, 4));
//var_dump($z(2, 4));
//var_dump($z(2, 4));
//var_dump($z(2, 4));
