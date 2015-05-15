<?php 

class PJ extends Clientes implements PJInterface{

	private $cnpj;
	private $importancia;
	private $enderecoCobranca;

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
		return $this;
	}

	public function getCnpj(){
		return $this->cnpj;
		echo $this->cnpj;
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