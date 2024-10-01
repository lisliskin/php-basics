<?php
/*
    Многомерный массив - это массив,
    в качестве элементов содержащий другие массивы.
*/

$basket = [
    'hen' => ['chicken', 'turkey'],
    'meat' => ['beef', 'lamb', 'pork'],
    'fruits' => ['oranges', 'bananas'],
    'groceries' => ['pasta', 'rice', 'buckwheat'],
    'vegetables' => ['potato', 'broccoli', 'onion', 'carrot']
];
print_r($basket);

