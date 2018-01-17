<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 17/01/18
 * Time: 9:37
 */
require_once  'tabel.php';
class htmlTabel extends tabel
{
    var $taustavarv = '';

    public function __construct(array $pealkirjad, $taustaVarv)
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }

    /**
     * @param string $taustavarv
     */
    public function setTaustaVarv($taustaVarv)
    {
        $this->taustaVarv = $taustaVarv;
    }
    function prindiTabel()
    {
        echo '<table border="1">';
        echo '<tr>';
        foreach ($this->pealkirjad as $pealkiri) {
            echo '<th bgcolor="red">'.$pealkiri.'</th>'
        }
    }
}