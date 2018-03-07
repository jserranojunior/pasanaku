
@extends('admin.headeradm', $notificacoes)

@section('main') 
  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        EDITAR CLIENTE <br>
        <small></small>
      </h1>      
    </section>

    <section class="content container-fluid">
    <div class="col-xs-8 col-xs-offset-2">
<div class="box">

    <div class="box-body">  

<form name="clientes" method="post" action="{{ROUTE('admin.clientes.update')}}">
@foreach($dados as $item)
    <table class="table table-transparent table-condensed text-center">
        <tr>
            <td>
                <label for="nome"  class="label-control"> Nome </label>
            </td>
            <td colspan="3"> 
              <input type="text" value="{{$item->name}}" class="form-control" name="nome">
            </td>
        </tr>

        <tr>
            <td>
                <label for="email" class="label-control"> E-mail </label>
            </td>
            <td  colspan="3"> 
                <input type="text" class="form-control" value="{{$item->email}}" name="email">
            </td>
        </tr>   
        
        <tr>
            <td>
                <label for="valor_pasanaku" class="label-control"> Valor Pasanaku </label>
            </td>
            <td> 
                <input type="text" value="{{$item->pasa_valor}}" class="form-control dinheiro_mascara" name="valor_pasanaku">
            </td>


            <td>
                <label for="valor_coin" class="label-control"> Valor Smart </label>
            </td>
            <td> 
                <input type="text" value="{{$item->coin_valor}}" class="form-control dinheiro_mascara" name="valor_coin">
            </td>
        </tr>  

        <tr>
            
            <td>
                
            </td>            
        </tr>  
        

    </table>
    
    <div class="text-right">
    <input type="submit" value="ATUALIZAR" class="btn btn-primary">
    </div>    
    <input type="hidden" name="id" value="{{ $item->id }}">
    @endforeach
  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>


        <div class="col-xs-2">
                
        </div>
        <div class="col-xs-10">
            
        </div>


    </div>
  </div>
</div>         

     </section>
  </div>
@endsection

