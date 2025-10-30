<?php
// Importa o autoload do Composer para carregar as rotas
require __DIR__ . '/../vendor/autoload.php';

// Obtem a URL do navegador

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo $url;

if ($url =="/") {
  require  __DIR__ .'/../app/Views/home.php';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlexGarden</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="super-info-bg">
    <div class="super-info">
      <p>Seg / Sex - 08:00 às 18:00</p>
      <a href="tel:+551199999999">+55 11 99999-9999</a>
      <p>Rua das Palmeiras, 120 - São Paulo/SP</p>
    </div>
  </div>

  <header class="menu-bg">
    <div class="menu">
      <div class="menu-logo">
        <a href="#">FlexGarden</a>
      </div>
      <nav class="menu-nav">
        <ul>
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#produtos">Plantas</a></li>
          <li><a href="#preco">Planos</a></li>
          <li><a href="#qualidade">Sustentabilidade</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <h1 class="introducao">Beleza natural<br>dentro da sua casa 🌿</h1>

  <section class="sobre" id="sobre">
    <div class="sobre-info">
      <h1>Sobre</h1>
      <p>A FlexGarden nasceu com o objetivo de aproximar as pessoas da natureza, levando plantas de qualidade e fácil cuidado até a sua casa.</p>
      <p>Trabalhamos com produtores locais e materiais sustentáveis para garantir que cada planta tenha um impacto positivo no ambiente e no seu dia a dia.</p>
    </div>
    <div class="sobre-img">
      <img src="img/produtos-1.jpg" alt="Plantas da FlexGarden">
    </div>
    <div class="sobre-img">
      <img src="img/produtos-2.jpg" alt="Vasos decorativos">
    </div>
  </section>

  <section class="produtos" id="produtos">
    <h1>Nossas Plantas</h1>
    <div class="produtos-container">
      <div class="produtos-item purple">
        <h2>Suculentas</h2>
        <img src="img/produtos-3.jpg" alt="Suculentas">
      </div>
      <div class="produtos-item pink">
        <h2>Samambaias</h2>
        <img src="img/produtos-4.jpg" alt="Samambaia">
      </div>
      <div class="produtos-item blue">
        <h2>Vasos Decorativos</h2>
        <img src="img/produtos-5.jpg" alt="Vasos Decorativos">
      </div>
    </div>
  </section>

  <section class="preco" id="preco">
    <div class="preco-item">
      <h2>Essencial</h2>
      <span><sup>R$</sup>29</span>
      <ul>
        <li>1 Planta por mês</li>
        <li>Dicas de cuidado</li>
        <li>Frete reduzido</li>
        <li>Atendimento por e-mail</li>
      </ul>
      <a href="#">Assinar</a>
    </div>
    <div class="preco-item">
      <h2>Verde</h2>
      <span><sup>R$</sup>59</span>
      <ul>
        <li>2 Plantas por mês</li>
        <li>Frete grátis</li>
        <li>Descontos em acessórios</li>
        <li>Suporte WhatsApp</li>
      </ul>
      <a href="#">Assinar</a>
    </div>
    <div class="preco-item">
      <h2>Jardineiro</h2>
      <span><sup>R$</sup>99</span>
      <ul>
        <li>4 Plantas por mês</li>
        <li>Frete grátis</li>
        <li>Vasos decorativos exclusivos</li>
        <li>Atendimento personalizado</li>
      </ul>
      <a href="#">Assinar</a>
    </div>
  </section>

  <section class="qualidade" id="qualidade">
    <div class="qualidade-item">
      <h2>Orgânico</h2>
      <p>Trabalhamos com substratos naturais e sem químicos agressivos.</p>
    </div>
    <div class="qualidade-item">
      <h2>Local</h2>
      <p>Valorizamos produtores e artesãos da nossa região.</p>
    </div>
    <div class="qualidade-item">
      <h2>Durável</h2>
      <p>Produtos pensados para durar e reduzir o descarte.</p>
    </div>
    <div class="qualidade-item">
      <h2>Reciclável</h2>
      <p>Nossos vasos são feitos com materiais reciclados e biodegradáveis.</p>
    </div>
    <div class="qualidade-item">
      <h2>Natural</h2>
      <p>Todas as plantas são cultivadas de forma ética e responsável.</p>
    </div>
    <div class="qualidade-item">
      <h2>Sustentável</h2>
      <p>Cuidar da natureza é parte do nosso propósito.</p>
    </div>
  </section>

  <section class="newsletter" id="newsletter">
    <div class="newsletter-info">
      <h1>Newsletter</h1>
      <p>Receba dicas de jardinagem e promoções exclusivas</p>
    </div>
    <form class="newsletter-form">
      <input type="text" placeholder="Seu e-mail">
      <button type="submit">Assinar</button>
    </form>
  </section>

  <footer class="footer">
    <p>FlexGarden © Todos os direitos reservados.</p>
  </footer>

</body>

</html>