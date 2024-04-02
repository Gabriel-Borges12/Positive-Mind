<?php
// Inicia a sessão
session_start();

// Remove todas as variáveis de sessão
$_SESSION = array();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login ou outra página desejada após o logout
header("location: login.php");
exit;
?>
