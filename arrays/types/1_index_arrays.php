<?php
/*
    Индексный массив в PHP - это массив,
    в котором индексы элементов являются числами.
*/

$simpleArray = [
    1 => 'one',
    2 => 'two',
    3 => 'three'
];

echo "index: 1, value: {$simpleArray[1]}" . PHP_EOL;
echo "index: 2, value: {$simpleArray[2]}" . PHP_EOL;
echo "index: 3, value: {$simpleArray[3]}";