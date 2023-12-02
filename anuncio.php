<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir anuncio</title>
</head>
<body>
    <h1>Inserir anuncio</h1>
    <form action="Controller\Controlador.php" method="post">
        Preço Anuncio: <input type="text" name="txtPreco_anuncio"><br>
        Descrição: <input type="text" name="txtDescricao"><br>
        Data Publicação: <input type="text" name="txtData_publicacao"><br>
        Contato Vendedor: <input type="text" name="txtContato_vendedor"><br>
        Cor: <input type="text" name="txtCor"><br>
        Ano: <input type="text" name="txtAno"><br>
        Km Rodada: <input type="text" name="txtKm_rodada"><br>
        Modificado: <input type="text" name="txtModificado"><br>
        Localização: <input type="text" name="txtLocalizacao"><br>
        Aceita Troca: <input type="text" name="txtAceita_troca"><br>
        Final Placa: <input type="text" name="txtFinal_placa"><br>
        Capacidade Bateria: <input type="text" name="txtCapacidade_bateria"><br>
        <input type="submit" name="b1" value="Inserir">
    </form>
</body>
</html>