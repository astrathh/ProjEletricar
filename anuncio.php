<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./View/css/form.css">
    <title>Inserir anúncio</title>
</head>
<body class="dropdown" data-bs-theme="dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">ELETRICAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                <li class="nav-item"><a class="nav-link" href="./anuncio.php">Vender</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/ProjEletricar/cadastro.html">Conta</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
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
    <h1>Inserir anúncio</h1>
    <form action="./Controller/Controlador.php" method="post" enctype="multipart/form-data" class="mt-4">
        <div class="mb-3">
            <label for="txtCarro_id" class="form-label">Carro:</label>
            <select class="form-select" name="txtCarro_id" required>
                <option value="">--Escolha uma opção--</option>
                <?php
                    include_once("./View/anuncioFunc.php");
                    getCarrosOption();
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="txtPreco_anuncio" class="form-label">Preço do Anúncio:</label>
            <input type="number" class="form-control" name="txtPreco_anuncio" required maxlength="11" min="1">
        </div>
        <div class="mb-3">
            <label for="txtDescricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="txtDescricao" maxlength="500">
        </div>
        <div class="mb-3">
            <label for="txtContato_vendedor" class="form-label">Contato Vendedor:</label>
            <input type="text" class="form-control" name="txtContato_vendedor" required maxlength="300">
        </div>
        <div class="mb-3">
            <label for="txtCor" class="form-label">Cor:</label>
            <input type="text" class="form-control" name="txtCor" required>
        </div>
        <div class="mb-3">
            <label for="txtAno" class="form-label">Ano:</label>
            <input type="number" class="form-control" name="txtAno" required maxlength="4" minlength="4" min="1888">
        </div>
        <div class="mb-3">
            <label for="txtKm_rodada" class="form-label">Km Rodada:</label>
            <input type="text" class="form-control" name="txtKm_rodada" required min="0" minlength="1" maxlength="9">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="txtModificado">
            <label class="form-check-label" for="txtModificado">Modificado</label>
        </div>
        <div class="mb-3">
            <label for="txtLocalizacao" class="form-label">Localização:</label>
            <input type="text" class="form-control" name="txtLocalizacao" required maxlength="300">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="txtAceita_troca">
            <label class="form-check-label" for="txtAceita_troca">Aceita Troca</label>
        </div>
        <div class="mb-3">
            <label for="txtFinal_placa" class="form-label">Final Placa:</label>
            <input type="number" class="form-control" name="txtFinal_placa" required maxlength="2" minlength="2" min="0" max="99">
        </div>
        <div class="mb-3">
            <label for="txtCapacidade_bateria" class="form-label">Capacidade Bateria:</label>
            <input type="text" class="form-control" name="txtCapacidade_bateria" required min="0" minlength="1" maxlength="6">
        </div>
	<input type="text" name="txtUsuario_id" value="
                <?php
                    $id_usuario = $_SESSION['id_usuario'];
                    echo $id_usuario;
                ?> " hidden readonly required><br>
            <input value="<?php echo(date('Y-m-d'))?>" name="txtData_publicacao" hidden readonly required/><br>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagens:</label>
            <input type="file" class="form-control" accept="image/*" multiple name="imagem" required>
        </div>

        <input type="submit" name="b1" value="Inserir" class="btn btn-primary">
        <br><br>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
