@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-transparent">
                <div class="panel-heading text-center">CLIENTE</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="col-md-6">
                                <input id="password" type="password"  placeholder="Senha"  class="form-control" name="password" required>
    
                               
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-grey-primary full-width">
                                    Entrar
                                </button>                               
                            </div>
                        </div> 
                            <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-grey-primary full-width">
                                    Cadastrar
                                </button>                               
                                </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
