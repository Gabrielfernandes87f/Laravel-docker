<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- google fonts -->
        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">



        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
          integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>

          <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
        
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
        
            /* GLOBAL STYLES
            --------------------------------------------- */
            /* Padding below the footer and lighter body text */
        
            body {
              padding-top: 3rem;
              padding-bottom: 3rem;
              color: #5a5a5a;
            }
        
        
            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------- */
        
            /* Carousel base class */
            .carousel {
              margin-bottom: 4rem;
            }
        
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
              bottom: 3rem;
              z-index: 10;
            }
        
            /* Declare heights because of positioning of img element */
            .carousel-item {
              height: 32rem;
            }
        
            .carousel-item>img {
              position: absolute;
              top: 0;
              left: 0;
              min-width: 100%;
              height: 32rem;
            }
        
        
            /* MARKETING CONTENT
        -------------------------------------------------- */
        
            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
              margin-bottom: 1.5rem;
              text-align: center;
            }
        
            .marketing h2 {
              font-weight: 400;
            }
        
            .marketing .col-lg-4 p {
              margin-right: .75rem;
              margin-left: .75rem;
            }
        
        
            /* Featurettes
        ------------------------- */
        
            .featurette-divider {
              margin: 5rem 0;
              /* Space out the Bootstrap <hr> more */
            }
        
            /* Thin out the marketing headings */
            .featurette-heading {
              font-weight: 300;
              line-height: 1;
              letter-spacing: -.05rem;
            }
        
        
            /* RESPONSIVE CSS
        -------------------------------------------------- */
        
            @media (min-width: 40em) {
        
              /* Bump up size of carousel content */
              .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
              }
              
        
              .featurette-heading {
                font-size: 50px;
              }
            }
        
            @media (min-width: 62em) {
              .featurette-heading {
                margin-top: 7rem;
              }
            }
          </style>
      <link rel="stylesheet" href="/css/style.css">

    </head>
    
    <body>
      <header>
        <nav class="navbar navbar-expand-md  fixed-top navbar-light">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="img-fluid" src="/image/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav  mr-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Eventos</a>
            </li>
           
            @guest
            <li class="nav-item">
              <a class="nav-link" href="login">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Cadastrar</a>
            </li>
            @endguest
            
            @auth
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <a class="nav-link" onclick="event.preventDefault();this.closest('form').submit();" href="/">Sair</a>
              </form>
            </li>
            @endauth
            </ul>
          </div>
          </div>
        </nav>
      </header>
      
      <main class="container-fluid conteudo">
        @yield('content')
      </main>

      <footer>
          <p class="fixed-bottom aling-center">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
      </footer>
        
      <script src="/js/javascript.js"></script>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
