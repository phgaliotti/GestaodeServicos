<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

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
            require_once ('classes/ServicoDAO.php');

            $ClienteDAO = new ClienteDAO();
            $arrayClientes = $ClienteDAO->getAllClientes();

            $ServicosDAO = new ServicoDAO();
            $arrayServicos = $ServicosDAO->getAllServicos();

            session_start();

            if ($_SESSION['logado'] == 0) {
               //echo "faça o login";
                header('Location: index.php');
            } else {

        ?>

        <div style="width: 100%; text-align: center; background-color: #024556; padding: 20px; color: #ffffff; margin-bottom: 20px;">
            REGISTRAR SERVIÇOS CONTRATADOS
        </div>

        <div style="padding: 0 10px; ">
            <form action="executaRegistro.php" method="post" >

                <label>Nome do serviço contratado: </label>
                    <select name="servico" class= "form-control" style="width: 30%; margin-bottom: 15px;" >
                        <option value="" disabled selected >Serviço</option>
                        <?php
                            for ($i=0; $i <=count($arrayServicos)-1; $i++) {

                                echo "<option value'" . $arrayServicos[$i]['nome'] . "'>" . $arrayServicos[$i]['nome'] . "</option>";

                            }
                        ?>

                    </select>

                <label>Nome do contratante: </label>
                <select name="cliente" class= "form-control" style="width: 30%; margin-bottom: 15px;" >
                    <option value="" disabled selected>Cliente</option>
                    <?php
                        for ($i=0; $i <=count($arrayClientes)-1; $i++) {
                            echo "<option value'" . $arrayClientes[$i]['nome'] . "'>" . $arrayClientes[$i]['nome'] . "</option>";
                        }
                  ?>
                </select>

                <label>Data de inicio do serviço: </label>
                    <input type="date" class= "form-control" style="width: 30%; margin-bottom: 15px;" name="data_inicio" />

                <label>Data de final do serviço: </label>
                    <input type="date" class= "form-control" style="width: 30%; margin-bottom: 30px;" name="data_fim"/>

                <button class="btn btn-default" type="submit">Salvar</button>
                <button type="button" class="btn btn-default" onclick="location.href='index.php'">Voltar</button>
            </form>
        </div>
<?php } ?>
    </body>
</html> 