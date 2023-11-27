<?php
include_once "Database.php";
include_once "Pessoa.php";

    class PessoDao {
        public function  __construct(){}
        
    
        //select all
        public function selectAll(){
            $db = new Database();
            $conn = $db->getConnection();
            $sql = "SELECT * FROM usuarios";        
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt -> rowCount() > 0){
                //PDO::FETCH_ASSOC retorna uma array indexada associada
                $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            } else{
                return [];
            }

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            return $result;
        }

        //insert
        public function insert(Pessoa $pessoa){

            $db = new Database();
            $conn = $db ->getConnection();
        
            $sql="INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";
            $stmt=$conn->prepared($sql);
        
            $nome = $pessoa->getNome();
            $email = $pessoa->getEmail();
            $senha = $pessoa->getSenha();
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            return $stmt -> execute();
        
        }

        //delete
        public function delete($id){
            $db =  new Database();
            $conn = $db->getConnection();
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $conn -> prepare($sql);
            $stmt = binParam('i:d, $id');
            return $stmt -> execute();

        }

        //select_by_id
        public function seletById($id){
            
        }

    }
?>