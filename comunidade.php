<?php
session_start();
include 'conexao.php';

$nome = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/comunidade2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Comunidade</title>
</head>
<body>

<header class="navbar">
    <div class="estrutura-logo">
        <img src="img/logopadrao.png" alt="Logo" class="logo">
    </div>
    <span class="nav-usuario">Bem-vindo (a),<?php echo $nome ?></span>
    <div class="nav-links">
        <a href="home.php" class="nav-home">Início</a>
        <a href="sobreEmpresa.php" class="nav-home">Quem somos?</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </div>
</header>


<template class="reply-input-template">
    <div class="reply-input container">
    <img src="../img/productoOwnerBorges.jpeg" alt="" class="usr-img">
      <textarea class="cmnt-input" placeholder="Adicionar comentário..."></textarea>
      <button class="bu-primary">Enviar</button>
    </div>
  </template>
  <template class="comment-template">
    <div class="comment-wrp">
      <div class="comment container">
        <div class="c-score">
          <img src="img/icon-plus.svg" alt="plus" class="score-control score-plus">
          <p class="score-number">5</p>
          <img src="img/icon-minus.svg" alt="minus" class="score-control score-minus">
        </div>
        <div class="c-controls">
          <a  class="delete"><img src="img/icon-delete.svg" alt="" class="control-icon">Excluir</a>
          <a  class="edit"><img src="img/icon-edit.svg" alt="" class="control-icon">Editar</a>
          <a  class="reply"><img src="img/icon-reply.svg" alt="" class="control-icon">Responder</a>
        </div>
        <div class="c-user">
          <img src="img/productoOwnerBorges.jpeg" alt="" class="usr-img">
          <p class="usr-name">gabrielborges</p>
          <p class="cmnt-at">2 semanas atrás</p>    
        </div>
        <p class="c-text">
          <span class="reply-to"></span>
          <span class="c-body"></span>
        </p>
      </div><!--comment-->
      <div class="replies comments-wrp">
      </div><!--replies-->
    </div>
  </template>
<main class="main-content">
<h2 class="titulo">Sinta-se livre para relatar suas experiências aqui</h2>
  <div class="comment-section">

    <div class="comments-wrp">

    </div> <!--commentS wrapper-->
  <div class="reply-input container">
      <img src="img/productoOwnerBorges.jpeg" alt="" class="usr-img">
      <textarea class="cmnt-input" placeholder="Adicionar comentário..."></textarea>
      <button class="bu-primary">Enviar</button>
    </div> <!--reply input-->
  </div> <!--comment sectio-->
  
  <div class="modal-wrp invisible">
    <div class="modal container">
      <h3>Deletar comentário</h3>
      <p>Tem certeza de que deseja excluir este comentário? Isso removerá o comentário e não poderá ser desfeito</p>
      <button class="yes">Sim, deletar</button>
      <button class="no">Não, cancelar</button>
    </div>
  </div>
</main>
    <script src="app.js"></script>

<footer class="main_footer container2">
    <div class="content">
        <div class="colfooter">
            <h4 class="titleFooter">Menu</h4>
            <ul>
                <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
                <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                <li><a href="fale_conosco1" title="Fale Conosco">Fale Conosco</a></li>
            </ul>
        </div><!--Col Footer 1-->

        <div class="colfooter">
            <h4 class="titleFooter">Contato</h4>
            <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
            <p><i class="icon icon-phone"></i> 21 90000-0000</p>
            <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>
        </div><!--Col Footer 2-->

        <div class="colfooter">
            <h4 class="titleFooter">Redes Sociais</h4>
            <a href="#" class="botao"><span> <i class="icon icon-facebook">Início</i> </span></a>
            <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span>
                    <i class="icon icon-instagram"></i> </span></a>
            <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span> <i
                        class="icon icon-twitter"></i> </span></a>
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg"
                class="botao">Gmail<span> <i class="icon icon-pinterest"></i> </span></a>
        </div><!--Col Footer 3-->
        <div class="clear"></div>
    </div><!--Contant-->
    <div class="main_footer_copy">
        <p class="m-b-footer"> Positive Mind - 2024, todos os direitos reservados.</p>
        <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="#" title="Healther">Healther</a>
        </p>
    </div>
</footer>
</body>
</html>
