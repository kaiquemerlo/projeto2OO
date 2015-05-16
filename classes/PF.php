<?php

require_once __DIR__ . "/Clientes.php";
require_once __DIR__ . "/PFInterface.php";

class PF extends Clientes implements PFInterface 
{
    private $cpf;

    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf() {
        return $this->cpf;
    }

}
