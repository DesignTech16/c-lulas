<?php
/**
*
* @author Danilo
*/
 class Modeldiscipulo {

    private $id_discipulo;
    private $nome;
    private $telefone;
    private $email;
    private $endereco;
    private $lider;

    /**
    * Construtor
    */
    public function Modeldiscipulo(){}

    /**
    * seta o valor de $id_discipulo
    * @param $pId_discipulo
    */
    public function setId_discipulo($pId_discipulo){
        $this->id_discipulo = $pId_discipulo;
    }
    /**
    * return pk_$id_discipulo
    */
    public function getId_discipulo(){
        return $this->id_discipulo;
    }

    /**
    * seta o valor de $nome
    * @param $pNome
    */
    public function setNome($pNome){
        $this->nome = $pNome;
    }
    /**
    * return $nome
    */
    public function getNome(){
        return $this->nome;
    }

    /**
    * seta o valor de $telefone
    * @param $pTelefone
    */
    public function setTelefone($pTelefone){
        $this->telefone = $pTelefone;
    }
    /**
    * return $telefone
    */
    public function getTelefone(){
        return $this->telefone;
    }

    /**
    * seta o valor de $email
    * @param $pEmail
    */
    public function setEmail($pEmail){
        $this->email = $pEmail;
    }
    /**
    * return $email
    */
    public function getEmail(){
        return $this->email;
    }

    /**
    * seta o valor de $endereco
    * @param $pEndereco
    */
    public function setEndereco($pEndereco){
        $this->endereco = $pEndereco;
    }
    /**
    * return $endereco
    */
    public function getEndereco(){
        return $this->endereco;
    }

    /**
    * seta o valor de $lider
    * @param $pLider
    */
    public function setLider($pLider){
        $this->lider = $pLider;
    }
    /**
    * return $lider
    */
    public function getLider(){
        return $this->lider;
    }

    public function toString(){
        return "Modeldiscipulo {" . "::id_discipulo = " . $this->id_discipulo . "::nome = " . $this->nome . "::telefone = " . $this->telefone . "::email = " . $this->email . "::endereco = " . $this->endereco . "::lider = " . $this->lider .  "}";
    }
}
?>