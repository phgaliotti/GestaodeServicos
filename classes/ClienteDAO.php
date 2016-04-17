<?php

require_once('Connection.php');
class ClienteDAO {
    private $_connection;

    public function ClienteDAO(){
        $this->_connection = Connection::getInstance();
    }

    public function insertClientes($nome, $email, $endereco, $numero, $telefone, $celular){

        try{
            $insert = "INSERT INTO clientes (nome, email, endereco, numero, telefone, celular)
            VALUES (:nome, :email, :endereco, :numero, :telefone, :celular)";

            $stmt = $this->_connection->prepare($insert);

            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":numero", $numero);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":celular", $celular);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getAllClientes(){

        try{
            $select = "SELECT * FROM clientes ";

            $stmt = $this->_connection->prepare($select);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getClienteEditar($id){

        try{
            $select = "SELECT * FROM clientes WHERE id = :id ";

            $stmt = $this->_connection->prepare($select);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function updateAutualizaCliente($id, $nome, $email, $endereco, $numero, $telefone, $celular){
        try{
            $update = " UPDATE clientes SET nome= :nome, email= :email, endereco= :endereco, numero= :numero, telefone= :telefone, celular= :celular WHERE id = :id ";
            $stmt = $this->_connection->prepare($update);

            $stmt->bindValue(":id", $id);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":numero", $numero);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":celular", $celular);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function deleteCliente($id){
        try{
            $delete = " DELETE FROM clientes WHERE id = :id ";

            $stmt = $this->_connection->prepare($delete);
            $stmt->bindValue(":id", $id);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }
} 