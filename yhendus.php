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
}