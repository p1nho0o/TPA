<?php

    class Manager extends Conexao{

        public function insert_client($data)
        { 
            $pdo = parent::get_instance();

            $sql = "INSERT INTO client VALUES (NULL, :nome, :email, :cpf, :data_nascimento, :endereco, :telefone)";
        
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value) {
                $statement->bindValue(":$key", $value);
            }
      
            $statement->execute();

        }

        public function list_client()
        {
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM client ORDER BY id DESC";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();

        }
        public function list_client_by_id($id)
{
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM client WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(); 
}

        public function delete_client($id)
        {
            $pdo = parent::get_instance();
            $sql = "DELETE FROM client WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }
        public function update_client($data)
        {
            $pdo = parent::get_instance();
            $sql = "UPDATE client
                    SET nome = :nome,
                         email =  :email, 
                        cpf = :cpf,
                        data_nascimento = :data_nascimento, 
                        endereco = :endereco, 
                        telefone = :telefone
                        WHERE id = :id";
            var_dump($sql);
            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value){
                    $statement->bindValue(":$key", $value);
            }
            $statement->execute();
        }
    }

?>
