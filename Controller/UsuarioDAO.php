<?php
include_once ("../Model/Usuario.php");
include_once ("../Model/Banco.php");

class UsuarioDAO
{
    public function gravar(Usuario $usuario)
    {
        // if (empty($email) || empty($senha) || empty($nome)) {
        //     echo "Preencha todos os campos!";
        //     return false;
        // }

        $banco = new Banco();
        $conexao = $banco->conexao;
        
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('" . $usuario->getNome() . "', '" . $usuario->getEmail() . "', '" . $usuario->getSenha() . "')";
        $resultado = pg_query($conexao, $sql);
        $r = pg_affected_rows($resultado);
        
        pg_close($conexao);
        if ($resultado) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário!";
        }
    }

    public function login($email, $senha)
    {
        // Abre a sessão
        session_start();

        // Verifica se os campos estão vazios
        if (empty($email) || empty($senha)) {
            return false;
        }

        // Conecta ao banco de dados
        $banco = new Banco();
        $conexao = $banco->conexao;

        // Monta a consulta
        $sql = "SELECT id_usuario, nome, email, senha FROM usuario WHERE email = '" . $email . "' AND senha = '" . $senha . "'";

        // Executa a consulta
        $resultado = pg_query($conexao, $sql);

        // Verifica se a consulta retornou algum resultado
        if ($resultado) {
            // Obtém o resultado
            $usuario = pg_fetch_assoc($resultado);

            // Se o usuário existe, inicia a sessão
            if ($usuario) {
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];

                // retornar ao index
                header("Location: ../index.php");
                // Retorna true
                return true;
            }
        }

        // Se o usuário não existe, retorna false
        echo "Usuário não encontrado!";
        return false;
    }
}

