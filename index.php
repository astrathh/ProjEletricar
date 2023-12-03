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
                        <li class="nav-item"><a class="nav-link" href="./anuncio.php">Vender</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/ProjEletricar/cadastro.html">Conta</a></li>
                    </ul>
                </div>

<?php
    session_start();
    // Verificar se o usuário está logado
    if (isset($_SESSION['id_usuario'])) {
        $nome = $_SESSION['nome'];
        echo "Bem-vindo, $nome!"; // Exibir saudação ou outras informações
    } else {
        echo '
        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-dark" href="login.php">Entrar</a></li>
                <li class="nav-item"><a class="btn btn-dark" href="cadastro.html">Cadastrar-se</a></li>
            </ul>
        </div>';
        
    }
    ?>

        </div>
    </nav>

    
    <section class="py-5"> <!-- Aplicando Espaçamento na seleção-->
        <div class="container text-center">
            <h2>Encontre seu carro</h2>
            <form class="form-inline justify-content-center"> <!--Deixa o conteúdo centralizado e na mesma linha-->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Digite o nome do veículo..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
                  </div> <!-- Estiliza um botão, margens e o tipo. O tipo submit significa que ele envia um formulário-->
            </form>
        </div>
    </section>
    
    <section class="py-5"> <!-- Gera um espaço que deixa a página mais confortável para o usuário-->
        <div class="container">
            <h2 class="text-center mb-4">Destaques</h2> <!--Margem inferior e centralizando texto-->
            <div class="row"> <!-- Define uma linha para organizar conteúdos -->
                <div class="col-md-4 mb-4"> <!-- Determina  o comportamento das colunas em telas médias. Essa ocupará 4 das 12 colunas disponíveis no grid-->
                    <div class="card", style="height: 20rem;"> <!-- Conteiner estilo cartão-->
                        <img src="../src/peugeot.png" class="card-img-top" alt="Carro 1">
                        <div class="card-body">
                            <h5 class="card-title">Peugeot 208</h5>
                            <p class="card-text">Ano: 2023</p>
                            <p class="card-text">Preço: R$ 220.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4", id="card2">
                    <div class="card", style="height: 20rem;">
                        <img src="../src/kwidkkkkkkkkk.png" class="card-img-top" alt="Carro 2">
                        <div class="card-body">
                            <h5 class="card-title">Kwid Elétrico</h5>
                            <p class="card-text">Ano: 2023</p>
                            <p class="card-text">Preço: R$ 145.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4", id="card2">
                    <div class="card", style="height: 20rem;">
                        <img src="../src/seal.png" class="card-img-top" alt="Carro 3">
                        <div class="card-body">
                            <h5 class="card-title"> BYD Seal</h5>
                            <p class="card-text">Ano: 2023</p>
                            <p class="card-text">Preço R$: 330.000,00</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </section>
    
    <div>
        <h2 class="text-center mb-4">Categorias</h2>
        <div class="row", style="margin-left: 2vh; margin-right: 2vh;">
            <div class="col-md-3 mb-4"> 
                <div class="card Category-card", style="height: 15rem;">
                    <img src="../src/hero.png" class="card-img-top" alt="Categoria Hatches", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Hatches</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="../src/cybertryck.png" class="card-img-top" alt="Categoria Picapes", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Picapes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="../src/byd.png" class="card-img-top" alt="Categoria Sedans", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Sedans</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="../src/carro.png" class="card-img-top" alt="Categoria SUVs", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">SUVs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; Notinha de Rodapé.</p>
    </footer>
    
</body>
</html>