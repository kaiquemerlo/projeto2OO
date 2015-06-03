<?php
require_once 'autoload.php';
require_once'src/MERLODEV/functions/config.php';
use \MERLODEV\Utils\Helper;
use MERLODEV\Utils\PDO;
$banco = new Helper($config['host'], $config['dbname'], $config['user'], $config['password']);
$pessoafisica   = $banco->selectAll('pessoafisica', '*');
$pessoajuridica = $banco->selectAll('pessoajuridica', '*');

$dados = array_merge($pessoafisica, $pessoajuridica);

require_once'src/MERLODEV/functions/functions.php';
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