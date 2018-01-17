<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 17/01/18
 * Time: 8:49
 */

require_once 'tekst.php';
require_once 'vtekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst('Tere Maailm!');
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$minuTekst->prindiTekst();
echo '<hr />';
// loome reaalse objekti vtekst klassi abil
$punaneTekst = new vtekst('Punane tekst');
// teostame testvaade antud objektist
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$punaneTekst->prindiTekst();