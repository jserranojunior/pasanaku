
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
    <div class="col-md-8 col-md-offset-2">
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
                <label for="data_pasanaku" class="label-control"> Data Pasanaku </label>
            </td>
            <td> 
                <input type="date" value="" class="form-control" name="data_pasanaku">
            </td>


            <td>
                <label for="data_coin" class="label-control"> Data Smart </label>
            </td>
            <td> 
                <input type="date" value="" class="form-control" name="data_coin">
            </td>
        </tr>   

        <tr>
            <td>
                <label for="facebook"  class="label-control"> Facebook </label>
            </td>
            <td colspan="3"> 
              <input type="text" value="{{$item->facebook}}" class="form-control" name="facebook">
            </td>
        </tr>

        <tr>
            <td>
                <label for="cep" class="label-control"> CEP </label>
            </td>
            <td> 
                <input type="text" value="{{$item->cep}}" id="cep" class="form-control cep" name="cep">
            </td>


            <td>
                <label for="bairro" class="label-control"> Bairro </label>
            </td>
            <td> 
                <input type="text" value="{{$item->bairro}}" id="bairro" class="form-control" name="bairro">
            </td>
        </tr>  

        <tr>
            <td>
                <label for="logradouro"  class="label-control"> Logradouro </label>
            </td>
            <td colspan="3"> 
              <input type="text" value="{{$item->logradouro}}" id="rua" class="form-control" name="logradouro">
            </td>
        </tr>

        <tr>
            <td>
                <label for="cidade" class="label-control"> Cidade </label>
            </td>
            <td> 
                <input type="text" value="{{$item->cidade}}" id="cidade" class="form-control " name="cidade">
            </td>


            <td>
                <label for="estado" class="label-control"> Estado </label>
            </td>
            <td> 
                <input type="text" value="{{$item->estado}}" id="uf" class="form-control" name="estado">
            </td>
        </tr> 

        <tr>
            <td>
                <label for="numero" class="label-control"> Número </label>
            </td>
            <td> 
                <input type="text" value="{{$item->numero}}" class="form-control" name="numero">
            </td>


            <td>
                <label for="rg" class="label-control"> RG/RNE </label>
            </td>
            <td> 
                <input type="text" value="{{$item->rg}}" class="form-control" name="rg">
            </td>
        </tr>

        <tr>
            <td>
                <label for="mae"  class="label-control"> Mãe </label>
            </td>
            <td colspan="3"> 
              <input type="text" value="{{$item->mae}}" class="form-control" name="mae">
            </td>
        </tr>

        <tr>
            <td>
                <label for="conjugue"  class="label-control"> Cônjuge </label>
            </td>
            <td colspan="3"> 
              <input type="text" value="{{$item->conjugue}}" class="form-control" name="conjugue">
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

