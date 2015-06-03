<?php
/**
 * Created by PhpStorm.
 * User: kaiquemerlo
 * Date: 22/05/2015
 * Time: 21:38
 */

namespace MERLODEV\Utils;


class Helper {
    private $conexao;

    public function __construct($dsn, $dbname, $user, $password){
        try {
            $this->conexao = new \PDO("mysql:host={$dsn};dbname={$dbname}", $user, $password);
        }catch(\PDOException $error){
            return $error->getMessage()."<br>".$error->getCode();
        }
    }

    public function getConexao(){
        if(!empty($this->conexao)) {
            return $this->conexao;
        }
        return false;
    }

    public function selectAll($tabela, $valor, $where = null){
        $db = self::getConexao();

        $sql = "SELECT {$valor} FROM {$tabela}";
        if(isset($where) AND $where != null){
            $sql .= "WHERE {$where}";
        }

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $resultado;
    }

} 