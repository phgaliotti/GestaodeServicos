<?php

require_once('Connection.php');
class UsuarioDAO {
    private $_connection;

    public function UsuarioDAO(){
        $this->_connection = Connection::getInstance();
    }

    public function getValidaLogin($email , $senha) {
        try {
            $stmt = $this->_connection->prepare(' SELECT * FROM administracao WHERE email = :email and senha = :senha ');

            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;

            return null;
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}