<?php

function run_test()
{
    $vector_1 = new Vector(4, 9, 11);
    echo 'Символьное представление первого вектора: ' . PHP_EOL;
    echo 'Ожидается: (4, 9, 11)' . PHP_EOL;
    echo 'Получено: ' . $vector_1 . PHP_EOL;

    $vector_2 = new Vector(-1, 9, -5);
    echo 'Символьное представление второго вектора: ' . PHP_EOL;
    echo 'Ожидается: (-1, 9, -5)' . PHP_EOL;
    echo 'Получено: ' . $vector_2 . PHP_EOL;

    $vector_3 = $vector_1->addVectors($vector_2);
    echo 'Сложение векторов: ' . PHP_EOL;
    echo 'Ожидается: (3, 18, 6)' . PHP_EOL;
    echo 'Получено: ' . $vector_3 . PHP_EOL;

    $vector_4 = $vector_1->subVectors($vector_2);
    echo 'Вычитание векторов: ' . PHP_EOL;
    echo 'Ожидается: (5, 0, 16)' . PHP_EOL;
    echo 'Получено: ' . $vector_4 . PHP_EOL;

    $number = 11;
    $vector_5 = $vector_1->product($number);
    echo 'Умножение вектора 1 на число 12: ' . PHP_EOL;
    echo 'Ожидается: (48, 108, 132)' . PHP_EOL;
    echo 'Получено: ' . $vector_5 . PHP_EOL;

    $number_scalar = $vector_1->scalarProduct($vector_2);
    echo 'Скалярное произведение векторов: ' . PHP_EOL;
    echo 'Ожидается: 22' . PHP_EOL;
    echo 'Получено: ' . $number_scalar . PHP_EOL;

    $vector_6 = $vector_1->vectorProduct($vector_2);
    echo 'Векторное произведение векторов: ';
    echo 'Ожидается: (-144, 9, 45)' . PHP_EOL;
    echo 'Получено: ' . $vector_6 . PHP_EOL;
}
