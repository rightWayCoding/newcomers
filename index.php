<?php

// stdout
//echo 'Hello World!';
//var_dump($argv);
//print_r($argv);
//fwrite(STDOUT, 'hello!');

// vars

$testVariable_123 = 'test';

// types
$string = 'фыва';
$int = 123;
$float = 123.04;
$array = [
    $string, 78 => $int, 'qwe' => $float, [
        1, 2, 3
    ],
];
$x = true;
$x = null;
$res = fopen('./index.php', 'r');
//echo gettype($res);

// работа с типами

//str_split($string);
//mb_str_split($string);
//echo mb_strlen($string);
//echo str_replace($string);
//strpos('abc', 'a') === 0
//str_contains('aaa', 'a');
//str_starts_with('aaa', 'a');
//str_ends_with('aaa', 'a');

// sort*, explode / implode, array_merge +, ===> > 150
//$a = [1,2,3];
//$b = [3,4,6];
//$c = array_diff($a, $b);
//var_dump($c);
//$a = $b = $c = 'test';

$x = [1,2,3,4];
// 1
$a = $x[0];
$b = $x[1];
// 2
[$a, $b] = $x;

// положить в $x по ссылке из $b
#  положить в $x по ссылке из $b

/**
 * phpDoc
 */
$x = &$b;

$a = 'Hello world $x 2 + 2';
$b = "Hello world $x 2 + 2";
$a = `ls`;
