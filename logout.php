<?php
session_start();
unset($_SESSION);
// Destroi a sessão
session_destroy();

session_abort();

// Redireciona para a página de login ou outra página desejada após o logout
header("location: login.php");
exit;
?>
