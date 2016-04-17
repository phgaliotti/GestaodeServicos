<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once 'classes/ServicoDAO.php';

$nome = $_POST['nome'];
$s_tipo = $_POST['s_tipo'];
$valor = $_POST['valor'];


$ServicoDAO = new ServicoDAO();
$ServicoDAO->insertServico($nome, $s_tipo, $valor);

echo "Serviço cadastrado com sucesso";