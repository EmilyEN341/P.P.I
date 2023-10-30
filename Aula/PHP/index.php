<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PÁGINA</h1>
    <?php
        $minhavar = "Mundão perdido";
        echo "Hello $minhavar";
        echo "Blha blah \$minhavar";
        echo "Blha blah minhavar"."<br>";
        echo gettype($minhavar)."<br>";
        $minhavar=2;
        echo "$minhavar".gettype($minhavar);
        "<br>";
        $minhavar = 2.0;
        echo "$minhavar".gettype($minhavar).
        "<br>";

        class Pessoa{
            public $nome;

            public function __construct(){
                $this->nome=$n;
            }

            public function alteranome($n){
                $this->nome=$n;
            }

            public function get_nome(){
                return $this->nome;

            }

            public function size_nome(){
                return strlen($this->nome);
            }

        }

        $p1 = new Pessoa("Emily");
        $p2 = new Pessoa("Elisabeth");
        $p3 = new Pessoa("Neves");

        /*
        Adicionando o nome das pessoas, modo hard coding
        echo    "p1.nome=$p1->get_nome()." <br>".
                p2.nome=$p2->get_nome()." <br>".
                p3.nome=$p3->get_nome()." <br>""
        
        */
        

        //Array em PHP
        $pessoas=array($p1,$p2,$p3){

            foreach($pessoas as $pessoas){
                echo "Nome".$pessoa->get_nome()."<br>"
            }

        }
        
    ?>
</body>
</html>