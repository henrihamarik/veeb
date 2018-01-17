<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 17/01/18
 * Time: 8:49
 */

class tekst
{
    // klassi omadus(ed)
    // klassi muutuja(d)
    var $sone = '';
    // klassi tegevused
    // klassi meetodid
    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s = '')
    {
        $this->maaraTekst($s);
    }
    // teksti määramine
    function maaraTekst($s){
        $this->sone = $s;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
}