<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 14:49
 */

class emprestimo
{

    private $usuario;
    private $exemplar;
    private $dataEmprestimo;
    private $observacao;

    public function __construct($usuario, $exemplar, $dataEmprestimo, $observacao)
    {   
        $this->usuario = $usuario;
        $this->exemplar = $exemplar;
        $this->dataEmprestimo = $dataEmprestimo;
        $this->observacao = $observacao;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getExemplar()
    {
        return $this->exemplar;
    }

    public function setExemplar($exemplar)
    {
        $this->exemplar = $exemplar;
    }

    public function getDataEmprestimo()
    {
        return $this->dataEmprestimo;
    }

    public function setDataEmprestimo($dataEmprestimo)
    {
        $this->dataEmprestimo = $dataEmprestimo;
    }

    public function getObservacao()
    {
        return $this->observacao;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }

}