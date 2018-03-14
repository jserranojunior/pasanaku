@extends('admin.headeradm', $notificacoes)

@section('main') 

<div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        ANALISE DE TRANSAÇÕES <br>
        <small></small>
      </h1>      
    </section>

    <section class="content container-fluid">
    <div class="col-xs-8 col-xs-offset-2">
<div class="box">
    <div class="box-body">  

    <table class="table table-striped table-bordered table-condensed table-borend text-center">
    <tr>
        <th>#</th>
        <th>NOME</th>
        <th>DATA</th>
        <th>DEPOSITO</th>
        <th>RESGATE</th>
        <th>BONUS</th>
    </tr>
        @foreach($dados as $item)
        <tr>
            <td>
                1
            </td>
            <td>
                {{$item->name}}
            </td>            
            <td class="data_completa_mascara">
                {{$item->data_efetuada}}
            </td>
            <td>
                @if($item->tipo == "deposito")
                    {{$item->valor}}
                @endif    
            </td>
            <td>
            @if($item->tipo == "resgate")
                    {{$item->valor}}
                @endif 
            </td>
            <td>
            @if($item->tipo == "bonus")
                    {{$item->valor}}
                @endif 
            </td>
        </tr>
        @endforeach
    </table>

    </div
</div>

</section>
  </div>
@endsection