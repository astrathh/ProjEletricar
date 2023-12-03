<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir anuncio</title>
</head>
<body>
    <!-- função php para verificar se o usuário está logado, se ele não estiver, redireciona para login.php -->
    <?php
        session_start();
        if (!isset($_SESSION['id_usuario'])) {
            echo '<script type="text/javascript">
                        window.onload = function () { 
                            alert("Você precisa estar logado para anunciar!");
                            window.location = "http://localhost/ProjEletricar/login.php";
                            }
                        </script>';
            exit();
        }
    ?>
    <h1>Inserir anuncio</h1>
    <!-- <form action="./Controller/Controlador.php" method="post" enctype="multipart/form-data"> -->
    <form action="./Controller/Controlador.php" method="post" enctype="multipart/form-data"> 
        <!-- para salvar várias imagem no banco de dados, é necessário utilizar o enctype="multipart/form-data" -->
        Carro: 
        <select name="txtCarro_id">
                <option value="">--Please choose an option--</option>
                <?php 
                    include_once("./View/anuncioFunc.php");
                    getCarrosOption();
                ?>
        </select><br>
            Preço Anuncio: <input type="text" name="txtPreco_anuncio" required><br>
            Descrição: <input type="text" name="txtDescricao"><br>
            Contato Vendedor: <input type="text" name="txtContato_vendedor" required><br>
            Cor: <input type="text" name="txtCor" required><br>
            Ano: <input type="text" name="txtAno" required><br>
            Km Rodada: <input type="text" name="txtKm_rodada" required><br>
            Modificado: <input type="checkbox" name="txtModificado"><br>
            Localização: <input type="text" name="txtLocalizacao" required><br>
            Aceita Troca: <input type="checkbox" name="txtAceita_troca"><br>
            Final Placa: <input type="text" name="txtFinal_placa" required><br>
            Capacidade Bateria: <input type="text" name="txtCapacidade_bateria" required><br>
            <input type="text" name="txtUsuario_id" value="
                <?php
                    $id_usuario = $_SESSION['id_usuario'];
                    echo $id_usuario;
                ?> " hidden readonly required><br>
            <input value="<?php echo(date('Y-m-d'))?>" name="txtData_publicacao"/><br>
            <input type="file" accept="image/*" multiple name="imagem[]" required/><br>
            <!-- passar imagens como parametro -->
        <input type="submit" name="b1" value="Inserir">
    </form>
</body>
</html>