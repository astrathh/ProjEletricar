<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir anuncio</title>
</head>
<body>
    <?php
    include("../Controller/AnuncioDAO.php");
    $anuncioDAO = new AnuncioDAO();
    $anuncio = new Anuncio();

    $anuncio->setCarro_id($_GET["txtCarro_id"]); 
    $anuncio->setPreco_anuncio(intval($_GET["txtPreco_anuncio"]));
    $anuncio->setDescricao($_GET["txtDescricao"]);
    $anuncio->setData_publicacao($_GET["txtData_publicacao"]);
    $anuncio->setContato_vendedor($_GET["txtContato_vendedor"]);
    $anuncio->setCor($_GET["txtCor"]);
    $anuncio->setAno($_GET["txtAno"]);
    $anuncio->setKm_rodada($_GET["txtKm_rodada"]);
    $anuncio->setModificado($_GET["txtModificado"]);
    $anuncio->setLocalizacao($_GET["txtLocalizacao"]);
    $anuncio->setAceita_troca($_GET["txtAceita_troca"]);
    $anuncio->setFinal_placa($_GET["txtFinal_placa"]);
    $anuncio->setCapacidade_bateria($_GET["txtCapacidade_bateria"]);
    $anuncio->setUsuario_id($_GET["txtUsuario_id"]);
    $r = $anuncioDAO->inserir($anuncio);
    ?>
</body>
</html>