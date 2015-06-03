<?php

/*AUTOLOAD CARREGANDO AS CLASSES*/
require_once 'autoload.php';

/*DEFINIÇÃO DE NAMESPACE PARA TRABALHAR COM AS CLASSES*/
use \MERLODEV\Utils\Helper;
use \MERLODEV\Clientes\Clientes;
use \MERLODEV\Clientes\Persist;

/*CHAMANDO AS CONFIG DO DB*/
require_once'src/MERLODEV/functions/config.php';

$banco = new Helper($config['host'], $config['dbname'], $config['user'], $config['password']);
$con = $banco->getConexao();

$persist = new Persist($con);


//DELETANDO DADOS
echo "DELETANDO PESSOAS FISICAS!<br>";
$con->query("DROP TABLE IF EXISTS `pessoafisica`");
echo "/\OK/\\<br>";

//DELETANDO DADOS
echo "DELETANDO PESSOAS JURIDICAS!<br>";
$con->query("DROP TABLE IF EXISTS pessoajuridica");
echo "/\OK/\\<br>";

/*CRIA TABELA PESSOA FISICA CASO ELA N EXISTA*/
echo "CRIANDO TABELA PESSOA FISICA!<br>";
$tablePessoaFisica = $con->prepare("CREATE TABLE IF NOT EXISTS `pessoafisica`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    endereco VARCHAR(255),
    enderecoCobranca VARCHAR(255),
    tipo VARCHAR(255),
    importancia VARCHAR(255),
    cpf VARCHAR(255)
);");
if($tablePessoaFisica->execute()){
    echo "/\OK/\\<br>";
}else{
    echo "--- Ocorreu um erro ao criar a tabela pessoafisica ---";
}



/*CRIA TABELA PESSOA JURIDICA CASO ELA N EXISTA*/
echo "CRIANDO TABELA PESSOA JURIDICA!<br>";
$tablePessoaJuridica = $con->prepare("CREATE TABLE IF NOT EXISTS `pessoajuridica`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    endereco VARCHAR(255),
    enderecoCobranca VARCHAR(255),
    tipo VARCHAR(255),
    importancia VARCHAR(255),
    cnpj VARCHAR(255)
);");
if($tablePessoaJuridica->execute()){
    echo "/\OK/\\<br>";
}else{
    echo "--- Ocorreu um erro ao criar a tabela pessoajuridica ---";
}


$c1 = new MERLODEV\Clientes\PF();
$c2 = new MERLODEV\Clientes\PJ();
$c3 = new MERLODEV\Clientes\PJ();
$c4 = new MERLODEV\Clientes\PF();
$c5 = new MERLODEV\Clientes\PJ();
$c6 = new MERLODEV\Clientes\PF();
$c7 = new MERLODEV\Clientes\PF();
$c8 = new MERLODEV\Clientes\PJ();
$c9 = new MERLODEV\Clientes\PJ();
$c10 = new MERLODEV\Clientes\PF();

$c1->setNome('Kaique')
    ->setCpf('44455566615')
    ->setEndereco('Rua Joao Paulo')
    ->setEnderecoCobranca('Rua Joao Gabriel')
    ->setImportancia(4)
    ->setTipo('Pessoa Física');


$c2->setNome('Jose')
    ->setCnpj('42652039814')
    ->setEndereco('Rua Jose Freire')
    ->setEnderecoCobranca('Rua Augusta')
    ->setImportancia(3)
    ->setTipo('Pessoa Jurídica');

$c3->setNome('Maria')
    ->setCnpj('89456412658')
    ->setEndereco('Rua RIskallah Abib')
    ->setEnderecoCobranca('Rua Brigadeiro Luis Antonio')
    ->setImportancia(2)
    ->setTipo('Pessoa Jurídica');


$c4->setNome('Kaique')
    ->setCpf('89456587541')
    ->setEndereco('Rua Sergio Trevisan')
    ->setEnderecoCobranca('Rua Anel das 12')
    ->setImportancia(1)
    ->setTipo('Pessoa Física');


$c5->setNome('Karla')
    ->setCnpj('85412569841')
    ->setEndereco('Rua Marechal Osorio')
    ->setEnderecoCobranca('Rua Luis de Freitas')
    ->setImportancia(5)
    ->setTipo('Pessoa Jurídica');


$c6->setNome('Jose')
    ->setCpf('89541254126')
    ->setEndereco('Rua Marechal Rondon')
    ->setImportancia(2)
    ->setTipo('Pessoa Física');


$c7->setNome('Murilo')
    ->setCpf('96358412587')
    ->setEndereco('Rua Soldado Ryan')
    ->setEndereco('Rua Guararapes')
    ->setImportancia(5)
    ->setTipo('Pessoa Física');



$c8->setNome('Fernanda')
    ->setCnpj('85412541278')
    ->setEndereco('Rua Game of Thrones')
    ->setImportancia(3)
    ->setTipo('Pessoa Jurídica');


$c9->setNome('Jessica')
    ->setCnpj('96521258457')
    ->setEndereco('Rua Paulo II')
    ->setImportancia(1)
    ->setTipo('Pessoa Jurídica');


$c10->setNome('Joaquim')
    ->setCpf('985321354145')
    ->setEndereco('Rua Filomena Cassilas')
    ->setImportancia(3)
    ->setTipo('Pessoa Física');


$persist->persist($c1);
$persist->persist($c2);
$persist->persist($c3);
$persist->persist($c4);
$persist->persist($c5);
$persist->persist($c6);
$persist->persist($c7);
$persist->persist($c8);
$persist->persist($c9);
$persist->persist($c10);

$persist->flush();