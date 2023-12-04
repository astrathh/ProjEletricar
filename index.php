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
                        <li class="nav-item"><a class="nav-link" href='./meusAnuncios.php'>Meus Anúncios</a></li>
                    </ul>
                </div>

<?php
    session_start();
    // Verificar se o usuário está logado
    if (isset($_SESSION['id_usuario'])) {
        $nome = $_SESSION['nome'];
        echo ("Bem-vindo, $nome!"); // Exibir saudação ou outras informações
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
                <?php
                    include_once("./View/anuncioFunc.php");
                    getAnuncios();
                ?>
            </div>
        </div>
    
    </section>
    
    <div>
        <h2 class="text-center mb-4">Categorias</h2>
        <div class="row", style="margin-left: 2vh; margin-right: 2vh;">
            <div class="col-md-3 mb-4"> 
                <div class="card Category-card", style="height: 15rem;">
                    <img src="./resources/images/gmw-ora-gt-1689103265298_v2_900x506.jpg" class="card-img-top" alt="Categoria Hatches", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Hatches</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="./resources/images/toyota-pickup-ev-concept.jpg" class="card-img-top" alt="Categoria Picapes", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Picapes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="./resources/images/d13cbf1a5ab7375eda435b76976f8f7d.jpg" class="card-img-top" alt="Categoria Sedans", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">Sedans</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card Category-card", style="height: 15rem;">
                    <img src="./resources/images/xpeng-g9-suv-eletrico-recarga-mais-rapida.jpg" class="card-img-top" alt="Categoria SUVs", height="auto", width="auto">
                    <div class="card-body">
                        <h5 class="card-title">SUVs</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    
    <footer class="bg-dark text-light text-center py-3">
    <div>
        <p>&copy; 2023 ELETRICAR. Todos os direitos reservados.</p>
        <p>Este site é dedicado à venda de carros elétricos. Consulte nossos <a href="#">Termos de Serviço</a> e <a href="#">Política de Privacidade</a>.</p>
    </div>
</footer>

    
</body>
</html>