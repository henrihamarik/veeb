<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 17/01/18
 * Time: 8:53
 */
require_once 'tekst.php'; // lisame kasutuse klass,
// mida laiendame
class vtekst extends tekst
{
    var $varv = '';

    public function __construct($s='',$v='')
    {
        parent::maaraTekst($s);
        $this->maaraVarv($v);
    }

    function maaraVarv($v){
        $this->varv = $v;
    }
}