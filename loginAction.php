<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

require_once 'classes/UsuarioDAO.php';

$email = $_POST['login'];
$senha = $_POST['senha'];

$UsuarioDAO = new UsuarioDAO();
$arrayLogin =$UsuarioDAO->getValidaLogin($email, $senha);

if(count($arrayLogin) > 0){
    $_SESSION['logado'] = 1;
    $_SESSION['usuario'] = $arrayLogin[0]['id'];
    $_SESSION['nome'] = $arrayLogin[0]['nome'];
    $_SESSION['email'] = $arrayLogin[0]['email'];

    header('Location: index.php');
}else{
    $_SESSION['logado'] = 0;
    header('Location: index.php?loginerror=ok');
}

