<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 10/01/18
 * Time: 13:34
 */

error_reporting('E_ALL');

$yhendus = mysqli_connect('localhost','user','password','database');

if (!$yhendus) {
    echo 'Probleem andmebaasi ühendamisega<br/>';
    echo mysqli_connect_errno($yhendus).'<br/>';
    echo mysqli_connect_errno($yhendus).'<br/>';
} else {
    echo 'Ühendus on loodud<br/>';
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev)'.
    'VALUES(\'Test\',\'Kasutaja\', \'1999-03-08\')';
    $tulemus = mysql_query($yhendus, $sql);
    if (!$tulemus) {
        echo 'Probleem päringuga <br />';
        echo mysql_error($yhendus).'<br />';
        echo mysql_errno($yhendus).'<br />';
    } else{
        echo '<table border="1">';
        while($rida = mysqli_fetch_assoc($tulemus)){
            echo '<tr>';
            foreach ($rida as $element){
                echo '<td>'.$element.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
}