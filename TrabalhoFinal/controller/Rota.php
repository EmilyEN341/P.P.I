<?php

include_once "Pessoa.php";
include_once "PessoaController.php";

if (!isset($_POST['op'])) {
    header('Location: view_listagem_user.php');
    echo "Operação não informada op";
    exit;
}

$op = $_POST['op'];

switch ($op) {
    case "cadastrar_usuario":
        if (!isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['senha'])) {
            header('Location: index.php');
            exit;
        }

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['senha'];

        $pessoaController = new PessoaController();
        $resultado = $pessoaController->cadastrarPessoa($nome, $email, $password);
        echo $resultado;
        break;
}

?>
