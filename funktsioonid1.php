<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 18/12/17
 * Time: 13:08
 */

function otsiNumber($suvalineArv, $kindelArv) {
    echo $kindelArv. ' esineb numbris '.$suvalineArv;
    $mituKorda = 0;
    while ($suvalineArv != 0) {
        $arv = $suvalineArv % 10;
        if ($arv == $suvalineArv) {
            $mituKorda++;
        }
        $suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$mituKorda.' arv korda<br />';
}
otsiNumber(442158755745, 5);
otsiNumber(442158755745, 7);
otsiNumber(442158755745, 4);
otsiNumber(442158755745, 8);