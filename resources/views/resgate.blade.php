@extends('layouts.headercliente')



@section('main') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
        <div class="box">
            <div class="header-box">
            <h2 class="center">RESGATE</h2>
            </div>
            <div class="body-box">
            <div class="col-md-offset-4 col-md-4">

           <form action="{{url('/resgate/novo')}}" method="post" class="form-horizontal">
             
              <div class="form-group ">
                <label for="valor" class="col-sm-6 ">VALOR</label>
                <div class="col-sm-6">  
                  <input type="text" class="form-control dinheiro_mascara" name="valor" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->


              <div class="form-group">
                <label for="data" class="col-sm-6">DATA</label>
                <div class="col-sm-6">  
                  <input type="date" class="form-control data-automatica" value="{{$dataAtual}}" name="data" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->

              <div class="form-group">
                <label for="tipodeposito" class="col-sm-6">TIPO DE RESGATE</label>
                <div class="col-sm-6">  
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
                <div class="col-sm-6 col-sm-offset-6">  
                  <input type="submit" class="btn btn-primary form-control" value="RESGATE">             
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Realizando sonhos
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">SMART</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form>
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


</body>
</html>

@endsection