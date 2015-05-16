<?php 

require_once __DIR__ . "/InterfaceClienteImportancia.php";
require_once __DIR__ . "/InterfaceEnderecoCobranca.php";

abstract class Clientes implements InterfaceClienteImportancia, InterfaceEnderecoCobranca
{
	private $nome;
	private $endereco;
	private $enderecoCobranca;
	private $tipo;
	private $importancia;

	public function setNome($nome)
        {
            $this->nome = $nome;
            return $this;
	}

	public function getNome()
        {
            return $this->nome;
	}


	public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
	}

	public function getEndereco()
        {
            return $this->endereco;
	}

	public function setTipo($tipo)
        {
            $this->tipo = $tipo;
            return $this;
	}

	public function getTipo()
        {
            return $this->tipo;
	}


	public function setImportancia($importancia)
        {
            $this->importancia = $importancia;
            return $this;
	}

	public function setEnderecoCobranca($enderecoCobranca)
        {
            $this->enderecoCobranca = $enderecoCobranca;
            return $this;
	}
        
        public function getEnderecoCobranca() 
        {
            return $this->enderecoCobranca;
        }

        public function getImportancia() 
        {
            return $this->importancia;
        }

}