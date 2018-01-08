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

echo '<hr />';

$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10
    ),
    array(
        'eesnimi' => 'Kadi',
        'perenimi' => 'Vaher',
        'vanus' => 15,
        'klass' => 9
    ),
    array(
        'eesnimi' => 'Risto',
        'perenimi' => 'Tamm',
        'vanus' => 16,
        'klass' => 10
    )
);

echo '<pre>';
print_r($opilased);
echo '</pre>';

echo '<hr />';

foreach ($opilased as $opilane) {
    foreach ($opilane as $voti => $vaartus) {
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '---------------'.'<br />';
}

echo '<hr />';

foreach ($opilased as $opilane) {
    asort($opilane);
    foreach ($opilane as $voti => $vaartus) {
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '--------------'.'<br />';
}

echo '<hr />';