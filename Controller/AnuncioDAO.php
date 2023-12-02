<?php
include_once ("../Model/Anuncio.php");
include_once ("../Model/Banco.php");

class AnuncioDAO
{
    // função de inserir anuncio, que vincula o id do anuncio ao id do usuário logado

    public function inserir(Anuncio $anuncio)
    {
        // if (empty($email) || empty($senha) || empty($nome)) {
        //     return false;
        // }

        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "INSERT INTO anuncio (preco_anuncio, descricao, data_publicacao, contato_vendedor, cor, ano, km_rodada, modificado, localizacao, aceita_troca, final_placa, capacidade_bateria, usuario_id, carro_id) VALUES ('" . $anuncio->getPreco_anuncio() . "', '" . $anuncio->getDescricao() . "', '" . $anuncio->getData_publicacao() . "', '" . $anuncio->getContato_vendedor() . "', '" . $anuncio->getCor() . "', '" . $anuncio->getAno() . "', '" . $anuncio->getKm_rodada() . "', '" . $anuncio->getModificado() . "', '" . $anuncio->getLocalizacao() . "', '" . $anuncio->getAceita_troca() . "', '" . $anuncio->getFinal_placa() . "', '" . $anuncio->getCapacidade_bateria() . "', '" . $anuncio->getCapacidade_bateria() . "', '" . $_SESSION['id_usuario'] . "', '" . $anuncio->getCarro_id() . "')";
        $resultado = pg_query($conexao, $sql);
        $r = pg_affected_rows($resultado);

        pg_close($conexao);
        if ($resultado) {
            echo "Anúncio cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar anúncio!";
        }
    }
}