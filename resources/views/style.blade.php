<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fabiano Bacchieri</title>
    <link rel="shortcut icon" href="{{ asset('svg/SVG/favicon.svg') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!--Estilo-->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <header>

            @yield('content')

    </header>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
        <a class="navbar-brand font-nome tl" href="#">Fabiano Bacchieri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><svg id="Camada_3" data-name="Camada 3" xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 127 147.9">
                    <path class="marca" d="M108.5,810.5v-146h61s19.5-.4,26,0c12,.8,29.9,4.1,32,36s-13,35-13,35,20,5,20,35-17.7,38-30,40c-9.6,1.6-39,0-39,0v-19s24,.6,32,0,20-3,19-21-11.3-19.6-18-20-32,0-32,0v-24h22s21,1,20-20-15-21-15-21l-66-1v126Z"
                        transform="translate(-108 -663.8)" />
                </svg></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Projetos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Chacarereando</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Discografia
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a id="maisPampa" class="dropdown-item" href="{{ url('/mais-pampa-menos-povo') }}">Mais Pampa... Menos Povo!</a>
                        <a class="dropdown-item" href="#">Marca</a>
                        <a class="dropdown-item" href="#">Saludo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Se Indo pro Campo</a>
                        <a class="dropdown-item" href="#">Se Indo pra Bailanta</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/bio')}}">Biografia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
            <ul id="social" class="nav navbar-nav">
                <li class="nav-item">
                    <a href="https://www.facebook.com/Fabiano-Bacchieri--210930092273377/" class="btn btn-default btn-lg">
                        <span class="fab fa-facebook"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/fbacchi/" class="btn btn-default btn-lg">
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.youtube.com/channel/UCcr_T7s0r6Nv48UlprLekjw?view_as=subscriber" class="btn btn-default btn-lg">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://open.spotify.com/artist/6FBkVf5vUHBXH343DlnICB" class="btn btn-default btn-lg">
                        <span class="fab fa-spotify"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <svg id="Marca" data-name="Camada 3" xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 127 147.9">
                        <title>Marca</title>
                        <path class="marca" d="M108.5,810.5v-146h61s19.5-.4,26,0c12,.8,29.9,4.1,32,36s-13,35-13,35,20,5,20,35-17.7,38-30,40c-9.6,1.6-39,0-39,0v-19s24,.6,32,0,20-3,19-21-11.3-19.6-18-20-32,0-32,0v-24h22s21,1,20-20-15-21-15-21l-66-1v126Z"
                            transform="translate(-108 -663.8)" />
                    </svg>
                </li>
            </ul>
        </div>
        
    </nav>
   



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
</body>
</html>