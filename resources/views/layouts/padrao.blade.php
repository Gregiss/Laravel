
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
        <title>@yield('titulo')</title>

        <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      *{
        transition: 0.1s all;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .btn-primary{
        background: #9147ff !important;
        border: 1px solid #9147ff !important;
      }

      .dark{
        background: #151515 !important;
      }

      .dark .table{
        box-shadow: 1px 1px 1px transparent !important;
        border: 1px solid transparent !important;
      }

      .table{
        box-shadow: 3px 4px 2px rgb(233 237 308);
        border: 1px solid rgb(233 237 308);
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/starter-template/starter-template.css" rel="stylesheet">
  </head>
  <body class="">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">NekoProduct</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('lista-produtos') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <div class="nav-item active">
      <a class="nav-link" href="{{ route('adicionar-produtos') }}">Adicionar produtos  <span class="sr-only">(current)</span></a>
      </div>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0"
    action="{{route('search-produto')}}"
    method="get"
    >
    @csrf
      <input 
      name="nome"
      value="{{ $pesquisa }}"
      class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
      <button style="display: none;" class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    <button class="darkMode  btn btn-primary">
    DarkMode
    </button>
  </div>
</nav>

<main role="main" class="container">

<!-- conteudo -->
@yield('conteudo')
<!-- fim conteudo -->
</main>

<script>

const darkMode = (cond) => {
  if(cond == "true"){
    const darkMode = localStorage.getItem("dark")
    if(darkMode){
      if(darkMode == "true"){
        localStorage.setItem("dark", "false")
        $("body").removeClass("dark");
        $(".table").removeClass("table-dark");
      } else{
        localStorage.setItem("dark", "true")
        $("body").addClass("dark");
        $(".table").addClass("table-dark");
      }
    } else{
      localStorage.setItem("dark", "false")
    }
  } else{
    const dark = localStorage.getItem("dark")
    if(dark == "true"){
        $(".table").addClass("table-dark");
        $("body").addClass("dark");
    } else{
      $(".table").removeClass("table-dark");
      $("body").removeClass("dark");
    }
  }
}

$(".darkMode").click(function(){
  darkMode("true")
})

darkMode("false")

</script>

<!-- /.container -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
