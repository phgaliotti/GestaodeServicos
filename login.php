<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

    if (isset ($_SESSION['logado']) != true ){
        $_SESSION['logado'] = 0;
    }

    if ($_SESSION['logado'] == 0) {

?>
        <style>
            .login {
                width: 100%;
                padding: 15px;
                background-color: #4C4C4C;
                margin: 0 auto 10px auto;
                text-align: right;
            }

        </style>

    <div style="" class="login">
        <form method="post" class="form-inline" action="loginAction.php">
            <input type="text" class="form-control" id="login" name="login"  placeholder="e-mail">
            <input type="password" class="form-control" id="senha" name="senha"  placeholder="senha">

            <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    </div>

<?php } else { ?>

        <div id="loginBox" style="width: 100%; padding: 20px; color: #ffffff; background-color: #4C4C4C; margin: 0 auto 10px auto; text-align: right; ">
            <span style="font-size: 15px; margin-right: 100px;">
                <?php echo"Bem vindo, " .$_SESSION['nome'];?> | <a href="logout.php" style="color: #FF5722;">Sair</a>
            </span>
        </div>

<?php } ?>