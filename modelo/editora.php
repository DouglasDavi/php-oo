<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 14:53
 */

class editora
{
    private $idEditora;
    private $nomeEditora;

    // public function __construct($idEditora, $nomeEditora)
    // {
    //     $this->idEditora = $idEditora;
    //     $this->nomeEditora = $nomeEditora;
    // }

    public function __construct(){
        
    }
    public function getIdEditora()
    {
        return $this->idEditora;
    }

    public function setIdEditora($idEditora)
    {
        $this->idEditora = $idEditora;
    }

    public function getNomeEditora()
    {
        return $this->nomeEditora;
    }

    public function setNomeEditora($nomeEditora)
    {
        $this->nomeEditora = $nomeEditora;
    }

}