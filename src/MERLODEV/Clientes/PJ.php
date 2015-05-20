<?php

namespace MERLODEV\Clientes;

class PJ extends Clientes implements \MERLODEV\Clientes\PJInterface
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