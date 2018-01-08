<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 11:51
 */

$katseteArv = $_POST['katseteArv'];
$serveriArv = $_POST['serveriArv'];
$katseteArv = (isset($katseteArv)) ? ++$katseteArv : 0;
$serveriArv = (isset($serveriArv)) ? $serveriArv : rand(1,50);
echo '<span style="font-size:17px"><strong>Arva üks arv vahemikus 1 - 50 </strong><br />';
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <input type="text" name="kasutajaArv">
        <input type="submit" value="Kontrolli!">
        <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
        <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    </form>
';
//$serveriArv = 35;
$kasutajaArv = $_POST['kasutajaArv'];
if(strlen($kasutajaArv) > 0){
    if($kasutajaArv > $serveriArv){
        echo 'Paku väiksem arv<br />';
    }
    if($kasutajaArv < $serveriArv){
        echo 'Paku suurem arv<br />';
    }
    if(abs($kasutajaArv - $serveriArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo '<span style="color:green">Õige! Väljamõeldud arv oli '.$serveriArv.'<br />';
            echo '<span style="color:blue">Arvasid ära '.$katseteArv.' korraga<br />';
            exit;
        }
        echo '<span style="color:orange">Aga oled juba väga lähedal õigele vastusele!<br />';
    }
    $katseteArv++;
}