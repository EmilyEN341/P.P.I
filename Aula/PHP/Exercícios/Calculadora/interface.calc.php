<?php

    function soma( $a, $b){
        return $a+$b;
    }

    function sub( $a, $b){
        return $a-$b;
    }

    function mult( $a, $b){
        return $a*$b;
    }

    function div( $a, $b){
        return $a/$b;
    }

    if(!isset ($_GET["a"]) || !isset ($_GET["b"])){
        header("Location:https://localhost/erro.php");
        exit;
    } else {
        $operacao = $_GET["operacao"];
        echo var_dump($operacao);
        switch ($operacao){
            case 'add':
                echo soma($_GET["a"],$_GET["b"]);
                
                exit;
            case 'sub':
               echo sub($_GET["a"],$_GET["b"]);
                exit;
            case 'mult':
                echo mult($_GET["a"],$_GET["b"]);
                exit;
            case 'div':
                echo div($_GET["a"],$_GET["b"]);
                exit;
            default:
                header("Location:https://localhost/erro.php");
                exit;
        }
    }

?>