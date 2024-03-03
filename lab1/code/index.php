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

// task 9 array

$n = 5;
$arr = [];
for ($i = 1; $i <= $n; $i++) {
    $cur = '';
    for ($j = 0; $j < $i; $j++) {
        $cur .= 'x';
    }
    $arr[] = $cur;
}
print_r($arr);
echo "<br>";
function arrayFill($val, $count) {
    $res = [];
    for ($i = 0; $i < $count; $i++) {
        $res[] = $val;
    }
    return $res;
}

$fillarr = arrayFill('p', 7);
print_r($fillarr);
echo "<br>";

function sumArr($array) {
    $sum = 0;
    foreach ($array as $sub) {
        foreach ($sub as $value) {
            $sum += $value;
        }
    }
    return $sum;
}
$twoDimArr = [[1, 2, 3], [4, 5], [6]];
echo "Сумма элементов многомерного массива ", sumArr($twoDimArr), "<br>";

$count = 1;
$array = [];
for ($i = 0; $i < 3; $i++) {
    $subarray = array();
    for ($j = 0; $j < 3; $j++) {
        $subarray[] = $count;
        $count++;
    }
    $array[] = $subarray;
}
echo "Заполнение массива 3 на 3: ";
print_r($array);
echo "<br>";

$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo "умножение и сложение че то там кто то там: $result <br>";

$user = [
    'name' => 'абоба',
    'surname' => 'абоб',
    'patronymic' => 'абобович'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
echo "<br>";
$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo 'количество элементов в этом массиве ', count($arr), '<br>';

echo 'последний элемент- ', $arr[count($arr)-1], ', предпоследний - ', $arr[count($arr)-2],'<br>';

//task 10

function sumOr10($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum > 10;
}
$result = sumOr10(8,1);
if ($result) {
    echo "Сумма чисел больше 10.<br>";
} else {
    echo "Сумма чисел не больше 10.<br>";
}

function equal($num1, $num2) {
    return $num1 == $num2;
}
$result = equal(8,1);
if ($result) {
    echo "равны<br>";
} else {
    echo "не равны<br>";
}
$test = 0;
echo ($test == 0) ? 'верно<br>' : ''; //тернарный оператор


$age = rand(1, 110);
if ($age < 10 || $age > 99) {
    echo 'Число меньше 10 или больше 99.';
} else {
    $sum = array_sum(str_split($age)); //встроенные функции которые разделяют строку на элементы, другая считает сумму
    if ($sum <= 9) {
        echo 'Сумма цифр однозначна: ' . $sum, '<br>';
    } else {
        echo 'Сумма цифр двузначна: ' . $sum, '<br>';
    }
}

$arr = [1, 2, 3]; // Замените на нужный массив
if (count($arr) == 3) {
    $sum = array_sum($arr);
    echo "Сумма элементов: $sum", '<br>';
} else {
    echo "Массив не содержит 3 элемента", '<br>';
}

//task 11 циклы
$msg = '';
for ($i = 0; $i < 20; $i++){
    $msg .= 'x';
    echo $msg, '<br>';
}