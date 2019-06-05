<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 14:56
 */

class exemplar
{
    private $idExemplar;
    private $livro;
    private $tipoLivro;

    public function __construct($idExemplar, $livro, $tipoLivro)
    {
        $this->idExemplar = $idExemplar;
        $this->livro = $livro;
        $this->tipoLivro = $tipoLivro;
    }

    public function getIdExemplar()
    {
        return $this->idExemplar;
    }

    public function setIdExemplar($idExemplar): void
    {
        $this->idExemplar = $idExemplar;
    }

    public function getLivro()
    {
        return $this->livro;
    }

    public function setLivro($livro): void
    {
        $this->livro = $livro;
    }

    public function getTipoLivro()
    {
        return $this->tipoLivro;
    }

    public function setTipoLivro($tipoLivro): void
    {
        $this->tipoLivro = $tipoLivro;
    }


}