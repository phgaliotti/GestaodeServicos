<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#sucess').hide().delay('700').fadeIn(800).delay('2000').fadeOut(800).hide();

        });
    </script>

    <meta charset="utf-8">
    <title></title>
</head>

    <body>
        <?php

            session_start();

            if ($_SESSION['logado'] == 0) {
                header('Location: index.php');
            } else {

            require_once ('classes/ClienteDAO.php');

            $update = $_GET['update'];
            $delete = $_GET['delete'];

            $ClienteDAO = new ClienteDAO();
            $arrayClientes = $ClienteDAO->getAllClientes();

        ?>

        <div style="width: 100%; text-align: center; background-color: #024556; padding: 20px; color: #ffffff;">
            GERENCIAR CLIENTES
        </div>

         <?php if ($update == "ok"){ ?>

            <div id="sucess" class="sucess" style="background-color: #4CAF50; width: 100%; color: #ffffff; padding: 3px;">
                Dados alterados com sucesso!
            </div>

         <?php } ?>

                <?php if ($delete == "ok"){ ?>

                    <div id="sucess" class="sucess" style="background-color: #4CAF50; width: 100%; color: #ffffff; padding: 3px;">
                        Cliente deletado com sucesso!
                    </div>

                <?php } ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0;$i<=count($arrayClientes)-1;$i++){ ?>
                    <tr>
                        <td><?php echo $arrayClientes[$i]['id']; ?></td>
                        <td><?php echo $arrayClientes[$i]['nome']; ?></td>
                        <td><?php echo $arrayClientes[$i]['email']; ?></td>
                        <td><a href="editaClientes.php?id=<?php echo $arrayClientes[$i]['id']; ?>"> <img src="img/editar.png" /></a></td>
                        <td><a href="deleteCliente.php?id=<?php echo $arrayClientes[$i]['id']; ?>&nome=<?php echo $arrayClientes[$i]['nome']; ?>"><img src="img/delete.png" /></a></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <div style="text-align: center; margin-top: 10px;">
            <button type="button" class="btn btn-default" onclick="location.href='index.php'">Voltar</button>
        </div>
    <?php } ?>
    </body>
</html> 