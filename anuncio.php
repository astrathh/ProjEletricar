<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir anuncio</title>
</head>
<body>
    
    <h1>Inserir anuncio</h1>
    <form action="./Controller/Controlador.php" method="post">
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
            <input type="text" name="txtUsuario_id" required><br>
            <input value="<?php echo(date('Y-m-d'))?>" name="txtData_publicacao"/>
            <!-- <input type="file" accept="image/*" multiple/> -->
        <input type="submit" name="b1" value="Inserir">
    </form>
</body>
</html>