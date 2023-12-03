<?php
class Banco

{
    public $conexao;
  
    //construtor
    function __construct()
    {
        //definições de host, database, usuário e senha
        $host = "localhost";
        $base = "webproj";
        // $porta = "5432";
        $porta = "5433";
        $usuario = "postgres";
        // $senha = "24968808Cc";
        $senha="postgresql";
        //conecta ao banco de dados
        $this->conexao = pg_connect("host=$host port=$porta dbname=$base user=$usuario password=$senha");
        
        if (!$this->conexao) {
            echo "Erro ao conectar ao banco de dados." . pg_last_error();
            exit;
        }
    }
}