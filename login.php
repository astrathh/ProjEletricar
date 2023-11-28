<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./View/css/form.css">
    <title>Login</title>
</head>
<body class="dropdown" data-bs-theme="dark">
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--Barra de navegação - Faz com que a barra de navegação seja exibida apenas em telas grandes, em telas menores ela ficará como um menu oculto-->
            <div class="container"> <!--Conteiner responsivo do Bootstrap-->
                <a class="navbar-brand" href="index.php">ELETRICAR</a> <!-- Faz com que o elemento fique destacado na navBar-->
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
<br>
    <!-- página de login utilizando os dados cadastrados no banco de dados -->
    <div class="form mb-3">
        <div style="font-size: 40px; text-align: center;">Entre em sua conta</div>
        <form action="Controller/Controlador.php" method="post">
            <div class="form_input mb-4">
                <label>Email</label>
                <input type="email" name="txtEmail" class="form-control">
            </div>
            <div class="form_input mb-4">
                <label>Senha</label>
                <input type="password" name="txtSenha" class="form-control">
            </div>
            <br>
            <div class="form_input mb-4">
                <input type="submit" name="b1" value="Login" class="form-control">
            </div>
            <a href="cadastro.html">Não possui cadastro? Cadastre-se já!</a>
        </form>
    </div>

</body>
</html>