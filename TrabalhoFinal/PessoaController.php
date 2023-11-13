<?php

class PessoaController(){
    public function _contruct() {


    }

    public function cadastrarPessoa($nome, $email, $senha){
        //instanciamos uma nova pessoa
        $pessoa=new Pessoa();

        //setar os atributos do obj Pessoa
        $pessoa->setAll(null, $nome, $email, $senha);

        //instanciar um obj PessoaDao
        $pessoaDAO=new PessoaDao();
        
        //chamar o método insert do obj PessoaDAO
        return $pessoaDAO->insert($pessoa);
    }

    public function listarPessoa($nome, $email, $senha){
    }
    public function getPessoa($nome, $email, $senha){
    }
    public function editPessoa($nome, $email, $senha){
    }
    public function excluirPessoa($nome, $email, $senha){
    }
    public function autentPessoa($nome, $email, $senha){
    }
        
}

?>