<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-11
 * Time: 21:39
 */

class usuario
{

    private $idtb_usuario;
    private $nomeUsuario;
    private $tipo;
    private $senha;
    private $email;

    public function __construct($idtb_usuario, $nomeUsuario, $tipo, $senha, $email)
    {
        $this->idtb_usuario = $idtb_usuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->tipo = $tipo;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getIdtbUsuario()
    {
        return $this->idtb_usuario;
    }

    public function setIdtbUsuario($idtb_usuario)
    {
        $this->idtb_usuario = $idtb_usuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}