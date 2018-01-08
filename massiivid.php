<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 20/12/17
 * Time: 12:06
 */
$arvud = array(1, 5, 2, 4, 3);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '</pre>';

echo '<hr />';
for ($i = 0; $i < count($arvud); $i++) {
    echo '<b>'.$arvud[$i].'</b><br />';
}
echo '<hr />';
foreach ($arvud as $arv) {
    echo '<i>'.$arv.'</i><br />';
}


$arvud[] = 6;
echo '<hr />';
foreach ($arvud as $arv) {
    echo '<i>'.$arv.'</i><br />';

}$arvud[0] = 7;
echo '<hr />';
foreach ($arvud as $arv) {
    echo '<i>'.$arv.'</i><br />';
}

/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */

/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/

/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/

/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
echo '<hr />';
echo "<h2>Ülesanne 1</h2><br />";
function looMassiiv($elementideArv) {
    $arvud = array();
}

echo '<hr />';
echo "<h2>Ülesanne 2</h2><br />";

echo '<hr />';
echo "<h2>Ülesanne 3</h2><br />";
function vahetaMinMax(&$massiiv) {
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'min = '.$min.'<br />';
    echo 'max = '.$max.'<br />';
    for ($i = 0; $i < count($massiiv); $i++) {
        if ($massiiv[$i] == $min) {
            $massiiv[$i] = $max;
        }
        else if ($massiiv[$i] == $max) {
            $massiiv[$i] = $min;
        }
    }
}
vahetaMinMax($arvud);
valjastaMassiiv($arvud);

echo '<hr />';
echo "<h2>Ülesanne 4</h2><br />";

echo '<hr />';
echo "<h2>Ülesanne 5</h2><br />";
function mitteDubleeri($massiiv) {
    $valjasta = '';
    foreach ($massiiv as $element) {
        if ($valjasta != $element) {
            $valjasta = $element;
            echo $element.'&nbsp';
        }
    }
}
mitteDubleeri(array(1, 1, 1, 2, 2, 2, 2, 3));
echo '<hr />';