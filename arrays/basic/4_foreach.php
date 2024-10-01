<?php
/*
    Обход массива в цикле можно организовать с помощью foreach.
    Конструкция foreach специально создана для ассоциативных массивов.
*/

$array = [
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => 'd',
    5 => 'e'
];

foreach ($array as $key => $value) {
    echo "key: $key => value: $value\n";
}

// Поле $key можно игнорировать
echo 'Values: ';
foreach ($array as $value) {
    echo "$value ";
}
