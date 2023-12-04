<?php  
include_once ("../Model/Usuario.php");
include_once ("../Model/Anuncio.php");
include_once ("../Model/Banco.php");

$botao = strtolower(trim($_POST['b1']));

switch ($botao) {
    case "gravar":
        header("Location: ../View/Gravar.php?txtNome=" . $_POST["txtNome"] . "&txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;

    case "login":
        header("Location: ../View/Login.php?txtEmail=" . $_POST["txtEmail"] . "&txtSenha=" . $_POST["txtSenha"]);
        break;

    case "inserir":
        
    //lidar com o upload de imagens
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sqlNext = "SELECT nextval('anuncio_id_anuncio_seq') AS proximo_valor_serial;";
        $resultadoNext = pg_query($conexao, $sqlNext);
        $nextVal = pg_fetch_result($resultadoNext, 0, 0);
        $nextVal++;

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
            $caminho = $uploadDirectory . $new_file_name;
            
            // adicionar tabelas imagens
            $sqlImg = "INSERT INTO imagem (nome, caminho, anuncio) VALUES (" . "ok" . "', '" . $caminho . "', '" . $nextVal . "');'";
            pg_query($conexao, $sqlImg);
            $nextVal++;
        }

        // $sqlNext = "SELECT nextval('anuncio_id_anuncio_seq') AS proximo_valor_serial;";
        // $resultadoNext = pg_query($conexao, $sqlNext);
        // $nextVal = pg_fetch_result($resultadoNext, 0, 0);
        // $nextVal++;
        // for($i = 0 ; $i < count($array) ; $i++) {
        //     $sqlImg = "INSERT INTO imagem (nome, caminho, anuncio_id) values ('ok', " . $array[$i] . "," . $nextVal . ");";
        //     $nextVal++;
        // }


    }
        header("Location: ../View/Inserir.php?txtCarro_id=" . $_POST["txtCarro_id"] . "&txtPreco_anuncio=" . $_POST["txtPreco_anuncio"] . "&txtDescricao=" . $_POST["txtDescricao"] . "&txtData_publicacao=" . $_POST["txtData_publicacao"] . "&txtContato_vendedor=" . $_POST["txtContato_vendedor"] . "&txtCor=" . $_POST["txtCor"] . "&txtAno=" . $_POST["txtAno"] . "&txtKm_rodada=" . $_POST["txtKm_rodada"] . "&txtModificado=" . $_POST["txtModificado"] . "&txtLocalizacao=" . $_POST["txtLocalizacao"] . "&txtAceita_troca=" . $_POST["txtAceita_troca"] . "&txtFinal_placa=" . $_POST["txtFinal_placa"] . "&txtCapacidade_bateria=" . $_POST["txtCapacidade_bateria"] . "&txtUsuario_id=" . $_POST["txtUsuario_id"]);
        //  header("Location: ../View/Inserir.php?txtCarro_id=" . $_POST["txtCarro_id"] . "&txtPreco_anuncio=" . $_POST["txtPreco_anuncio"] . "&txtDescricao=" . $_POST["txtDescricao"] . "&txtData_publicacao=" . $_POST["txtData_publicacao"] . "&txtContato_vendedor=" . $_POST["txtContato_vendedor"] . "&txtCor=" . $_POST["txtCor"] . "&txtAno=" . $_POST["txtAno"] . "&txtKm_rodada=" . $_POST["txtKm_rodada"] . "&txtModificado=" . $_POST["txtModificado"] . "&txtLocalizacao=" . $_POST["txtLocalizacao"] . "&txtAceita_troca=" . $_POST["txtAceita_troca"] . "&txtFinal_placa=" . $_POST["txtFinal_placa"] . "&txtCapacidade_bateria=" . $_POST["txtCapacidade_bateria"] . "&txtUsuario_id=" . $_POST["txtUsuario_id"] . "&imagem=" . $_POST["files"]);
        break;

    case "listar":
        header("Location: ../View/Listar.php");
        break;

    case "alterar":
        header("Location: ../View/Alterar.php");
        break;

    case "remover":
        header("Location: ../View/Remover.php?txtId_anuncio=" . $_POST["txtId_anuncio"]);
        break;
    
    case "info":
        header("Location: ../View/MaisInfo.php?txtId_anuncio=" . $_POST["txtId_anuncio"]);
}
    
