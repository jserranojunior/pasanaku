@extends('layouts.app')
@section('content') 

<div class="container masthead text-center text-white d-flex">
  <div class="row  row-servicos row-espaco">
    <div class="col-xs-4">
        <img class="img-fluid logo-inicial" src="{{URL('/img/pasanaku.png')}}" alt="">
    </div>
    <div class="col-xs-4">
      <img class="img-fluid logo-inicial" src="{{URL('/img/smartcoin.png')}}" alt="">
    </div>
    <div class="col-xs-4">
      <img class="img-fluid logo-inicial" src="{{URL('/img/visa.png')}}" alt="">
    </div>            
  </div>
  <div class="row  row-servicos row-espaco">            
    <a class="text-white text-bold js-scroll-trigger" href="{{url('/login')}}">
      <h4>LOGIN<h4>
    </a>
    <a class="text-white text-bold js-scroll-trigger" href="{{URL('/register')}}">
      <h4>CADASTRO<h4>
    </a>
  </div>
  <div class="row">
    <a href="https://play.google.com/store/apps/details?id=com.wSmart_6691693" target="_blank"> <img class="img-fluid logo-google-play" src="{{URL('/img/google-play.png')}}" alt=""> </a>
  </div>
</div>

@endsection


