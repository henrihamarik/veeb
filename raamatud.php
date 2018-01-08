<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 9:33
 */

$raamatud = array(
    array(
        'title' => 'Feel Free',
        'author' => 'Zadie Smith',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Things Bright and Beautiful',
        'author' => 'Anbara Salam',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Kukeseene kuulamise kunst',
        'author' => 'Valdur Mikita',
        'print' => 'Välgi metsad',
        'status' => 'sees'
    ),
    array(
        'title' => 'Valede kataloog. Inglise aed',
        'author' => 'Tõnu Õnnepalu',
        'print' => 'Eesti Keele Sihtasutus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Mees. Otse ja ausalt',
        'author' => 'Jesper Parve',
        'print' => 'Pilgrim',
        'status' => 'sees'
    )
);

function otsi($raamatud, $seisund) {
    $leitud = array();
    foreach ($raamatud as $raamat) {
        foreach ($raamat as $kirjeldus => $vaartus) {
            if($kirjeldus == 'staatus' and $vaartus == $seisund){
                $leitud[] = $raamat;
            }
        }
    }
    return $leitud;
}

echo '<pre>';
print_r(otsi($raamatud, 'valjas'));
echo '</pre>';
function pealkiri($raamat){
    $pealkiri = array_keys($raamat);
    echo '<tr>';
    foreach ($pealkiri as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
}
function valjasta($raamatud){
    $pealkiriValjas = 0;
    echo '<table border="1">';
    foreach($raamatud as $raamat){
        echo '<tr>';
        if($pealkiriValjas == 0){
            pealkiri($raamat);
            $pealkiriValjas = 1;
        }
        foreach ($raamat as $info) {
            echo '<td>' . $info . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjasta($raamatud);
echo '<hr />';
valjasta(otsi($raamatud, 'valjas'));
echo '<hr />';