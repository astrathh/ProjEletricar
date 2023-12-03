<?php
include_once ("./Model/Avaliacao.php");
include_once ("./Model/Banco.php");

class AvaliacaoDAO
{
    public function inserirAnuncio(Avaliacao $avaliacao)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "INSERT INTO avaliacao (nota, texto, avaliador_id, anuncio_id) VALUES ('" . $avaliacao->getNota() . "', '" . $avaliacao->getTexto() . "', '" . $avaliacao->getAvaliador_id() . "', '" . $avaliacao->getAnuncio_id() . "')";
        $resultado = pg_query($conexao, $sql);
        $r = pg_affected_rows($resultado);

        pg_close($conexao);
        if ($resultado) {
            echo "Avaliação cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar avaliação!";
        }
    }
}
?>