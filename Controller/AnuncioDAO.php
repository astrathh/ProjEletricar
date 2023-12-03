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
        // echo('modificado: ' . $anuncio->getModificado());
        // echo('modificado boolval: ' . $anuncio->setModificado(boolval($anuncio->getModificado())));
        $anuncio->setAceita_troca(boolval($anuncio->getAceita_troca()));
        $anuncio->setModificado(boolval($anuncio->getModificado()));

        if($anuncio->getModificado()!="on")
            $anuncio->setModificado('false');
        else
            $anuncio->setModificado('true');
        if($anuncio->getAceita_troca()!="on")
            $anuncio->setAceita_troca('false');
        else
            $anuncio->setAceita_troca('true');
        
        $sql = "INSERT INTO anuncio (carro_id, preco_anuncio, descricao, data_publicacao, contato_vendedor, cor, ano, km_rodada, modificado, localizacao, aceita_troca, final_placa, capacidade_bateria, usuario_id) VALUES ('" . $anuncio->getCarro_id() . "', '" . $anuncio->getPreco_anuncio() . "', '" . $anuncio->getDescricao() . "', '" . $anuncio->getData_publicacao() . "', '" . $anuncio->getContato_vendedor() . "', '" . $anuncio->getCor() . "', '" . $anuncio->getAno() . "', '" . $anuncio->getKm_rodada() . "', '" . $anuncio->getModificado() . "', '" . $anuncio->getLocalizacao() . "', '" . $anuncio->getAceita_troca() . "', '" . $anuncio->getFinal_placa() . "', '" . $anuncio->getCapacidade_bateria() . "', '" . $anuncio->getUsuario_id() . "')";
        $resultado = pg_query($conexao, $sql);
        $r = pg_affected_rows($resultado);

        pg_close($conexao);
        if ($resultado) {
            ?>
                <script type="text/javascript">
                    confirm("Anúncio cadastrado com sucesso!");
                    window.location.href = "../index.php";
                    
                </script>
            <?php
        } else {
            echo "Erro ao cadastrar anúncio!";
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

}