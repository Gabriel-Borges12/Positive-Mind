
<?php
session_start();
include 'conexao.php';

// Verifica se o usuário já está logado
if(isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"] == true){

} else {
    header("location: index.php");
}

$nome = $_SESSION['usuario_nome'];
?>