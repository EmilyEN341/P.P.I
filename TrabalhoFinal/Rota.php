<?php
    if(!isset($_POST['op'])){
        header('Location: index.php')
        exit();
    }

    $op = $_POST['op'];

    switch($op){
        case "cadastrar_usuario";
            if(!isset($_POST['name'])) ||
            !isset($_POST['email']) ||
            !isset($_POST['password']) ||
            {
                header('Location: index.php');
                exit();
            }
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $pessoaController = new PessoaController();
            $resultado = $pessoaController->cadastrarPessoa($nome, $email, $senha);
            break;
    }
    
?>