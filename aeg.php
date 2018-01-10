<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 14:53
 */
date_default_timezone_set('Europe/Helsinki');
echo time().'<br />';
echo mktime(14, 56, 00, 1,09, 2018).'<br />';
$tana = date("H:i");
echo $tana.'<br />';