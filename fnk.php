<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 12:59
 */
function raamatuVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Pealkiri: <input type="text" name="title"><br />
            Autor: <input type="text" name="author"><br />
            Trükikoda: <input type="text" name="print"><br />
            Seisund: <input type="text" name="status"><br />
            <input type="submit" value="Salvesta!"> 
        </form>
    ';
}

function salvestaRaamat($raamat, $failinimi){
    if (file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)
){
        $fail = fopen($failinimi, 'a') or die ('Probleem faili avamisega');
        foreach ($raamat as $element){
            fwrite($fail, $element."\n");
        }
        fwrite($fail, "-----\n");
        fclose($fail);
        echo 'Andmed on sisestatud<br />';
    } else {
        echo 'Preobleem failiga '.$failinimi.'<br />';
    }
}

function loeAndmed($failinimi){
    if(file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)){
        $fail = fopen($failinimi, 'r');
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Pealkiri</th>';
        echo '<th>Autor</th>';
        echo '<th>Trükikoda</th>';
        echo '<th>Seisund</th>';
        echo '</tr>';
        echo '<tr>';
        while(! feof($fail)){
            $rida = fgets($fail);
            if($rida != "----\n") {
                echo '<td>' . $rida . '</td>';
            } else {
                echo '</tr>';
            }
        }
        echo '</table>';
        fclose($fail);
    }
}