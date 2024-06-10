<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/sobre-a-empresa.css" />
  <link rel="icon" href=" ./img/icone-cerebro.png">
  <title>Sobre a Empresa</title>
</head>

<body>
  <header class="header" id="home">
    <div class="section__container header__container">
      <nav>
        <div class="nav__menu__btn" id="menu-btn">
          <span><i class="ri-menu-2-line"></i></span>
          <h4>Menu</h4>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Sobre</a></li>
          <li><a href="#travel">Nossas características</a></li>
          <li><a href="#discover">Contato</a></li>
          <li><a href="#client">Jornada de autoconhecimento</a></li>
          <li><a href="#faq">Dúvidas frequentes</a></li>
        </ul>
      </nav>
      <div class="header__image">
        <img src="assets/imagemCelular.png" alt="header" />
      </div>
      <div class="header__content">
        <h1>Conheça nossa<br />empresa</h1>
        <p class="section__description">
          Trabalhamos de forma colaborativa para garantir que nossos clientes recebam o melhor tratamento e suporte
          possível.
        </p>
        <div class="header__btns">
          <a href="#">
            <img src="assets/baixeGoogle.png" alt="google-play" />
          </a>
          <a href="#">
            <img src="assets/baixeApple.png" alt="app-store" />
          </a>
        </div>
      </div>
    </div>
  </header>

  <section class="section__container travel__container" id="travel">
    <div class="travel__image">
      <img src="assets/imagemCaracteristicas.png" alt="travel" />
    </div>
    <div class="travel__content">
      <h2 class="section__header">Principais características<br />da empresa</h2>
      <p class="section__description">
        Buscamos trazer inovação, missão, comprometimento e empatia.
      </p>
      <a href="https://youtu.be/Fs8Cv4e9TfQ" title="Descrição" target="_blank" class="btn">Nossas características</a>
      <img src="assets/imagemCaracteristicas2.png" alt="map" />
    </div>
  </section>

  <section class="section__container explore__container" id="explore">
    <div class="explore__content">
      <h2 class="section__header">
        Quem<br />nós somos?
      </h2>
      <a href="https://linktr.ee/gcsborges" title="Nos conheça melhor!" target="_blank" class="btn">Nos conheça
        melhor!</a>
    </div>
    <div class="explore__wrapper">
      <div class="explore__wrapper-inner">
        <img src="img/ProductOwnerGabrielBorges.JPG" alt="explore" />
        <img src="img/DesenvolvedoraMariane..JPG" alt="explore" />
        <img src="img/DesenvolvedorLeonardo..JPG" alt="explore" />
        <img src="img/DesenvolvedorLuis.JPG" alt="explore" />
      </div>
    </div>
  </section>

  <section class="section__container discover__container" id="discover">
    <h2 class="section__header">
      Nos contate através<br />de nosso e-mail.
    </h2>
    <div class="discover__grid">
      <div class="discover__destination">
        <div class="discover__destination__image">
          <img src="assets/imagemContato1.png" alt="destination" />
          <img src="assets/imagemContato2.png" alt="destination" />
        </div>
        <h4>Desejamos te conhecer e saber<br />as mudanças que você precisa!</h4>
        <p class="section__description">
          Sua preocupação, é a nossa.
        </p>
        <a href="mailto:positivemindhealther@gmail.com" class="btn">Escreva-nos um e-mail</a>
      </div>
      <div class="discover__plan">
        <div class="discover__plan__content">
          <h4>Entenda sobre nossos<br />termos de uso</h4>
          <p class="section__description">
            Ao acessar e utilizar nosso site, você concorda em cumprir e ficar vinculado aos seguintes termos de uso.
          </p>
          <a href="img/Termos.pdf" title="Termos de Uso" target="_blank" class="btn">Termos de uso</a>
          </div>
        <img src="assets/imagemTermos2.png" alt="plan" />
        
      </div>
      <div class="discover__guide">
        <div class="discover__guide__content">
          <h4>Obrigado por<br />fazer parte!</h4>
          <p class="section__description">
            Fundamos a Positive Mind com a visão de criar um espaço onde cada
            indivíduo possa encontrar apoio, compreensão e tratamento de qualidade para suas necessidades de saúde
            mental.
          </p>
          <a href="https://youtu.be/WW1vJSj46Qk" title="Te agradecemos." target="_blank" class="btn">Te agradecemos.</a>
        </div>
        <div class="discover__guide__image">
          <img src="assets/imagemGratidão.png" alt="guide" />
        </div>
      </div>
    </div>
  </section>

  <section class="section__container customer__container" id="client">
    <h2 class="section__header">
      Inspirando pessoas<br />a se conhecerem.
    </h2>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento1.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Informações confiáveis sobre saúde mental.
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento2.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Busca pelo autoconhecimento.
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento3.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Se sentir amado e amar.
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento4.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Quebrar preconceitos, com Positive Mind.
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento5.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Sua saúde é importante para nós.
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="customer__card">
            <img src="assets/imagemAutoconhecimento6.png" alt="customer" class="customer__image" />
            <div class="customer__card__content">
              Faça parte da nossa família.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container faq__container" id="faq">
    <h2 class="section__header">Dúvidas frequentes</h2>
    <div class="faq__grid">
      <div class="faq__card">
        <div class="faq__header">
          <h4>Como sei qual terapeuta é o mais adequado para mim?</h4>
          <span><i class="ri-arrow-down-s-line"></i></span>
        </div>
        <div class="faq__content">
          Nossa equipe está disponível para ajudar você a encontrar o terapeuta mais adequado às suas necessidades.
          Durante o processo de agendamento, você pode ler perfis de nossos profissionais, que incluem suas
          especialidades e abordagens terapêuticas.
        </div>
      </div>
      <div class="faq__card">
        <div class="faq__header">
          <h4>
            Quais tipos de informações sobre saúde mental posso encontrar no site?
          </h4>
          <span><i class="ri-arrow-down-s-line"></i></span>
        </div>
        <div class="faq__content">
          Nosso site oferece uma vasta gama de informações sobre saúde mental, incluindo artigos sobre condições como
          ansiedade, depressão, estresse, e mais. Também disponibilizamos recursos sobre estratégias de autocuidado,
          dicas de bem-estar e as últimas pesquisas na área de saúde mental.
        </div>
      </div>
      <div class="faq__card">
        <div class="faq__header">
          <h4>
            Como posso acessar artigos sobre saúde mental no site?
          </h4>
          <span><i class="ri-arrow-down-s-line"></i></span>
        </div>
        <div class="faq__content">
          Você pode acessar artigos sobre saúde mental navegando até a seção "Recursos" e ir até "Entenda sobre
          Transtornos" do nosso site. Lá,
          você encontrará uma variedade de artigos informativos sobre diferentes tópicos de saúde mental, incluindo
          ansiedade, depressão, técnicas de autocuidado e muito mais.
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="section__container footer__container">
      <h2 class="section__header">Positive Mind</h2>
      <div class="footer__socials">
        <a href="mailto:positivemindhealther@gmail.com"><i class="ri-mail-fill"></i></a>
        <a href="https://x.com/PositiveMindBR"><i class="ri-close-fill"></i></a>
        <a href="https://www.instagram.com/positive_mindbrasil/"><i class="ri-instagram-fill"></i></a>
      </div>
      <ul class="footer__links">
        <li><a href="#home">Início</a></li>
        <li><a href="#travel">Nossas características</a></li>
        <li><a href="#discover">Contato</a></li>
        <li><a href="#client">Autoconhecimento</a></li>
        <li><a href="#faq">Dúvidas frequentes</a></li>
      </ul>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Positive Mind.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="sobreEmpresa.js"></script>
</body>

</html>