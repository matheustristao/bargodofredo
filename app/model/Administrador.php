<?php


require ("Pessoa.php");

class Administrador extends Pessoa {

    private $id;
    private $password;
    
    function __construct($nome = "", $id = "", $cpf = "", $sexo = "", $ano_nascimento = "", $password = "") {
       
        $this->id = $id;
        $this->password = $password;
        
        parent::__construct($nome, $cpf, $sexo, $ano_nascimento);
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}
