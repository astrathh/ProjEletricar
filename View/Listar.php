    <?php
    include("../Controller/AnuncioDAO.php");
    include("../Model/Anuncio.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar anuncio</title>
</head>
<body>
    <?php
    $anunDAO = new AnuncioDAO();

    $tabela = $anunDAO->listar();
    ?>
</body>
</html>