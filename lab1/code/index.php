<?php
/*
 *  буду использовать теги <br> тк \n не отображается в браузере :(((((((
 */
/* 1 task */
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = &$very_bad_unclear_name; // объявление по ссылке
$order .= ' and cola<3'; // оператор контакенации строк .

// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.";
echo "<br>";

// task 2
$varOneInt = 12345;
echo "<br>VarOneInt: $varOneInt";

$varTwoFloat = 123.45;
echo "<br>VarTwoFloat: $varTwoFloat";

echo "<br>Num 12: ";
echo 11 + 2 - 1;

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "<br> Разница в расходах: ";
echo $lastMonth - $thisMonth;



