<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 12:59
 */
require_once  'fnk.php';

/*raamatuVorm();

$raamat = array(
    'title' => 'Feel Free',
    'author' => 'Zadie Smith',
    'print' => 'Penguin',
    'status' => 'valjas'
);*/
$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');