<?php

require_once('Connection.php');
class ServicoDAO {
    private $_connection;

    public function ServicoDAO(){
        $this->_connection = Connection::getInstance();
    }

    public function insertServico($nome, $s_tipo, $valor){

        try{
            $insert = "INSERT INTO servicos (nome, s_tipo, valor)
            VALUES (:nome, :s_tipo, :valor)";

            $stmt = $this->_connection->prepare($insert);

            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":s_tipo", $s_tipo);
            $stmt->bindValue(":valor", $valor);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getAllServicos(){

        try{
            $select = "SELECT * FROM servicos ";

            $stmt = $this->_connection->prepare($select);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function registraServicos ($servico, $cliente, $data_inicio, $data_fim){

        try{
            $insert = " INSERT INTO servicos_contratados (nome_servico, nome_cliente, data_inicio, data_fim)
            VALUES (:servico, :cliente, :data_inicio, :data_fim)";

            $stmt = $this->_connection->prepare($insert);

            $stmt->bindValue(":servico", $servico);
            $stmt->bindValue(":cliente", $cliente);
            $stmt->bindValue(":data_inicio", $data_inicio);
            $stmt->bindValue(":data_fim", $data_fim);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getServicosContratados(){

        try{
            $select = "SELECT * FROM servicos_contratados ";

            $stmt = $this->_connection->prepare($select);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }


}