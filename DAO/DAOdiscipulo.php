<?php
require_once("./model/Modeldiscipulo.php");
require_once("./conexoes/ConexaoMySql.php");

/**
*
* @author Danilo
*/
class DAOdiscipulo {

    /**
    * grava discipulo
    * @param $pModeldiscipulo
    * return int
    */
    
    public static $instance;

    public function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DAOdiscipulo();

        return self::$instance;
    }
    public function Inserir(Modeldiscipulo $disc) {
        try {
            $sql = "INSERT INTO usuario (		
                nome,
                email,
                telefone,
                endereco,
                lider) 
                VALUES (
                :nome,
                :email,
                :telefone,
                :endereco,
                :lider)";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $disc->getNome());
            $p_sql->bindValue(":email", $disc->getEmail());
            $p_sql->bindValue(":telefone", $disc->getTelefone());
            $p_sql->bindValue(":endereco", $disc->getEndereco());
            $p_sql->bindValue(":lider", $disc->getLider);


            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            print ("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }

     public function buscarNomes($nome) {
        try {
            $sql = "SELECT * FROM discipulo WHERE lider = :nome";
            $p_sql = ConexaoMySql::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $nome);
            $p_sql->execute();
            $list = array();
            $i=0;        
            while($row = $p_sql->fetch(PDO::FETCH_OBJ)){
                $list[$i]=$row->nome;
                $i++;
            }
                
            return $list;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            print("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }


}