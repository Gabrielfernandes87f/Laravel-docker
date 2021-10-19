{{-- main 27-07 --}}
{{--}}
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
        <nav class="navbar navbar-expand-md fixed-top navbar-light">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="img-fluid" src="/image/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Criar Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cadastrar</a>
            </li>
            </ul>
          </div>
          </div>
        </nav>
      </header>
      
      <main>
        @yield('content')
      </main>

      <footer>
          <p>Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
      </footer>
        
      <script src="/js/javascript.js"></script>
  
    </body>
</html>



{{-- products 27-07--}}

{{--}}
@extends('layouts.main')
@section('title', 'produtos')
@section('content')


<h1>tela de produtos</h1>

@if($busca != '')
    <p>O usuário está buscando por: {{$busca}}</p>
@endif

@endsection





{{-- welcome  27-07 --}}

{{--}}
@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

  <h1>condições blade</h1>

  @if (10 > 5)
      <p>a condição é true</p>
  @else
      <p>a condição é false<p>
  @endif

  <p>{{ $names }}</p>
  @if ($names == "Gabriel")
      <p>O nome é {{$names}}</p>
  @else
      <p>O nome é Matheus</p>
  @endif

  @for($i = 0; $i < count($arr); $i++)
      <p>{{$arr[$i]}}</p>
  @endfor

  {{-- esse é um comentário blade, nao aparece no navegador --}}
{{--}}
@endsection

{{--protuto 27-07 --}}
{{--}}
@extends('layouts.main')
@section('title', 'produto')
@section('content')

@if($id != null)
    <p>Exibindo pruduto id : {{$id}}</p>
@endif
@endsection

{{-- contato 27-07--}}
{{--}}
@extends('layouts.main')
@section('title', 'produtos')
@section('content')


<h1>tela de produtos</h1>

</head>

<body>

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Carousel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mb-2 mb-md-0">
        <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>
</header>

<main>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

        <div class="container">
        <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

        <div class="container">
        <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <rect width="100%" height="100%" fill="#777" /></svg>

        <div class="container">
        <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
        vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
        magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
        mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg>

        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
        felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
        massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span>
        </h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
        commodo.</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
        height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>

    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
        commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
        height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>

    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
        commodo.</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
        height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>

    </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


@endsection


{{-- __fim__  --}}

{{-- web.php --}}


<?php
/*
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {

    $nome = "Gabriel";
    $arr = [1, 2, 3, 4, 5];

    
    return view('welcome',
     ['names' => $nome, 'arr' => $arr]);  // names é como to chamando na view. 
});
Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});





Route::get('/produtos_teste/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});

// http://127.0.0.1:8000/produtos?search=fome // como pesquisar no navegador

*/
/*
public function contato () {

return view('contato');
}



Route::get('/contato', [EventController::class, 'contato']);


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Gabriel";
        $arr = [1, 2, 3, 4, 5];

        return view('welcome',
         ['names' => $nome, 'arr' => $arr]);  // names é como to chamando na view. 
    }

    public function create () {

        return view('events.create');
    }
    public function produtos () {

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }
    public function contato () {
        return view('contact');
    }

    public function produtosteste ($id = 1) {
        return view('product', ['id' => $id]);
    }


}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');