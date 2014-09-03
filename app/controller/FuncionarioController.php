<?php

//Classe FuncionarioController, responsável por controlar funcões de Funcionario
class FuncionarioController {

    //Variáveis que recebem instancia das classes FuncionarioDao e Funcionario
    private static $funcionarioDao;
    private static $funcionario;

    //Aqui é utilizado singleton, de forma que a classe só poderá ser instanciada uma vez
    //Sempre que a instancia for usada, ela virá como um retorno dessa funcao
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

    
    //Essa funcao retorna uma variavel lista, que recebe o retorno da funcao listFuncionario() 
    //da classe FuncionarioDao
    public function listarFuncionarios() {

        $funcionarioDao = self::instanciaFuncionarioDao();

        return $lista = $funcionarioDao->listFuncionario();
    }
    
    //Essa funcao cadastra um funcionario, setando os valores recebidos na classe Funcionario
    // e depois chamando a funcao salvarFuncionario da classe FuncionarioDao, enviando
    // como parametros os valores setados na classe Funcionario

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
