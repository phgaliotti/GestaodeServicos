<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once 'classes/ServicoDAO.php';

$servico = $_POST['servico'];
$cliente = $_POST['cliente'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];



$ServicoDAO = new ServicoDAO();
$ServicoDAO->registraServicos($servico, $cliente, $data_inicio, $data_fim);

echo "Cadastro realizado";