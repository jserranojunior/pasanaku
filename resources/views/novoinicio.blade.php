<html lang="en" style="overflow: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CONTA DIGITAL</title>

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
                    <a class="navbar-brand" href="#">CONTA DIGITAL</a>
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
            
            <div class="col-lg-6">
            <img src="img/logo-redondo-transparente.png" class="img-responsive" alt="">
            </div>

            <div class="col-lg-6">
            <img src="img/menu-redondo-transparente.png" class="img-responsive" alt="">
            
            </div>
            
          </div>
        </div>
      </header>

<link href="{{ asset('js/all.js') }}" rel="stylesheet">

</body>
</html>