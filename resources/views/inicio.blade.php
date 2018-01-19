<html lang="en" style="overflow: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CONTA SMART</title>

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

  </head>

<body class="body-color-inicio">
<div class="container">
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CONTA SMART</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
                    
                         <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="{{url('/')}}">INÍCIO</a>
                                      </li>    
                                      <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="{{url('/login')}}">LOGIN</a>
                                      </li>            
                                      <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="{{URL('/register')}}">CADASTRO</a>
                                      </li>
                                                  
                                      <li class="nav-item">
                                          <a class="nav-link js-scroll-trigger" href="{{url('/admin/login')}}">ADMINISTRAÇÃO</a>
                                      </li>
                        </ul>
                     
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
</div>

<header class="masthead text-center text-white d-flex">
        <div class="container">
          <div class="row row-espaco">
            <div class="col-lg-12">
              <h1 class="text-uppercase h-titulo">
                <strong>CONTA SMART</strong>
              </h1>
              <hr class="hr-inicio">
            </div>
          
            <div class="col-lg-12">
              <h2 class="text-faded mb-5">Realizando sonhos!</h2>
              <a class="btn btn-primary btn-inicial" href="{{URL('/register')}}">CADASTRE</a>
            </div>
          </div>
          <div class="row  row-servicos row-espaco">
              <div class="col-md-4">
                  <img class="img-fluid logo-inicial" src="{{URL('/img/logovisa.png')}}" alt="">
                    <h3>SMART VISA</h3>
                    <p class="text-whited">Banco digital</p>
                </div>
            
            <div class="col-md-4">
              <img class="img-fluid logo-inicial" src="{{URL('/img/logopasanaku.png')}}" alt="">
                        <h3>PASANAKU INVEST</h3>
                        <p class="text-whited">Poupança segura e sem burocracia</p>
              
            </div>
  
            <div class="col-md-4">
                <img class="img-fluid logo-inicial" src="{{URL('/img/logosmartcoin.png')}}" alt="">
                          <h3>SMARTCOIN</h3>
                          <p class="text-whited">Investimento inteligente</p>
                      
              </div>
            
          </div>
        </div>
      </header>

<link href="{{ asset('js/all.js') }}" rel="stylesheet">

</body>
</html>