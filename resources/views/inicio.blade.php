@extends('layouts.app')
@section('content') 

<div class="container masthead text-center text-white d-flex">
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

@endsection


