<?php
// --------------------------------------------------
// INÍCIO DA SESSÃO E REDIRECIONAMENTO SE JÁ LOGADO
// --------------------------------------------------
session_start();
if (isset($_SESSION['usuario'])) {
  header('Location: home.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- =========================================
  🔧 Configurações Básicas da Página
  ========================================== -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- =========================================
  🎨 Estilos e Ícone da Página
  ========================================== -->
  <link rel="stylesheet" href="assets/css/style.css"> <!-- CSS personalizado -->
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon"> <!-- Favicon -->

  <!-- =========================================
  🧩 Bibliotecas e Frameworks
  ========================================== -->
  <!-- Bootstrap CSS e JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Font Awesome (ícones) -->
  <script src="https://kit.fontawesome.com/12a0142524.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- =========================================
  📝 Título e Estilo Rápido
  ========================================== -->
  <title>Sobre | SparTask</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
  </style>
</head>

<body>

  <!-- =========================================
  🔝 Cabeçalho Fixo
  ========================================== -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="logo">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">Sobre</a></li>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cadastre-se
          </button>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- Espaço para compensar o header fixo -->
  <br><br>

  <!-- =========================================
  📘 Seção: Sobre o Projeto
  ========================================== -->
  <section class="container my-5" id="sobre-projeto" style="max-width: 900px;">
    <div class="row align-items-center gy-4">
      <!-- Texto -->
      <div class="col-md-6">
        <h2 class="text-primary fw-bold mb-3">Sobre o Projeto</h2>
        <p style="font-size: medium;">
          O SparTask é uma plataforma inovadora, idealizada para conectar prestadores de serviços domésticos a clientes de forma rápida, segura e eficiente.
          Desenvolvido com foco em acessibilidade, usabilidade e tecnologia moderna, nasceu da necessidade de facilitar o dia a dia das pessoas, promovendo confiança e qualidade.
        </p>
        <p class="fs-6">
          Nosso time multidisciplinar trabalha constantemente para aprimorar a plataforma, garantindo a melhor experiência para todos os usuários.
        </p>
      </div>

      <!-- Imagem -->
      <div class="col-md-6 text-center">
        <img src="assets/img/logo.png" alt="Imagem representando o projeto SparTask" >
      </div>
    </div>
  </section>

  <!-- =========================================
  📅 Seção: Linha do Tempo do Projeto
  ========================================== -->
  <section class="timeline" aria-label="Linha do tempo da SparTask">
    <div class="timeline-item left" tabindex="0" aria-describedby="desc1">
      <h3><i class="fa fa-lightbulb me-2"></i> Ideia Inicial</h3>
      <p id="desc1">
        Em 2023, durante o curso técnico na ETEC do Maracanã, surgiu a ideia da SparTask, visando facilitar a contratação de serviços domésticos.
      </p>
    </div>
    <div class="timeline-item right" tabindex="0" aria-describedby="desc2">
      <h3><i class="fa fa-code me-2"></i> Desenvolvimento</h3>
      <p id="desc2">
        Durante meses, a equipe trabalhou no desenvolvimento da plataforma, focando em usabilidade, acessibilidade e segurança.
      </p>
    </div>
    <div class="timeline-item left" tabindex="0" aria-describedby="desc3">
      <h3><i class="fa fa-users me-2"></i> Formação da Equipe</h3>
      <p id="desc3">
        Montamos um time multidisciplinar com desenvolvedores, designers e gestores para garantir a qualidade do projeto.
      </p>
    </div>
    <div class="timeline-item right" tabindex="0" aria-describedby="desc4">
      <h3><i class="fa fa-rocket me-2"></i> Lançamento</h3>
      <p id="desc4">
        Em 2024, a SparTask foi apresentada como projeto final de TCC na ETEC, recebendo elogios e reconhecimento.
      </p>
    </div>
    <div class="timeline-item left" tabindex="0" aria-describedby="desc5">
      <h3><i class="fa fa-star me-2"></i> Missão</h3>
      <p id="desc5">
        Facilitar a vida das pessoas conectando prestadores de serviços domésticos confiáveis e clientes de forma simples e segura.
      </p>
    </div>
  </section>

  <!-- =========================================
  👥 Seção: Equipe do Projeto
  ========================================== -->
  <section class="team-section">
    <h2>Nossa Equipe</h2>
    <div class="row g-4 justify-content-center">

      <!-- Membro 1 -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card team-member-card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Ryan Bomfim</h5>
            <p class="card-text">Gestor de equipe e Desenvolvedor Full-Stack</p>
            <div>
              <a href="https://linkedin.com/in/ryanbomfim" target="_blank" rel="noopener" aria-label="LinkedIn Ryan">
                <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="https://github.com/ryanbomfim" target="_blank" rel="noopener" aria-label="GitHub Ryan">
                <i class="fa-brands fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Outros membros (exemplos fictícios) -->


      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card team-member-card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Danilo Nieba</h5>
            <p class="card-text">Líder de Produção para Documentação</p>
            <div>
              <a href="#" class="text-primary me-3" aria-label="LinkedIn Ana"><i class="fa-brands fa-linkedin"></i></a>
              <a href="#" aria-label="GitHub Ana"><i class="fa-brands fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================
  📢 Rodapé (Footer)
  ========================================== -->
  <section class="finaly">
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">SparTask &copy; 2025</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">
          <img class="bi me-2" width="40" height="40" src="assets/img/logo.png">
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">
              <i class="fa fa-instagram" style="font-size: 30px;"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">
              <i class="fa fa-whatsapp" style="font-size: 30px;"></i></a></li>
        </ul>
      </footer>
    </div>
  </section>

  <!-- =========================================
  📜 Script JS personalizado
  ========================================== -->
  <script src="assets/js/script.js" defer></script>

</body>

</html>
