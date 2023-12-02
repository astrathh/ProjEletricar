<?php  
include_once ("../Model/Usuario.php");
include_once ("../Model/Anuncio.php");

$botao = strtolower(trim($_POST['b1']));

switch ($botao) {
    case "gravar":
        header("Location: ../View/Gravar.php?txtNome=" . $_POST["txtNome"] . "&txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;

    case "login":
        header("Location: ../View/Login.php?txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;

    case "inserir":
        header("Location: ../View/Inserir.php?txtPreco_anuncio=" . $_POST["txtPreco_anuncio"] . "&txtDescricao=" . $_POST["txtDescricao"] . "&txtData_publicacao=" . $_POST["txtData_publicacao"] . "&txtContato_vendedor=" . $_POST["txtContato_vendedor"] . "&txtCor=" . $_POST["txtCor"] . "&txtAno=" . $_POST["txtAno"] . "&txtKm_rodada=" . $_POST["txtKm_rodada"] . "&txtModificado=" . $_POST["txtModificado"] . "&txtLocalizacao=" . $_POST["txtLocalizacao"] . "&txtAceita_troca=" . $_POST["txtAceita_troca"] . "&txtFinal_placa=" . $_POST["txtFinal_placa"] . "&txtCapacidade_bateria=" . $_POST["txtCapacidade_bateria"] . "&txtCarro_id=" . $_POST["txtCarro_id"]);
        break;
}
    
