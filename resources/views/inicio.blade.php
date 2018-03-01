<html lang="en" style="overflow: auto;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CONTA SMART</title>

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('js/all.js') }}" rel="stylesheet">

  </head>

<body class="body-color-inicio">
<div class="container">
        
</div>

<header class="masthead text-center text-white d-flex">
        <div class="container">
          <div class="row row-espaco">
            <div class="col-lg-12">
              <h1 class="text-uppercase h-titulo">
                <strong>SMART</strong>
              </h1>
              <hr class="hr-inicio">
            </div>
          </div>
          <div class="row  row-servicos row-espaco">
              <div class="col-xs-4">
                  <img class="img-fluid logo-inicial" src="{{URL('/img/x.png')}}" alt="">
              </div>
            
            <div class="col-xs-4">
              <img class="img-fluid logo-inicial" src="{{URL('/img/x.png')}}" alt="">
            </div>
  
            <div class="col-xs-4">
                <img class="img-fluid logo-inicial" src="{{URL('/img/x.png')}}" alt="">
            </div>            
          </div>
          <div class="row  row-servicos row-espaco">             
            
             <a class="text-white text-bold js-scroll-trigger" href="{{url('/login')}}">
             <h4>CLIENTE<h4>
            </a>

            <a class="text-white text-bold js-scroll-trigger" href="{{url('/admin/login')}}">
             <h4>ADMINISTRAÇÃO<h4>
            </a>
            
          </div>


        </div>
      </header>



</body>
</html>