<?php

class Pessoa {

    private $nome;
    private $cpf;
    private $sexo;
    private $ano_nascimento;
    
    function __construct($nome = "", $cpf = "", $sexo = "", $ano_nascimento = "") {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->ano_nascimento = $ano_nascimento;
    }

 
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setAno_nascimento($ano_nascimento) {
        $this->ano_nascimento = $ano_nascimento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getAno_nascimento() {
        return $this->ano_nascimento;
    }

}
