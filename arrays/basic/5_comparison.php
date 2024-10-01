<?php
/*
    Массивы в PHP можно сравнивать друг с другом с помощью операторов (не)равенства и (не)эквивалентности.

    Два массива считаются равными, если:
        — количество элементов совпадает,
        — значения ключей и элементов совпадают.

    Два массива считаются эквивалентными, если:
        — количество элементов совпадает,
        — значения и типы элементов совпадают.

    ВАЖНО: Массивы считаются эквивалентными, даже если ключи имеют разные типы!
*/

/**
 * Проверяет, равны ли два массива.
 *
 * @param array $array1 Первый массив.
 * @param array $array2 Второй массив.
 * @return bool Возвращает true, если массивы равны, иначе false.
 */
function equal(array $array1, array $array2): bool
{
    return $array1 == $array2;
}

/**
 * Проверяет, эквивалентны ли два массива.
 *
 * @param array $array1 Первый массив.
 * @param array $array2 Второй массив.
 * @return bool Возвращает true, если массивы эквивалентны, иначе false.
 */
function equivalent(array $array1, array $array2): bool
{
    return $array1 === $array2;
}

/**
 * Сравнивает два массива и выводит результаты сравнения.
 *
 * @param array $array1 Первый массив.
 * @param array $array2 Второй массив.
 */
function compareArrays(array $array1, array $array2): void
{
    if (equal($array1, $array2)) {
        echo 'Массивы равны!' . PHP_EOL;
    } else {
        echo 'Массивы не равны!' . PHP_EOL;
    }

    if (equivalent($array1, $array2)) {
        echo 'Массивы эквивалентны!' . PHP_EOL;
    } else {
        echo 'Массивы не эквивалентны!' . PHP_EOL;
    }
}

$array1 = [
    '1' => 11,
    2 => 22
];

$array2 = [
    1 => 11,
    '2' => 22
];

compareArrays($array1, $array2);