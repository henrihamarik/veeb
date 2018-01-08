<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 8:50
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10
);
echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr />';

foreach ($opilane as $voti => $vaartus) {
    echo $voti.' - '.$vaartus.'<br />';
}