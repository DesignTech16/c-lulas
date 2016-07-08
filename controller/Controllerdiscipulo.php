<?php
require_once("./model/Modeldiscipulo.php");
require_once("./DAO/DAOdiscipulo.php");

/**
*
* @author Danilo
*/
 class Controllerdiscipulo {

    private $daodiscipulo;

    
    /**
    * Construtor
    */
    public function Controllerdiscipulo(){
        $this->daodiscipulo = new DAOdiscipulo();
    }

    /**
    * grava discipulo
    * @param $pModeldiscipulo
    * return int
    */
    public function salvardiscipuloController(Modeldiscipulo $pModeldiscipulo){
        return $this->daodiscipulo->salvardiscipuloDAO($pModeldiscipulo);
    }

    /**
    * recupera uma lista dediscipulo
    * @param $pWhere
    * @param $pGroup
    * @param $pOrder
    * return array
    */
    public function getdiscipuloController($pWhere = "", $pGroup = "", $pOrder = ""){
        return $this->daodiscipulo->getdiscipuloDAO($pWhere, $pGroup, $pOrder);
    }
     
    public function buscarDiscipulos($nome){
        return $this->daodiscipulo->buscarNomes($nome);
    } 

    /**
    * atualiza discipulo
    * @param $pModeldiscipulo
    * return boolean
    */
    public function atualizardiscipuloController(Modeldiscipulo $pModeldiscipulo){
        return $this->daodiscipulo->atualizardiscipuloDAO($pModeldiscipulo);
    }

    /**
    * exclui discipulo
    * @param $pWhere
        */
    public function excluirdiscipuloController($pWhere = ""){
        return $this->daodiscipulo->excluirdiscipuloDAO($pWhere);
    }
}