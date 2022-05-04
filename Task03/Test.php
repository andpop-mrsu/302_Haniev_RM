<?php

function run_test()
{
    $book1 = new Book("День опричника", array("Владимир Сорокин"), "АСТ: Corpus", 2017);
    $bookslist = new BooksList();
    $bookslist->add($book1);
    $bookslist->store('Books.txt');
    $book2 = new Book("Волны гасят ветер", array("Аркадий Стругацкий", "Борис Стругацкий"), "АСТ", 2019);
    $book3 = new Book("Улисс", array("Джеймс Джойс"), "Республика", 1993);
    $bookslist->add($book2);
    $bookslist->add($book3);
    echo "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: День опричника" . PHP_EOL .
        "Автор 1: Владимир Сорокин" . PHP_EOL .
        "Издательство: АСТ: Corpus" . PHP_EOL .
        "Год: 2017" . PHP_EOL .
        "Id: 2" . PHP_EOL .
        "Название: Волны гасят ветер" . PHP_EOL .
        "Автор 1: Аркадий Стругацкий" . PHP_EOL .
        "Автор 2: Борис Стругацкий" . PHP_EOL .
        "Издательство: АСТ" . PHP_EOL .
        "Год: 2019" . PHP_EOL .
        "Id: 3" . PHP_EOL .
        "Название: Улисс" . PHP_EOL .
        "Автор 1: Джеймс Джойс" . PHP_EOL .
        "Издательство: Республика" . PHP_EOL .
        "Год: 1993" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
    $bookslist->load('Books.txt');
    echo PHP_EOL . "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: День опричника" . PHP_EOL .
        "Автор 1: Владимир Сорокин" . PHP_EOL .
        "Издательство: АСТ: Corpus" . PHP_EOL .
        "Год: 2017" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
}
