<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de clientes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<?php 
require_once'classes/InterfaceClienteImportancia.php';
require_once'classes/InterfaceEnderecoCobranca.php';
require_once'classes/Clientes.class.php';
require_once'classes/PJ.class.php';
require_once'classes/PF.class.php';

require_once'functions/functions.php';
$c1  = new PF();
$c2  = new PJ();
$c3  = new PJ();
$c4  = new PF();
$c5  = new PJ();
$c6  = new PF();
$c7  = new PF();
$c8  = new PJ();
$c9  = new PJ();
$c10 = new PF();

$cliente1 = $c1->setNome('Kaique')
			->setCpf('44455566615')	
			->setEndereco('Rua Joao Paulo')
			->setEnderecoCobranca('Rua Joao Gabriel')
			->setImportancia(4)
			->setTipo('Pessoa Física');
			;

$cliente2 = $c2->setNome('Jose')
			->setCnpj('42652039814')	
			->setEndereco('Rua Jose Freire')
			->setEnderecoCobranca('Rua Augusta')
			->setImportancia(3)
			->setTipo('Pessoa Jurídica');
			;

$cliente3 = $c3->setNome('Maria')
			->setCnpj('89456412658')	
			->setEndereco('Rua RIskallah Abib')
			->setEnderecoCobranca('Rua Brigadeiro Luis Antonio')
			->setImportancia(2)
			->setTipo('Pessoa Jurídica');
			;

$cliente4 = $c4->setNome('Kaique')
			->setCpf('89456587541')	
			->setEndereco('Rua Sergio Trevisan')
			->setEnderecoCobranca('Rua Anel das 12')
			->setImportancia(1)
			->setTipo('Pessoa Física');
			;

$cliente5 = $c5->setNome('Karla')
			->setCnpj('85412569841')	
			->setEndereco('Rua Marechal Osorio')
			->setEnderecoCobranca('Rua Luis de Freitas')
			->setImportancia(5)
			->setTipo('Pessoa Jurídica');
			;

$cliente6 = $c6->setNome('Jose')
			->setCpf('89541254126')	
			->setEndereco('Rua Marechal Rondon')
			->setImportancia(2)
			->setTipo('Pessoa Física');
			;

$cliente7 = $c7->setNome('Murilo')
			->setCpf('96358412587')	
			->setEndereco('Rua Soldado Ryan')
			->setEndereco('Rua Guararapes')
			->setImportancia(5)
			->setTipo('Pessoa Física');
			;
			

$cliente8 = $c8->setNome('Fernanda')
			->setCnpj('85412541278')	
			->setEndereco('Rua Game of Thrones')
			->setImportancia(3)
			->setTipo('Pessoa Jurídica');
			;

$cliente9 = $c9->setNome('Jessica')
			->setCnpj('96521258457')	
			->setEndereco('Rua Paulo II')
			->setImportancia(1)
			->setTipo('Pessoa Jurídica');
			;

$cliente10 = $c10->setNome('Joaquim')
			->setCpf('985321354145')	
			->setEndereco('Rua Filomena Cassilas')
			->setImportancia(3)
			->setTipo('Pessoa Física');
			;


				
$dados = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);

 ?>

<body>

<?php makeTable($dados) ?>

</body>
</html>