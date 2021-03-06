@extends('user.headercliente')

@section('main') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
        <div class="col-lg-offset-2 col-lg-8">
        <div class="box">
            <div class="header-box">
            <h2 class="center">DEPOSITO SMARTCOIN</h2>
            </div>
            <div class="body-box">
           

           <form action="{{url('/smart/deposito/novo')}}" method="post" class="form-horizontal">
             
              <div class="form-group ">
                <label for="valor" class="col-lg-6 ">SMARTCOIN</label>
                <div class="col-lg-6">  
                  <input type="text" class="form-control dinheiro_mascara" name="valor" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->


              <div class="form-group">
                <label for="data" class="col-lg-6">DATA</label>
                <div class="col-lg-6">  
                  <input type="date" class="form-control data-automatica" value="{{$dataAtual}}" name="data" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->

              <div class="form-group">
                <label for="tipodeposito" class="col-lg-6">TIPO DE DEPOSITO</label>
                <div class="col-lg-6">  
                  <select class="form-control" name="tipodeposito" >
                    <option value="" selected>DINHEIRO</option>
                 <!--   <option value="">BOLETO</option>
                    <option value="">TRANSFÊRENCIA</option>
                    -->
                  </select>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->
              <!--
              <div class="form-group">
                <label for="banco" class="col-sm-6">BANCO</label>
                <div class="col-sm-6">  
                    <select class="form-control" name="banco">
                      <option value="" disabled selected>SELECIONE</option>
                      <option value="">BB</option>
                      <option value="">CAIXA E.F.</option>
                      <option value="">ITAU</option>
                      <option value="">BRADESCO</option>
                      <option value="">SMART</option>                
                    </select>
                </div>
              </div>
              -->
              <!-- FECHAMENTO FORM_GROUP -->

              <div class="form-group text-right">
                <div class="col-lg-6 col-lg-offset-6">  
                  <input type="submit" class="btn btn-primary form-control" value="DEPOSITAR">             
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>            
           
                       

            <!-- DIV PARA CENTRALIZAR -->
        </div>  <!-- END BODY BOX -->
     </div>  <!-- END BOX -->
        
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection