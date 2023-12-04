<?php
include("../Controller/AnuncioDAO.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
</head>
<body>
    <?php
        $anunDAO = new AnuncioDAO();
        $anuncio = new Anuncio();

        $anuncio->setId_anuncio($_GET["txtId_anuncio"]); 
        
        $r = $anunDAO->remover($anuncio);
        
    ?>
</body>
</html>