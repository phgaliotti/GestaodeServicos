<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>Projetox - Index</title>

    <style>
        html, body {height: 100%;}
        body {margin: 0; padding: 0; background-color: #A9B5C1;}
        .bloco {
            font-weight: 200;
            width: 19.1%;
            display: inline-block;
            float: left;
            margin-left: 10px;
            padding: 85px 0px;
            text-align: center;
            color: #ffffff;
            background-color: #024556;
            border-radius: 10px;
        }

        .bloco:hover { background-color: #065A6F; }

        .bloco2 {
            width: 24%;
            color: #ffffff;
            background-color: #024556;
            display: inline-block;
            float: left;
            margin-left: 10px;
            padding: 45px 0px;
        }

        .botao {
            width: 100%;
            text-align: center;
            padding: 11px 0;
            margin: 5px auto;
            cursor: pointer;
        }

        .botao:hover { opacity: 0.8; text-decoration: underline;}
    </style>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#sucess').hide().delay('500').fadeIn(800).delay('2000').fadeOut(800).hide();
        });

        function ViewCcliente() {
            $('#ccliente').css({display: ''});
            $('html, body').animate({
                scrollTop: $("#ccliente").offset().top
            }, 1000);
            $("#nome").focus();
            $('#cservico').css({display: 'none'});
        }

        function ViewCservico() {
            $('#cservico').css({display: ''});
            $('html, body').animate({
                scrollTop: $("#cservico").offset().top
            }, 1000);
            $("#nome").focus();
            $('#ccliente').css({display: 'none'});
        }

    </script>

</head>

    <body>

    <?php
        $loginerror = $_GET['loginerror'];
        $cliente = $_GET['cliente'];

        require_once 'login.php';

        if ($_SESSION['logado'] == 0) {
    ?>

    <?php if ($loginerror == "ok") { ?>
        <div id="sucess" style="background-color: #F44336; width: 100%; color: #ffffff; padding: 3px; margin: -10px 0 10px 0; text-align: center;">
            Nome de usuário ou senha está incorreto
        </div>
    <?php } ?>

        <span style="margin: 10px;">É necessário fazer o login para acessar o sistema</span>

    <?php } else { ?>

            <?php if ($cliente == "ok") { ?>
                <div id="sucess" class="sucess" style="background-color: #4CAF50; width: 100%; color: #ffffff; padding: 3px; margin-bottom: 10px;">
                    Cliente salvo com sucesso!
                </div>
            <?php } ?>

        <div style="width: 100%; height: 200px; margin: 0 auto;">
            <!--
                <div class="bloco2">
                    <div class="botao" style="background-color: #607D8B;" onclick="ViewCcliente()">Cadastrar Clientes</div>
                    <div class="botao" onclick="location.href='viewClientes.php'" style="background-color: #FF5722;">Gerenciar Clientes</div>
                </div>
                -->

                <div class="bloco" onclick="ViewCcliente()" style="cursor: pointer;" > Cadastrar Clientes</div>

                <div class="bloco" onclick="location.href='viewClientes.php'" style="cursor: pointer;" > Gerenciar Clientes</div>

                <div class="bloco" onclick="ViewCservico()" style="cursor: pointer;">Cadastrar Serviços</div>

                <div class="bloco" onclick="location.href='registrarServicos.php'" style="cursor: pointer;" > Registro de Serviços</div>

                <div class="bloco" onclick="location.href='consultaServicos.php'" style="cursor: pointer;" >Consultar Serviços</div>
            </div>

            <div id="ccliente" style="display: none; ">
                <?php require_once ('cadastroCliente.php'); ?>
            </div>

            <div id="cservico" style="display: none; ">
                <?php require_once ('cadastroServicos.php'); ?>
            </div>
    <?php } ?>
    </body>
</html> 