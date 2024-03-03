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

//task 3
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "<br>Kоличество дней уходящих на 1 яп: $daysPerLanguage <br>";

//task 4
echo "восемь во 2й степени: ";
echo 8**2;
echo "<br>";

//task 5
$myNum = 18;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "умножение деление и всякое такое: $answer <br>";

//task 6 математические функции
$a=10;
$b=3;
echo "a % b = ";
echo $a%$b;
echo "<br>";

if ($a % $b == 0) {
    echo "а делится на b: ";
    echo $a%$b;
} else {
    echo "а не делится на b остаток :";
    echo $a%$b;
}

// степень и корень
$st = pow(2,10);
echo "<br>2 в 10 степени : $st <br>";
echo "квадратный корень из 245: ";
echo sqrt(245);
echo "<br>";

$arr = [4, 2, 5, 19, 13, 0, 10];
$curValue = 0;
foreach ($arr as $it){
    $curValue += pow($it, 2);
}
echo "кoрень суммы квадратов массива: ";
echo sqrt($curValue);
echo "<br>";

// функции округления
echo "квадратный корень из 379: ";
echo round(sqrt(379), 0), " ",round(sqrt(379), 1), " ", round(sqrt(379), 2), "<br>";
$mas587 = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo "sqrt 587 floor: ", $mas587['floor'] , " ceil: ", $mas587['ceil'], "<br>";

// min max
$arrMinMax = [4, -2, 5, 19, -130, 0, 10];
echo "min: ", min($arrMinMax), " max: ", max($arrMinMax), "<br>";

//random
echo "random num: " , rand(1, 100);
$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[$i] = rand(1, 100);
}
echo "<br>Массив из 10 случайных чисел: ";
print_r($randomArray);

//abs
$a = 5;
$b = 8;
echo "<br>Модуль разности $a и $b: ",  abs($a - $b), "<br>";

$num = 30;
$divisors = [];
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0){
        $divisors[] = $i;
    }
}

echo "Делители $num: ";
print_r($divisors);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$Count = 0;
foreach ($array as $value) {
    $sum += $value;
    $Count++;
    if ($sum > 10) {
        break;
    }
}
echo "<br>Сумма первых $Count элементов массива превышает 10.<br>";

// task 7 functions
function printStringReturnNumber($inputString) {
    echo $inputString;
    return rand(1, 100);
}
$muNum = printStringReturnNumber("aboba");
echo "<br> результат функции $myNum <br>";

//task 8

function increaseEnthusiasm($inputString){
    $inputString .= "!";
    return $inputString;
}
echo "increaseEnthusiasm: ", increaseEnthusiasm("aaaaaa"), "<br>";

function repeatThreeTimes($str)
{
    $str .= $str.= $str;
    return $str;
}
echo "repeatThreeTimes: ", repeatThreeTimes("chipi"), "<br>";

function cut($str, $l = 10) {
    $substr = '';
    for ($i = 0; $i < $l; $i++) {
        $substr .= $str[$i];
    }
    return $substr;
}
echo "cut: ", cut('12345',3);

function printArrayRecursive($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index], " ";
        printArrayRecursive($array, $index + 1);
    }
}
echo "<br> рекурсивный вывод массива: ";
printArrayRecursive($array);

function sumDigits($number) {
    while ($number > 9) {
        $numberString = (string)$number;
        $sum = 0;
        for ($i = 0; $i < strlen($numberString); $i++) {
            $sum += (int)$numberString[$i];
        }
        $number = $sum;
    }
    return $number;
}

echo "<br> сумма цифр: ", sumDigits(1234567), "<br>";

