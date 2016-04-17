<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title></title>
</head>

    <body>
        <?php
            ini_set("display_errors", 1);
            error_reporting(E_ALL);

            require_once ('classes/ClienteDAO.php');

            session_start();

            if ($_SESSION['logado'] == 0) {
                //echo "faça o login";
                header('Location: index.php');
            } else {

            $id = $_GET['id'];

            $ClienteDAO = new ClienteDAO();
            $arrayCliente = $ClienteDAO->getClienteEditar($id);

        ?>
        <div style="width: 100%; text-align: center; background-color: #024556; padding: 20px; color: #ffffff; margin-bottom: 10px;">
            EDITAR DADOS DO USUÁRIO (<?php echo $arrayCliente[0]['nome']; ?>)
        </div>

        <div style="padding: 20px;">
            <form action="updateCliente.php" method="post">
                <input type="hidden" value="<?php echo $arrayCliente[0]['id'];  ?>" name="id"/>
                <label>Nome: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['nome']; ?>" style="width: 30%;" type="text" name="nome" />
                <label>E-mail: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['email']; ?>" style="width: 30%;" type="text" name="email" />
                <label>Endereco: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['endereco']; ?>" style="width: 40%;" type="text" name="endereco" />
                <label>Numero: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['numero']; ?>" style="width: 10%;" type="text" name="numero" />
                <label>Telefone: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['telefone']; ?>" style="width: 20%;"type="text" name="telefone"/>
                <label>Celular: </label><input class= "form-control" value="<?php echo $arrayCliente[0]['celular']; ?>" style="width: 20%;"type="text" name="celular"/>

                <div style="margin-top: 20px;">
                    <button class="btn btn-default" type="submit">Salvar</button>
                    <button type="button" class="btn btn-default" onclick="location.href='index.php'">Voltar</button>
                </div>
            </form>
        </div>

    <?php } ?>

    </body>
</html> 