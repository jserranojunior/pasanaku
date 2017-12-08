
@extends('admin.headeradm', $notificacoes)

@section('main') 
  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        CLIENTES <br>
        <small></small>
      </h1>      
    </section>

    <section class="content container-fluid">
<div class="box">
  <div class="box-body">
       <table class="table table-condensed table-hover" id="tabelaClientes">
    <thead>
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>CPF</th>    
            <th>DATA DE NASCIMENTO</th> 
            <th>CELULAR</th> 
         </tr>
    </thead>
    <tbody>     
        @foreach ($dados as $dados)
            <tr>
                <td>  {{$dados->name}}</td>
                <td>  {{$dados->email}}</td>
                <td class="cpf_mascara">  {{$dados->cpf}}</td>
                <td class="data_mascara">  {{$dados->data_nascimento}}</td>
                <td class=" @if($dados->celular !== null) telefone_mascara @endif ">  {{$dados->celular}}</td>
            </tr>      
        @endforeach
        </tbody>
        </table>   
  </div>
</div>         

     </section>
  </div>
@endsection

