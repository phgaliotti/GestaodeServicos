<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once ('classes/ClienteDAO.php');

$id = $_GET['id'];
$nome = $_GET['nome'];

$ClienteDAO = new ClienteDAO();
$ClienteDAO->deleteCliente($id);

header('Location: viewClientes.php?delete=ok');