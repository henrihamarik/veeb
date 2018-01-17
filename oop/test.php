<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 17/01/18
 * Time: 8:49
 */

require_once 'tekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst();
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$minuTekst->prindiTekst();