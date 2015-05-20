<?php

namespace MERLODEV\Clientes;

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
