<?php
include("../Model/Banco.php")
?>
<?php
    $banco = new Banco();
    $conexao = $banco->conexao;
    $id_anuncio=$_GET["txtId_anuncio"];
    $sql = "SELECT * FROM anuncio WHERE id_anuncio = " . "$id_anuncio;";
    $resultado = pg_query($conexao, $sql);

    $preco_anuncio=pg_fetch_result($resultado, 0, 1);
    $descricao=pg_fetch_result($resultado, 0, 2);
    $data_publicacao=pg_fetch_result($resultado, 0, 3);
    $contato_vendedor=pg_fetch_result($resultado, 0, 4);
    $cor=pg_fetch_result($resultado, 0, 5);
    $ano=pg_fetch_result($resultado, 0, 6);
    $km_rodada=pg_fetch_result($resultado, 0, 7);
    $modificado=pg_fetch_result($resultado, 0, 8);
    $localizacao=pg_fetch_result($resultado, 0, 9);
    $aceita_troca=pg_fetch_result($resultado, 0, 10);
    $final_placa=pg_fetch_result($resultado, 0, 11);
    $capacidade_bateria=pg_fetch_result($resultado, 0, 12);
    $usuario_id=pg_fetch_result($resultado, 0, 13);
    $carro_id=pg_fetch_result($resultado, 0, 14);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Mais informações</title>
</head>
<body class="dropdown" data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">ELETRICAR</a>
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
    <div class="container mt-5" >
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Anúncio #<?php echo $id_anuncio; ?></h5>
                <ul class="list-group">
                    <li class="list-group-item">Preço: <?php echo $preco_anuncio; ?></li>
                    <li class="list-group-item">Descrição: <?php echo $descricao; ?></li>
                    <li class="list-group-item">Data de Publicação: <?php echo $data_publicacao; ?></li>
                    <li class="list-group-item">Contato Vendedor: <?php echo $contato_vendedor; ?></li>
                    <li class="list-group-item">Cor: <?php echo $cor; ?></li>
                    <li class="list-group-item">Ano: <?php echo $ano; ?></li>
                    <li class="list-group-item">KM Rodada: <?php echo $km_rodada; ?></li>
                    <li class="list-group-item">Modificado: <?php echo $modificado; ?></li>
                    <li class="list-group-item">Localização: <?php echo $localizacao; ?></li>
                    <li class="list-group-item">Aceita Troca: <?php echo $aceita_troca; ?></li>
                    <li class="list-group-item">Final Placa: <?php echo $final_placa; ?></li>
                    <li class="list-group-item">Capacidade Bateria: <?php echo $capacidade_bateria; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional: Add Bootstrap JS library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
