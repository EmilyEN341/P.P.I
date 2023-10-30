<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo $_GET["a"]."".$_GET["b"];
    function soma( $a, $b){
        return $a+$b;
    }
    if(!(isset ($_GET["a"]) && isset ($_GET["b"]))){
        header("Location:https://localhost/erro.php");
        exit;
    }
    echo soma($_GET["a"],$_GET["b"]);
        
    ?>
</body>
</html>