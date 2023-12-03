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
        
         // Adicione esta parte para lidar com o upload de imagens
    if(isset($_FILES['imagem'])){
        $uploadDirectory = '../resources/images/';

        // Loop através de cada imagem enviada
        foreach($_FILES['imagem']['tmp_name'] as $key=>$tmp_name){
            $file_name = $key . $_FILES['imagem']['name'][$key];
            $file_size = $_FILES['imagem']['size'][$key];
            $file_tmp = $_FILES['imagem']['tmp_name'][$key];
            $file_type = $_FILES['imagem']['type'][$key];

            // Gera um código hash único baseado no nome original e no timestamp
            $hash = md5($file_name . time());

            // Obtém a extensão do arquivo
            $file_ext = pathinfo($_FILES['imagem']['name'][$key], PATHINFO_EXTENSION);

            // Define o novo nome do arquivo com base no código hash
            $new_file_name = $hash . '.' . $file_ext;

            // Move o arquivo para o diretório escolhido com o novo nome
            move_uploaded_file($file_tmp, $uploadDirectory . $new_file_name);
        }
    }
        header("Location: ../View/Inserir.php?txtCarro_id=" . $_POST["txtCarro_id"] . "&txtPreco_anuncio=" . $_POST["txtPreco_anuncio"] . "&txtDescricao=" . $_POST["txtDescricao"] . "&txtData_publicacao=" . $_POST["txtData_publicacao"] . "&txtContato_vendedor=" . $_POST["txtContato_vendedor"] . "&txtCor=" . $_POST["txtCor"] . "&txtAno=" . $_POST["txtAno"] . "&txtKm_rodada=" . $_POST["txtKm_rodada"] . "&txtModificado=" . $_POST["txtModificado"] . "&txtLocalizacao=" . $_POST["txtLocalizacao"] . "&txtAceita_troca=" . $_POST["txtAceita_troca"] . "&txtFinal_placa=" . $_POST["txtFinal_placa"] . "&txtCapacidade_bateria=" . $_POST["txtCapacidade_bateria"] . "&txtUsuario_id=" . $_POST["txtUsuario_id"]);
        break;
}
    
