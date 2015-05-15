<?php

require_once __DIR__ . "/Clientes.php";
require_once __DIR__ . "/PJInterface.php";

class PJ extends Clientes implements PJInterface 
{
    private $cnpj;

    public function setCnpj($cnpj) 
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj() 
    {
        return $this->cnpj;
    }
}