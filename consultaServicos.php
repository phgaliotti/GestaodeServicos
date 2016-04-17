<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>Consultar Serviços Cadastrados</title>
</head>

    <body>

        <?php
            require_once 'classes/ServicoDAO.php';

            $ServicoDAO = new ServicoDAO();
            $arrayRegistros = $ServicoDAO->getServicosContratados();

            session_start();

            if ($_SESSION['logado'] == 0) {
                //echo "faça o login";
                header('Location: index.php');
            } else {
        ?>

        <div style="width: 100%; text-align: center; background-color: #024556; padding: 20px; color: #ffffff;">
            CONSULTA DE SERVIÇOS CONTRATADOS
        </div>

        <div style="margin: 20px auto; width: 80%;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Cliente</th>
                    <th>Data inicial</th>
                    <th>Data final</th>
                    <th style="text-align: center;">Disas restantes de serviço</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=0;$i<=count($arrayRegistros)-1;$i++){ ?>
                    <tr>
                        <td><?php echo $arrayRegistros[$i]['nome_servico']; ?></td>
                        <td><?php echo $arrayRegistros[$i]['nome_cliente']; ?></td>
                        <td><?php echo $arrayRegistros[$i]['data_inicio']; ?></td>
                        <td><?php echo $arrayRegistros[$i]['data_fim']; ?></td>
                        <?php
                            $data_inicial = date('Y/m/d');
                            $data_final = $arrayRegistros[$i]['data_fim'];

                            $time_inicial = strtotime($data_inicial);
                            $time_final = strtotime($data_final);

                            $diferenca = $time_final - $time_inicial;
                            $dias = (int)floor( $diferenca / (60 * 60 * 24));


                           echo "<td style='text-align: center;'> <strong>$dias</strong></td>";

                        ?>

                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <div style="text-align: center; margin-top: 10px;">
                <button type="button" class="btn btn-default" onclick="location.href='index.php'">Voltar</button>
            </div>

        </div>

<?php } ?>

    </body>
</html> 