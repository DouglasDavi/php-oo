<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 20:51
 */

interface iDAO
{
    public function remover($source);
    public function salvar($source);
    public function atualizar($source);

}