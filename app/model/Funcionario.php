<?php

require ("Pessoa.php");

class Funcionario extends Pessoa{
    
    private $salario;
    private $carteiraTrabalho;
    private $estado;
    
    public function Funcionario($salario = "", $carteiraTrabalho = "", $estado = "", $nome = "", $cpf = "", $sexo = "", $ano_nascimento = "") {
        $this->salario = $salario;
        $this->carteiraTrabalho = $carteiraTrabalho;
        $this->estado = $estado;
  
        parent::__construct($nome, $cpf, $sexo, $ano_nascimento);
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getCarteiraTrabalho() {
        return $this->carteiraTrabalho;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function setCarteiraTrabalho($carteiraTrabalho) {
        $this->carteiraTrabalho = $carteiraTrabalho;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

}
