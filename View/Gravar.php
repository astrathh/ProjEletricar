<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    include("../Controller/UsuarioDAO.php");
    $usuarioDAO = new UsuarioDAO();
    $usuario = new Usuario();

    $usuario->setNome($_GET["txtNome"]);
    $usuario->setEmail($_GET["txtEmail"]);
    $usuario->setSenha($_GET["txtSenha"]);

    $r = $usuarioDAO->gravar($usuario);
    ?>
</body>
</html>