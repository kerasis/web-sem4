<?php
/* 1 task */
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = &$very_bad_unclear_name; // объявление по ссылке
$order .= ' and cola<3'; // оператор контакенации строк .

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";