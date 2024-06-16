<?php
include_once ("../Model/Anuncio.php");
include_once ("../Model/Banco.php");

class AnuncioDAO
{

    public function inserir(Anuncio $anuncio)
    {
        // if (empty($email) || empty($senha) || empty($nome)) {
        //     return false;
        // }

        $banco = new Banco();
        $conexao = $banco->conexao;
        
        // função intval para converter o valor para inteiro
        $anuncio->setPreco_anuncio(intval($anuncio->getPreco_anuncio()));
        
        // função boolval para converter o valor para booleano
        $anuncio->setAceita_troca(boolval($anuncio->getAceita_troca()));
        $anuncio->setModificado(boolval($anuncio->getModificado()));

        // if else para verificar se o checkbox está marcado ou não, utlizando valores "on" e "off"
        if($anuncio->getModificado()!="on")
            $anuncio->setModificado('false');
        else
            $anuncio->setModificado('true');
        if($anuncio->getAceita_troca()!="on")
            $anuncio->setAceita_troca('false');
        else
            $anuncio->setAceita_troca('true');
            
            // $sqlNext = "SELECT nextval('anuncio_id_anuncio_seq') AS proximo_valor_serial;";
            // $resultadoNext = pg_query($conexao, $sqlNext);
            // $nextVal = pg_fetch_result($resultadoNext, 0, 0);
            // $nextVal++;
            // for($i = 0 ; $i < count($array) ; $i++) {
            //     $sqlImg = "INSERT INTO imagem (nome, caminho, anuncio_id) values ('ok', " . $array[$i] . "," . $nextVal . ");";
            //     $nextVal++;
            // }


        $sql = "INSERT INTO anuncio (carro_id, preco_anuncio, descricao, data_publicacao, contato_vendedor, cor, ano, km_rodada, modificado, localizacao, aceita_troca, final_placa, capacidade_bateria, usuario_id) VALUES ('" . $anuncio->getCarro_id() . "', '" . $anuncio->getPreco_anuncio() . "', '" . $anuncio->getDescricao() . "', '" . $anuncio->getData_publicacao() . "', '" . $anuncio->getContato_vendedor() . "', '" . $anuncio->getCor() . "', '" . $anuncio->getAno() . "', '" . $anuncio->getKm_rodada() . "', '" . $anuncio->getModificado() . "', '" . $anuncio->getLocalizacao() . "', '" . $anuncio->getAceita_troca() . "', '" . $anuncio->getFinal_placa() . "', '" . $anuncio->getCapacidade_bateria() . "', '" . $anuncio->getUsuario_id() . "')";
        $resultado = pg_query($conexao, $sql);
        $r = pg_affected_rows($resultado);
        
        
        pg_close($conexao);
        //verifica resultado
        if ($resultado) {
            ?>
                <script type="text/javascript">
                    confirm("Anúncio cadastrado com sucesso!");
                    window.location.href = "../index.php";
                    
                </script>
            <?php
        } else {
            ?>
                <script type="text/javascript">
                    confirm("Erro ao cadastrar anúncio!");
                    window.location.href = "../index.php";
                    
                </script>
            <?php
        }
    }

    public function listar()
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "SELECT * FROM anuncio";
        $resultado = pg_query($conexao, $sql);

        pg_close($conexao);
        return $resultado;
    }

    public function remover($anuncio)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        // Iniciar uma transação
        pg_query($conexao, "BEGIN");

        try {
            // Primeira consulta - Exclusão do anúncio
            $sql1 = "DELETE FROM anuncio WHERE id_anuncio = " . $anuncio->getId_anuncio();
            $resultado1 = pg_query($conexao, $sql1);

            // Verificar se a primeira consulta foi bem-sucedida
            if (!$resultado1) {
                throw new Exception("Erro na consulta de exclusão de anúncio: " . pg_last_error($conexao));
            }

            //deletar imagem no projeto
            $sqlD = "SELECT caminho FROM imagem WHERE anuncio_id = " . $anuncio->getId_anuncio();
            $resultadoD = pg_query($conexao, $sqlD);
            $numrows = pg_affected_rows($resultadoD);
            for( $i = 0; $i < $numrows; $i++) {
                $caminho=pg_fetch_result($resultadoD, $i, 0);

                // Verifica se o arquivo existe antes de tentar deletar
                if (file_exists($caminho)) {
                    // Tenta deletar o arquivo
                    if (unlink($caminho)) {
                        echo 'Imagem deletada com sucesso.';
                    } else {
                        echo 'Erro ao deletar a imagem.';
                    }
                } else {
                    echo 'O arquivo não existe.';
                }
            }

            // Segunda consulta - Exclusão de outras tabelas relacionadas (se necessário)
            $sql2 = "DELETE FROM imagem WHERE anuncio_id = " . $anuncio->getId_anuncio();
            $resultado2 = pg_query($conexao, $sql2);


            // Verificar se a segunda consulta foi bem-sucedida
            if (!$resultado2) {
                throw new Exception("Erro na consulta de exclusão de outra tabela: " . pg_last_error($conexao));
            }

            // Commit da transação se todas as consultas foram bem-sucedidas
            pg_query($conexao, "COMMIT");
            
            // Fechar a conexão
            pg_close($conexao);

            // Mensagem de sucesso
            ?>
                <script type="text/javascript">
                    confirm("Anúncio removido com sucesso!");
                    window.location.href = "../meusAnuncios.php";
                </script>
            <?php
        } catch (Exception $e) {
            // Rollback da transação em caso de erro
            pg_query($conexao, "ROLLBACK");

            // Fechar a conexão
            pg_close($conexao);

            // Mensagem de erro
            ?>
                <script type="text/javascript">
                    confirm("Erro ao remover anúncio: <?= $e->getMessage() ?>");
                    window.location.href = "../meusAnuncios.php";
                </script>
            <?php
        }
    }


    public function alterar(Anuncio $anuncio)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "UPDATE anuncio SET preco_anuncio = '" . $anuncio->getPreco_anuncio() . "', descricao = '" . $anuncio->getDescricao() . "', data_publicacao = '" . $anuncio->getData_publicacao() . "', contato_vendedor = '" . $anuncio->getContato_vendedor() . "', cor = '" . $anuncio->getCor() . "', ano = '" . $anuncio->getAno() . "', km_rodada = '" . $anuncio->getKm_rodada() . "', modificado = '" . $anuncio->getModificado() . "', localizacao = '" . $anuncio->getLocalizacao() . "', aceita_troca = '" . $anuncio->getAceita_troca() . "', final_placa = '" . $anuncio->getFinal_placa() . "', capacidade_bateria = '" . $anuncio->getCapacidade_bateria() . "' WHERE id_anuncio = " . $anuncio->getId_anuncio();
        $resultado = pg_query($conexao, $sql);

        pg_close($conexao);
        return $resultado;
    }
}