<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 2019-03-16
 * Time: 21:00
 */

require_once "iDAO.php";

interface iPage extends iDAO
{
    public function tabelapaginada();
}