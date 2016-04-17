<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once ('classes/ClienteDAO.php');

$id = $_POST['id'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$ClienteDAO = new ClienteDAO();
$ClienteDAO->updateAutualizaCliente($id, $nome, $email, $endereco, $numero, $telefone, $celular);

header('Location: viewClientes.php?update=ok');