<?php  
include_once ("../Model/Usuario.php");

$botao = strtolower(trim($_POST['b1']));

switch ($botao) {
    case "gravar":
        header("Location: ../View/Gravar.php?txtNome=" . $_POST["txtNome"] . "&txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;

    case "login":
        header("Location: ../View/Login.php?txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;
}
    
