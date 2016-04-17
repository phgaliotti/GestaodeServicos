<?php

    if ($_SESSION['logado'] == 0) {

        header('Location: index.php');
?>


<?php } else { ?>

        <div style="width: 100%; background-color: #A9B5C1; padding: 10px 15px; ">

            <div style="width: 100%;  background-color: #024556; padding: 20px; color: #ffffff; margin-bottom: 15px;">
                CADASTRO DE CLIENTES
            </div>

            <form action="executaCliente.php" method="post">
                <label>Nome: </label><input id="nome" class= "form-control" style="width: 30%;" type="text" name="nome" />
                <label>E-mail: </label><input class= "form-control" style="width: 30%;" type="text" name="email" />
                <label>Endereco: </label><input class= "form-control" style="width: 40%;" type="text" name="endereco" />
                <label>Numero: </label><input class= "form-control" style="width: 10%;" type="text" name="numero" />
                <label>Telefone: </label><input class= "form-control" style="width: 20%;"type="text" name="telefone"/>
                <label>Celular: </label><input class= "form-control" style="width: 20%;"type="text" name="celular"/>

                <button type="submit" class="btn btn-default" style="margin-top: 15px;">Salvar</button>
            </form>
        </div>
<?php } ?>