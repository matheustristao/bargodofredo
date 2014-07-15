<?php

class FuncionarioController {

    private static $funcionarioDao;
    private static $funcionario;

    private function instanciaFuncionario() {

        if (!isset(self::$funcionario)) {
            self::$funcionario = new Funcionario();
        }
        return self::$funcionario;
    }

    private function instanciaFuncionarioDao() {

        if (!isset(self::$funcionarioDao)) {
            self::$funcionarioDao = new FuncionarioDao();
        }
        return self::$funcionarioDao;
    }

    public function listarFuncionarios() {

        $funcionarioDao = self::instanciaFuncionarioDao();

        return $lista = $funcionarioDao->listFuncionario();
    }

    public function cadastrarFuncionario($nome, $cpf, $sexo, $ano_nascimento, $salario, $carteira_trabalho) {

        $funcionario = self::instanciaFuncionario();
        $funcionarioDao = self::instanciaFuncionarioDao();

        $funcionario->setNome($nome);
        $funcionario->setCpf($cpf);
        $funcionario->setSexo($sexo);
        $funcionario->setAno_nascimento($ano_nascimento);
        $funcionario->setSalario($salario);
        $funcionario->setCarteiraTrabalho($carteira_trabalho);


        $funcionarioDao->salvarFuncionario($funcionario->getNome(), $funcionario->getCpf(), $funcionario->getSexo(), $funcionario->getAno_nascimento(), $funcionario->getSalario(), $funcionario->getCarteiraTrabalho());
    }

    public function atualizarFuncionario() {
        
    }

    public function deletarFuncionario() {
        
    }

}
