<?php
include("./Model/Anuncio.php");
include("./Controller/AnuncioDAO.php");

// Criar uma instância do AnuncioDAO
$anuncioDAO = new AnuncioDAO();

// Listar os anúncios
$anuncios = $anuncioDAO->listar();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrrinho vrum vrum</title>
    <link rel="stylesheet" href="css/estiloIndex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="dropdown" data-bs-theme="dark"> <!-- Deixa o corpo todo com o tema dark-->
    

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--Barra de navegação - Faz com que a barra de navegação seja exibida apenas em telas grandes, em telas menores ela ficará como um menu oculto-->
            <div class="container"> <!--Conteiner responsivo do Bootstrap-->
                <a class="navbar-brand" href="#">ELETRICAR</a> <!-- Faz com que o elemento fique destacado na navBar-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Cria uma função onde poderá exibir ou ocultar um elemento quando pressionado.-->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> <!-- Div que ficará oculta e visível quando o botão acima for pressionado ou quando as telas forem menores-->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Vender</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/ProjEletricar/cadastro.html">Conta</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
        <h2>Anúncios Disponíveis</h2>

        <!-- Adicionar uma tabela para listar os anúncios -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data de Publicação</th>
                    <th>Contato do Vendedor</th>
                    <th>Cor</th>
                    <th>Ano</th>
                    <th>KM Rodada</th>
                    <th>Modificado</th>
                    <th>Localização</th>
                    <th>Aceita Troca</th>
                    <th>Final da Placa</th>
                    <th>Capacidade da Bateria</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($anuncios as $anuncio) : ?>
                    <tr>
                        <td><?= $anuncio->getIdAnuncio(); ?></td>
                        <td><?= $anuncio->getDescricao(); ?></td>
                        <td><?= $anuncio->getPrecoAnuncio(); ?></td>
                        <td><?= $anuncio->getDataPublicacao(); ?></td>
                        <td><?= $anuncio->getContatoVendedor(); ?></td>
                        <td><?= $anuncio->getCor(); ?></td>
                        <td><?= $anuncio->getAno(); ?></td>
                        <td><?= $anuncio->getKmRodada(); ?></td>
                        <td><?= $anuncio->getModificado(); ?></td>
                        <td><?= $anuncio->getLocalizacao(); ?></td>
                        <td><?= $anuncio->getAceitaTroca(); ?></td>
                        <td><?= $anuncio->getFinalPlaca(); ?></td>
                        <td><?= $anuncio->getCapacidadeBateria(); ?></td>
                        <!-- Adicione mais colunas conforme necessário -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Seu rodapé permanece inalterado -->

</body>
</html>

    
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; Notinha de Rodapé.</p>
    </footer>
    
</body>
</html>