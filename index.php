<?php

/*Задача: Определить, является ли число  2n+m  симметричным,
т. е. запись  числа содержит четное количество цифр и совпадают 
его левая и правая  половинки.  */

//Является ли число симметричным
function isSymmetricNum(int $number): bool
{
    $rightNumb = $number %10;
    $number = $number/10;
    $pow = 1;
    while ((int)($number/10**$pow) > 0) {  //Проверка на середину числа
        $rightNumb += $number%10*10**$pow;
        $number = (int)($number/10);
        ++$pow;
    }
   return $number == $rightNumb ? true : false;
}

$N = 1212; //Натуральное число

if(isSymmetricNum($N)){
    echo "Число $N является симметричным";
};

