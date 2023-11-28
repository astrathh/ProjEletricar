<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    include("../Controller/UsuarioDAO.php");
    $usuario = new Usuario();
    $usuarioDAO = new UsuarioDAO();

    $usuario->setEmail($_GET["txtEmail"]);
    $usuario->setSenha($_GET["txtSenha"]);

    $r = $usuarioDAO->login($usuario->getEmail(), $usuario->getSenha());
    ?>
</body>
</html>