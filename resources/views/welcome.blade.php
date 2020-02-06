<!DOCTYPE html>
<html>
<head>
  <title>Notícias Vasco</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>

</head>
<body>


<nav class="navbar fixed-top navbar-inverse navbar-expand-md navbar-light my-nav" id="menu1">
  <div class="container">
    <a class="navbar-brand h1 mb0" href="#"><img src="img/icone.png" width="100px"></a>
    <button id="min" onclick="Clique()"  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon navbar-light"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item mr-2">
            <a class="nav-link" href="#link-Slide">NOTÍCIAS</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#link-sobre">SOBRE</a>
          </li>
          <li class="nav-item mr-2">
            <a class="nav-link" href="#link-servicos">SERVIÇOS</a>
          </li>
          <li class="nav-item" id = "last-item">
            <a class="nav-link" href="#link-contatos">CONTATOS</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<div id="link-Slide" class="my-carousel carousel slide" data-ride="carousel" data-interval="2000">
  <ol class="carousel-indicators">
    <li class="active" data-target="#Slide" data-slide-to="0"></li>
    @for($i=1; $i < count($carousels); $i++)
    <li  data-target="#link-Slide" data-slide-to="{{$i}}"></li>
    @endfor
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Originals/{{$carousels[0]->nome_imagem}}" class="img-fluid d-block imagem-carousel">
      <div class="carousel-caption d-none d-md-block">
        <h1>{{$carousels[0]->titulo}}</h1>
        <p class="lead">{{$carousels[0]->subtitulo}}</p>
      </div>
    </div>
    @for($i=1; $i < count($carousels); $i++)
    <div class="carousel-item">
      <img src="img/Originals/{{$carousels[$i]->nome_imagem}}" style="width:1400px; height: 700px;" class="img-fluid d-block imagem-carousel">
      <div class="carousel-caption d-none d-md-block">
        <h1>{{$carousels[$i]->titulo}}</h1>
        <p class="lead">{{$carousels[$i]->subtitulo}}</p>
      </div>

    </div>
    @endfor
  

  </div>
  <a class="carousel-control-prev" href="#link-Slide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class = "sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#link-Slide" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class = "sr-only">Posterior</span>
  </a>
</div>

<div class="container my-5">
  <div id="cards" class="row justify-content-center">
    @foreach($cards as $card)
    <div class="col-sm-6 col-md-4 mb-5">
      <div class="card">
        <div class="card-body">
          <div class="text-center mb-3">
            <div class="mt-3 mb-2" style="color: #343a40;">
              <i id="um" class="fas fa-laptop display-4"></i>
            </div>
            
            <h5 class="card-title text-center">{{$card->titulo}}</h5>
          </div>
          <p class="card-text">{{$card->subtitulo}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div id = "link-servicos" class="jumbotron justify-content-center bg-light text-dark">
  <div class="row">
    <div class="col-sm-6 col-md-4 mt-3 my-5">
      <center><i id = "android" class="fab fa-android display-4 mb-5"></i></center>
      <h5>Desenvolvimento Android</h5>
    </div>
    <div class="col-sm-6 col-md-4 mt-3 my-5">
      <center><i id = "apple" class="fab fa-apple display-4 mb-5"></i></center>
      
      <h5>Desenvolvimento IOS</h5>
    </div>
    <div class="col-sm-6 col-md-4 mt-3 my-5">
      <center><i id = "desktop"class="fas fa-laptop display-4 mb-5"></i></center>
      <h5>Desenvolvimento Desktop</h5>
    </div>
  </div>
</div>
<div id="link-sobre" class="container curve my-5 bg-light">
  <div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
    </div>
  </div>
    
    <div class="tab-content mt-2" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container" style="white-space: pre-line">
          {{$textos[0]->texto}}
        </div>
        
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container" style="white-space: pre-line">
          {{$textos[1]->texto}}
        </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="container" style="white-space: pre-line">
          {{$textos[2]->texto}}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid bg-light" id="link-contatos">
  <div class="row">
    <div class="col-12  text-center my-5">
      <h1 class="display-4"><i class="fas fa-envelope-open">&nbsp Contate-nos</i></h1>
    </div>
  </div>
  <div class="row justify-content-center mb-5">
    <div class="col-sm-12 col-md-10 col-lg-8">
      @if(session()->has('message'))
        <div class="alert alert-success">
            <span id="message">{{ session()->get('message') }}</span>
        </div>
      @endif
      <form method="post" action="{{route('contato.store')}}">
        @csrf
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
          </div>
          <div class="form-group col-sm-6">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
          </div>
          <div class="form-group col-sm-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Endereço" required="">
          </div>
          <div class="form-group col-sm-6">
            <label for="estado">Estado</label>
            <select type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
              <option value=""></option>
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="cidade">Cidade</label>
            <select type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required></select>
          </div>
          <div class="form-group col-sm-12">
            <label for="estado">Mensagem</label>
            <textarea type="text" class="form-control" name="mensagem" name="mensagem" required> </textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a class="btn btn-secondary" data-toggle="popover" data-placement="right" data-trigger="focus" tabindex="0" role="button" title="Ajuda com o Formulário" data-content="Preencha o formulário para receber em seu email">Ajuda</a>
          </div>
        </div>
      </form>
    </div>  
  </div>

<div class="jumbotron jumbotron-fluid pad0">
  <div class="container">
    <div class="row">
      <div class="col-12 my-5">
        <blockquote class="blockquote text-center pad0">
          <p class="mb-0 pad0">Site desenvolvido por</p>
          <footer class="blockquote-footer pad0">
            Daniel Carrijo
            <cite title="Titulo">Desenvolvedor Web</cite>
          </footer>
        </blockquote>
        <p id="oo" class="text-white"></p>
      </div>
    </div>
  </div>
</div>


</body>
</html>

<script>
  
  document.querySelectorAll('a[href^="#link"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        var topOfElement = document.querySelector(this.getAttribute('href')).offsetTop - 95;
        window.scroll({ top: topOfElement, behavior: "smooth" });
    });
})

$(function() {
  $.getJSON('estados_cidades1.json', function (data) {
    var options = '';
    var cidades = ''
    $.each(data, function (key, val) {
          options += '<option value="' + val.sigla + '">' + val.sigla + '</option>';
          if (val.sigla === 'AC') {
              $.each(val.cidades, function(key, cidade) {
                  cidades += '<option value="' + cidade + '">' + encodeURIComponent(cidade) + '</option>';
              });
          }
    });

    $('#estado').html(options);
    $('#cidade').html(cidades);
    $("#estado").change(function () {        
          var selected = $(this). children("option:selected"). val();
          var cidades = "";
          $.each(data, function (key, val) {
            if(val.sigla === selected) {
              $.each(val.cidades, function(key, cidade) {
                  cidades += '<option value="' + cidade + '">' + cidade + '</option>';
              });
              return (false);
            }
          });
          $('#cidade').html(cidades);
    }).change();
  });
});



</script>