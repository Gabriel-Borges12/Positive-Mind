<?php
// Conecta ao banco de dados
$conn = new mysqli("localhost", "root", "", "bd_positivemind");

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

?>