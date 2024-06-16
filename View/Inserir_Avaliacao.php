<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("../Controller/AvaliacaoDAO.php");
    $avaliacaoDAO = new AvaliacaoDAO();
    $avaliacao = new Avaliacao();

    $avaliacao->setNota($_GET["txtNota"]);
    $avaliacao->setTexto($_GET["txtTexto"]);
    $avaliacao->setAvaliador_id($_GET["txtAvaliador_id"]);
    $avaliacao->setAnuncio_id($_GET["txtAnuncio_id"]);

    $r = $avaliacaoDAO->inserirAnuncio($avaliacao);
    ?>
</body>
</html>