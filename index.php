<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


require_once'src/MERLODEV/functions/functions.php';
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




$dados = array($c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de clientes</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>

    <body>

<?php makeTable($dados); ?>

    </body>
</html>