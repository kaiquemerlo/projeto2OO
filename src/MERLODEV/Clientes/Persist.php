<?php
/**
 * Created by PhpStorm.
 * User: kaiquemerlo
 * Date: 22/05/2015
 * Time: 22:31
 */

namespace MERLODEV\Clientes;
use MERLODEV\Utils\Helper;

class Persist extends Helper{

    private $pdo;
    private $clientes = [];

    /**
     * @param null $pdo
     */
    public function __construct($pdo = null){
        if($pdo != null){
            $this->pdo = $pdo;
            return true;
        }
        return false;
    }

    /**
     * @param $cliente
     */
    public function persist($cliente){
        if(!in_array($cliente, $this->clientes)){
            $this->clientes[] = $cliente;
        }
    }

    public function flush(){

        foreach($this->clientes as $cliente) {
            try {
                if (method_exists($cliente, "getCpf")) {
                    $stmt = $this->pdo->prepare("INSERT INTO pessoafisica(nome, endereco, enderecoCobranca, tipo, importancia, cpf) VALUES(:nome, :endereco, :enderecoCobranca, :tipo, :importancia, :cpf)");
                    $cpf = $cliente->getCpf();
                    $stmt->bindValue(':cpf', $cpf);
                }else{
                    $stmt = $this->pdo->prepare("INSERT INTO pessoajuridica(nome, endereco, enderecoCobranca, tipo, importancia, cnpj) VALUES(:nome, :endereco, :enderecoCobranca, :tipo, :importancia, :cnpj)");
                    $cnpj = $cliente->getCnpj();
                    $stmt->bindValue(':cnpj', $cnpj);
                }
                $stmt->bindValue(':nome', $cliente->getNome());
                $stmt->bindValue(':endereco', $cliente->getEndereco());
                if(method_exists($cliente, "getEnderecoCobranca")) {
                    $stmt->bindValue(':enderecoCobranca', $cliente->getEnderecoCobranca());
                }
                $stmt->bindValue(':tipo', $cliente->getTipo());
                $stmt->bindValue(':importancia', $cliente->getImportancia());
                $stmt->execute();
            }catch(\PDOException $e){
                echo $e->getMessage();
            }

        }

    }





} 