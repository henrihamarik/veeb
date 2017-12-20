<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 18/12/17
 * Time: 12:47
 */
function arvuSumma($number) {
    $summa = 0;
    while($number != 0) {
        $arv = $number % 10;
        echo 'arv = '.$arv.'<br />';
        $number = $number / 10;
        echo 'number = '.$number.'<br />';
        settype($number, 'integer');
        echo 'number = '.$number.'<br />';
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++) {
    $number = rand(0, 1000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br />';
}
