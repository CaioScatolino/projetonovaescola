<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Nova Escola</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Nova Escola</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="historia.php">História</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/robotica.png" alt="Imagem de robótica">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Projeto Robótica</h1>
              <p>Participe do projeto robótica na escola!</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/carnaval.png" alt="Imagem Carnaval">
          <div class="container">
            <div class="carousel-caption">
              <h1>Vem aí o Carnaval da Escola</h1>
              <p>Todos os alunos estão autorizados a virem fantasiados!</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/ia.png" alt="Imagem de robótica">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Matrículas Abertas</h1>
              <p>Matrículas abertas para os alunos interessados em inteligência artificial (IA)</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="images/avatar_2.jpg" alt="Imagem Matheus" width=120px height=120px>
          <h2 class="fw-normal">Matheus Paiva</h2>
          <p>Aluno ganhador do prêmio robótica da escola!</p>
          <p><a class="btn btn-secondary" href="#">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/avatar_3.jpg" alt="Imagem Matheus" width=120px height=120px>
          <h2 class="fw-normal">Marcos José</h2>
          <p>Medalhista na olímpia de programação do IFSULDEMINAS.</p>
          <p><a class="btn btn-secondary" href="#">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/fem_avatar.png" alt="Imagem Rebecca" width=120px height=120px>
          <h2 class="fw-normal">Rebbeca Andrade</h2>
          <p>Ganhadora do prêmio Mulher de TI</p>
          <p><a class="btn btn-secondary" href="#">Mais detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Nova escola participa de projeto OLIP <span class="text-muted"> - Olímpiada de programação.</span></h2>
          <p class="lead">30 participantes foram inscritos na OLIP de 2023. Sucesso!!!</p>
          <p><a class="btn btn-secondary" href="#">Saiba mais &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img src="images/program_500x500.jpg" alt="Imagem programação" width=400px height=400px>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Projeto robótica na nova escola <span class="text-muted"> - Seja membro</span></h2>
          <p class="lead">O projeto robótica na escola tem o objetivo de formar alunos do 4º ao 9º ano, no mundo da robótica com arduíno.</p>
          <p><a class="btn btn-secondary" href="#">Saiba mais &raquo;</a></p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/robotica_500x500.jpg" alt="Imagem robotica" width=400px height=400px>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Concurso de redação foi um <span class="text-secundary"> Sucesso!</span></h2>
          <p class="lead">5 alunos foram classificados para o concurso de redação nacional.</p>

          <p><a class="btn btn-secondary" href="#">Saiba mais &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img src="images/redacao_500x500.jpg" alt="Imagem redação" width=400px height=400px>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Retornar ao topo</a></p>
      <p>&copy; 2017–2023 Nova Escola &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos de Uso</a></p>
    </footer>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>