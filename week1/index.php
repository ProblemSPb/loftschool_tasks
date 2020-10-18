<?php

require('src/functions.php');

$array = ['one', 'two', 'three'];

task1($array);
drawEmptyLines();

task1($array, false);
drawEmptyLines();

echo task1($array, true);
drawEmptyLines();

echo task2("-", 1, 4.3, 6, 2);
drawEmptyLines();

echo task2("k", 4);
drawEmptyLines();

task3(3, 4);
drawEmptyLines();

task4();
drawEmptyLines();

task5();
drawEmptyLines();

createFile();

task6();