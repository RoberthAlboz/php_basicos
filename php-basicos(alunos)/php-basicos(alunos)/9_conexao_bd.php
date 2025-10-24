<?php
    $servername = "127.0.0.1";
    $username = "root";
    $passaword = "Senai@118";
    $dbname = "exercício";

    try {
        // tenta criar uma conexão com o BD
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception("Falha na conexão ", $conn->connect_error);
        }
        echo "Conexão realizada com sucesso.";


    } catch (Exception $e) {
        // Exibe uma mensagem de erro amigável
        echo "Erro ao conectar ao banco de dados" . $conn->connect_error;;


    }
    ?>