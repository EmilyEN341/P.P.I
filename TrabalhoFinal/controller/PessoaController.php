<?php

include_once "Pessoa.php";
include_once "PessoaDAO.php";

class PessoaController{
    public function _contruct() {}

    public function cadastrarPessoa($nome, $email, $senha){

        $pessoa=new Pessoa();
        $pessoa->setAll(null, $nome, $email, $senha);

        $dao=new PessoaDao();
        return $dao->insert($pessoa);
    }

    public function listarPessoa(){
        $dao = new PessoaDAO();

        if(isset($_GET['action']) && $_GET['action'] === 'excluir'){
            $userId == isset($_GET['id']) ? $_GET['id'] : null;

            $this->deletePessoa($userId);

        }

        return $dao->selectAll();
    }

    public function getPessoa($nome, $email, $senha){
    }

    public function editPessoa($nome, $email, $senha){
    }

    public function deletePessoa($nome, $email, $senha){
        $sql = "DELETE FROM pessoa WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':id' => $id);

        $query->execute($parameters);
    }

    public function autentPessoa($email, $senha){
    }
        
}

?>