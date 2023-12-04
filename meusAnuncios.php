<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./View/css/form.css">
        <title>Inserir anuncio</title>
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
        <!-- função php para verificar se o usuário está logado, se ele não estiver, redireciona para login.php -->
        <div class="container mt-4">
            <?php
                session_start();
                if (!isset($_SESSION['id_usuario'])) {
                    echo '<script type="text/javascript">
                                window.onload = function () { 
                                    alert("Você precisa estar logado para ver seus anúncios!");
                                    window.location = "http://localhost/ProjEletricar/login.php";
                                    }
                                </script>';
                }
            ?>

            <h1 class="mt-4 mb-4">Meus Anúncios</h1>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Carro</th>
                            <th scope="col">Preco Ánuncio</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data publicação</th>
                            <th scope="col">Contato Vendedor</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Ano</th>
                            <th scope="col">kM rodada</th>
                            <th scope="col">Modificado</th>
                            <th scope="col">Localização</th>
                            <th scope="col">Aceita Troca</th>
                            <th scope="col">Final Placa</th>
                            <th scope="col">Capacidade Bateria (kW)</th>
                            <th scope="col">Ações</th>
                        </tr>
                 </thead>
                <tbody>
                    <?php
                        include_once("./View/anuncioFunc.php");
                        getMyAnunciosId($_SESSION['id_usuario']);
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>