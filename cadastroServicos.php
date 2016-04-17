<?php

    if ($_SESSION['logado'] == 0) {

        header('Location: index.php');
?>


<?php } else { ?>

        <div style="width: 100%; background-color: #A9B5C1; padding: 10px 15px;">

            <div style="width: 100%;  background-color: #024556; padding: 20px; color: #ffffff; margin-bottom: 15px;">
                CADASTRO DE SERVIÇOS
            </div>

            <form action="executaServico.php" method="post">
                <label>Nome: </label><input id="nome" class= "form-control" style="width: 30%;" type="text" name="nome" />
                <label>Tipo do serviço: </label><input class= "form-control" style="width: 30%;" type="text" name="s_tipo" placeholder="Ex: Serviços Gerais" />
                <label>Valor: </label><input class= "form-control" style="width: 20%;" type="text" name="valor" placeholder="R$"/>

                <button type="submit" class="btn btn-default" style="margin-top: 15px;">Enviar</button>
            </form>
        </div>
<?php } ?>