<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SMART</title>
    <!-- Styles -->
    <link href="{{ url('css/all.css') }}" rel="stylesheet">
    <script src="{{ url('js/all.js') }}"></script>
</head>
<body class="body-color-inicio">

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
  </div>   
</header>

        @yield('content')  


   
</body>
</html>
