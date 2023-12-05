<?php
    include_once ("./Model/Banco.php");
    
    function getCarrosOption() {
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sql = "SELECT id_carro, modelo FROM carro;";
        $resultado = pg_query($conexao, $sql);
        $id_carro = 0;
        $modelo_carro = "";
        $numrows = pg_affected_rows ($resultado);
        for( $i = 0; $i < $numrows; $i++) {
            $id_carro = pg_fetch_result($resultado, $i, 0);
            $modelo_carro=pg_fetch_result($resultado, $i, 1);
            echo ("<option value=" . $id_carro . ">" . $modelo_carro . "</option>");
        }
    }

    function getCarrosOptionId($id_usuario) {
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sql = "SELECT id_carro, modelo FROM carro WHERE id_usuario = " . "$id_usuario;";
        $resultado = pg_query($conexao, $sql);
        $id_carro = 0;
        $modelo_carro = "";
        $numrows = pg_affected_rows($resultado);
        for( $i = 0; $i < $numrows; $i++) {
            $id_carro = pg_fetch_result($resultado, $i, 0);
            $modelo_carro=pg_fetch_result($resultado, $i, 1);
            echo ("<option value=" . $id_carro . ">" . $modelo_carro . "</option>");
        }
    }


    function getMyAnunciosId($id_usuario) {
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sql = "SELECT * FROM anuncio WHERE usuario_id = " . "$id_usuario;";
        $resultado = pg_query($conexao, $sql);
        $id_anuncio=0;
        $preco_anuncio=0.0;
        $descricao="";
        $data_publicacao="";
        $contato_vendedor="";
        $cor="";
        $ano="";
        $km_rodada=0;
        $modificado="";
        $localizacao="";
        $aceita_troca="";
        $final_placa="";
        $capacidade_bateria="";
        $usuario_id=0;
        $carro_id=0;
        
       
        $numrows = pg_affected_rows($resultado);
        echo("");
        echo("<div class='titulo'>Você possui $numrows Anuncios:");
        echo("");
        for( $i = 0; $i < $numrows; $i++) {
            $id_anuncio=pg_fetch_result($resultado, $i, 0);
            $preco_anuncio=pg_fetch_result($resultado, $i, 1);
            $descricao=pg_fetch_result($resultado, $i, 2);
            $data_publicacao=pg_fetch_result($resultado, $i, 3);
            $contato_vendedor=pg_fetch_result($resultado, $i, 4);
            $cor=pg_fetch_result($resultado, $i, 5);
            $ano=pg_fetch_result($resultado, $i, 6);
            $km_rodada=pg_fetch_result($resultado, $i, 7);
            $modificado=pg_fetch_result($resultado, $i, 8);
            $localizacao=pg_fetch_result($resultado, $i, 9);
            $aceita_troca=pg_fetch_result($resultado, $i, 10);
            $final_placa=pg_fetch_result($resultado, $i, 11);
            $capacidade_bateria=pg_fetch_result($resultado, $i, 12);
            $usuario_id=pg_fetch_result($resultado, $i, 13);
            $carro_id=pg_fetch_result($resultado, $i, 14);
            // $modelo_carro=pg_fetch_result($resultado, $i, 15);
            // echo("<tr> <td>ok</td> </tr>");
            $sqlAux="SELECT marca, modelo FROM carro WHERE id_carro = $carro_id;";
            $resultadoAux = pg_query($conexao, $sqlAux);
            $MarcaModelo= pg_fetch_result($resultadoAux, 0, 0) . " " . pg_fetch_result($resultadoAux, 0, 1);

            echo(
                "<tr>
                    <td>$MarcaModelo</td>
                    <td>$preco_anuncio</td>
                    <td>$descricao</td>
                    <td>$data_publicacao</td>
                    <td>$contato_vendedor</td>
                    <td>$cor</td>
                    <td>$ano</td>
                    <td>$km_rodada</td>
                    <td>$modificado</td>
                    <td>$localizacao</td>
                    <td>$aceita_troca</td>
                    <td>$final_placa</td>
                    <td>$capacidade_bateria</td>
                     <td>
                        <form action='./Controller/Controlador.php' method='post' >
                        <input type='text' value='$id_anuncio' name='txtId_anuncio' hidden readonly required/>
                        <input type='submit' name='b1' value='Remover' class='btn btn-primary'>
                        <input type='submit' name='b1' value='Alterar' class='btn btn-primary'>
                        </form>
                    </td>
                </tr>"
            );
        }
    }

    function getAnunciosCard() {
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sql = "SELECT * FROM anuncio";
        $resultado = pg_query($conexao, $sql);
        $id_anuncio=0;
        $preco_anuncio=0.0;
        $ano="";
        $carro_id=0;

        $numrows = pg_affected_rows($resultado);
        for( $i = 0; $i < $numrows; $i++) {
            $id_anuncio=pg_fetch_result($resultado, $i, 0);
            $preco_anuncio=pg_fetch_result($resultado, $i, 1);
            $ano=pg_fetch_result($resultado, $i, 6);
            $carro_id=pg_fetch_result($resultado, $i, 14);
            // echo("<tr> <td>ok</td> </tr>");
            $sqlAux="SELECT marca, modelo FROM carro WHERE id_carro = $carro_id;";
            $resultadoAux = pg_query($conexao, $sqlAux);
            $MarcaModelo= pg_fetch_result($resultadoAux, 0, 0) . " " . pg_fetch_result($resultadoAux, 0, 1);
            $sql = "SELECT caminho FROM imagem WHERE anuncio_id = " . "$id_anuncio;";
            $resImagem = pg_query($conexao, $sql);
            $caminho = pg_fetch_result($resImagem, 0, 0);
            $caminho = substr($caminho, 1);
            echo(
                "<div style='width: 30%; margin: 1rem; display: flex; flex-direction: column; border: 1px solid #808080; border-radius: 8px; padding: 1rem;'>
                <div style='height: 20rem; overflow: hidden;'>
                    <img src='$caminho' class='img-fluid' alt='Carro 1' style='object-fit: cover; width: 100%; height: 100%;'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$MarcaModelo</h5>
                    <p class='card-text'>Ano: $ano</p>
                    <p class='card-text'>Preço: R$ $preco_anuncio</p>
                    <form action='./Controller/Controlador.php' method='post' >
                        <input type='text' value='$id_anuncio' name='txtId_anuncio' hidden readonly required/>
                        <input type='submit' name='b1' value='Info' class='btn btn-primary'>
                    </form>
                </div>
            </div>
            ");
        // $sql = "SELECT caminho FROM imagem WHERE anuncio_id = " . "$id_anuncio;";
        //     $resImagem = pg_query($conexao, $sql);
        //     $caminho = pg_fetch_result($resImagem, 0, 0);
        }
    }

    
?>