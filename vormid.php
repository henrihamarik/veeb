<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 08/01/18
 * Time: 10:41
 */
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Kasutaja: <input type="text" name="kasutaja"><br />
        Parool: <input type="password" name="parool"><br />
        <input type="submit" value="saada">
    </form>
';

echo $_SERVER['PHP_SELF'];

echo'<hr />';
if (count($_POST)>0) {
    foreach ($_POST as $element){
        if (strlen($element)==0){
            echo 'Tuleb täita väljad<br />';
            exit;
        }
    }
    echo '<pre>';
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    echo '</pre>';

    echo '<hr />';

    echo $_POST['kasutaja'] . '<br />';
    echo $_POST['parool'] . '<br />';
}