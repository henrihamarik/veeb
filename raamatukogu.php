<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 12:59
 */
require_once  'fnk.php';

raamatuVorm();

$raamat = array(
    'title' => 'Feel Free',
    'author' => 'Zadie Smith',
    'print' => 'Penguin',
    'status' => 'valjas'
);
salvestaRaamat(array(1, 2, 3), 'raamatud.txt');
