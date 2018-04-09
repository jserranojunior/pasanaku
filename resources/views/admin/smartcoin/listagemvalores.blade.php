
@extends('admin.headeradm', $notificacoes)

@section('main') 
  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        VALORES SMARTCOIN <br>
        <small></small>
      </h1>      
    </section>

    <section class="content container-fluid">

<div class="col-xs-4 col-xs-offset-4">

<div class="box">
    <div class="box-header text-center">
        <a href="{{Route('admin.smart.create')}}">
            <div class="btn btn-primary">ADICIONAR</div>
        </a>
    </div>

  <div class="box-body">
       <table class="table table-condensed table-hover " id="tabelaSmartCoin">
    <thead>
        <tr>
            <th>DATA</th>
            <th>VALOR</th>
         </tr>
    </thead>
    <tbody>     
        
            <tr onclick="editarSmartCoin()" class="mouse-point">
                <td>10/03/2016</td>
                <td>2,00</td>
            </tr>      
        
        </tbody>
        </table>   
  </div>
</div>         
</div>
     </section>
  </div>

  <script>
  function editarSmartCoin($id){

    window.location.href = "valorsmartcoin/editar/"+$id;
  }
  
  </script>
@endsection

