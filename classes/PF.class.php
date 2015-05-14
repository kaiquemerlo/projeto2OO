<?php 

class PF extends CLientes implements InterfaceClienteImportancia, InterfaceEnderecoCobranca{

	private $cpf;
	private $importancia;
	private $enderecoCobranca;

	public function setCpf($cpf){
		$this->cpf = $cpf;
		return $this;
	}

	public function getCpf(){
		return $this->cpf;
		echo $this->cpf;
	}

	public function setImportancia($importancia){
		$this->importancia = $importancia;
		return $this;
	}


	public function getImportancia(){
		return $this->importancia;
	}

	public function setEnderecoCobranca($enderecoCobranca){
		$this->enderecoCobranca = $enderecoCobranca;
		return $this;
	}

	public function getEnderecoCobranca(){
		return $this->enderecoCobranca;
	}

}



 ?>