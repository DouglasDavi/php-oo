<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 14:54
 */

class categoria
{
    private $idCategoria;
    private $nomeCategoria;

    // public function __construct($idCategoria, $nomeCategoria)
    // {
    //     $this->idCategoria = $idCategoria;
    //     $this->nomeCategoria = $nomeCategoria;
    // }
    public function __construct(){

    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }

    public function setNomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;
    }

}