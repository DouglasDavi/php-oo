<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-11
 * Time: 21:45
 */

class autor
{

    private $idtb_autores;
    private $nomeAutor;

    public function __construct($idtb_autores, $nomeAutor)
    {
        $this->idtb_autores = $idtb_autores;
        $this->nomeAutor = $nomeAutor;
    }

    public function getIdtbAutores()
    {
        return $this->idtb_autores;
    }

    public function setIdtbAutores($idtb_autores)
    {
        $this->idtb_autores = $idtb_autores;
    }

    public function getNomeAutor()
    {
        return $this->nomeAutor;
    }

    public function setNomeAutor($nomeAutor)
    {
        $this->nomeAutor = $nomeAutor;
    }


}