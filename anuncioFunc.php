<?php
    include_once ("./Model/Banco.php");
    
    function getCarrosOption() {
        $banco = new Banco();
        $conexao = $banco->conexao;
        $sql = "SELECT id_carro, modelo FROM carro;";
        $resultado = pg_query($conexao, $sql);
        $id_carro = 0;
        $modelo_carro = "";
        $numrows = pg_numrows($resultado);
        for( $i = 0; $i < $numrows; $i++) {
            $id_carro = pg_fetch_result($resultado, $i, 0);
            $modelo_carro=pg_fetch_result($resultado, $i, 1);
            echo ("<option value=" . $id_carro . ">" . $modelo_carro . "</option>");
        }
    }
?>