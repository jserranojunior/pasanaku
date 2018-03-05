
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
    <div class="col-xs-10 col-xs-offset-1">
<div class="box">

    <div class="box-body">  

    <table class="table table-transparent table-condensed">
        <tr>
            <td>
                <label for="nome"  class="label-control "> Nome </label>
            </td>
            <td> 
              <input type="text" value="Jorge Serrano Junior" class="form-control" name="nome">
            </td>
        </tr>

        <tr>
            <td>
                <label for="email" class="label-control"> E-mail </label>
            </td>
            <td> 
                <input type="text" class="form-control" name="email">
            </td>
        </tr>

        

    </table>


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

