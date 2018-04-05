<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
         <?php require 'estructura/vertical-menu.php'; ?>

        <!-- top navigation -->
       
         <?php require 'estructura/header.php'; ?>

        <!-- /top navigation -->

        <style type="text/css" >

          .just-padding {
          padding: 15px;
          }
          
          .list-group.list-group-root {
          padding: 0;
          overflow: hidden;
          }
          
          .list-group.list-group-root .list-group {
          margin-bottom: 0;
          }
          
          .list-group.list-group-root .list-group-item {
          border-radius: 0;
          border-width: 1px 0 0 0;
          }
          
          .list-group.list-group-root > .list-group-item:first-child {
          border-top-width: 0;
          }
          
          .list-group.list-group-root > .list-group > .list-group-item {
          padding-left: 30px;
          }
          
          .list-group.list-group-root > .list-group > .list-group > .list-group-item {
          padding-left: 45px;
          }
          
          .list-group-item .glyphicon {
          margin-right: 5px;
          }
          
        </style>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> FORMULARIO DE PERFILES</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Dar Privilegios</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>A continuación crearemos y asignaremos perfiles</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Paso 1 Crear perfil</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Paso 2 Asignar Usuarios</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Paso 3 Asignar Privilegios</small>
                                          </span>
                          </a>
                        </li>
                  
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Perfil<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>


                        </form>

                      </div>
                      <div id="step-2">
                      
                      <h2 class="StepTitle">Paso 2 Elección de Usuarios</h2>
                        <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     Elige los usuarios que desees esten en este nuevo perfil.  
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>
               <th><input type="checkbox" id="check-all" class=""></th>
              </th>
                          <th>Usuario</th>
                          <th>Nombre Completo</th>

                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>
               <th><input type="checkbox" id="check-all" class=""></th>
              </td>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>

                        </tr>
                        <tr>
                         <td>
               <th><input type="checkbox" id="check-all" class=""></th>
              </td>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>

                        </tr>
                        <tr>
              <td>
                 <th><input type="checkbox" id="check-all" class=""></th>
              </td>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>

                        </tr>
                        
              <td>
               <th><input type="checkbox" id="check-all" class=""></th>
              </td>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
   
            
                      </tbody>
                    </table>
                  </div>


                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Paso 3 Elección de Privilegios</h2>

                        <div class="just-padding" style="height: 300px;">

<div class="list-group list-group-root well">
  
  <a href="#item-1" class="list-group-item" data-toggle="collapse">
    <i class="glyphicon glyphicon-chevron-right"></i>Gestion Usuarios
  </a>
  <div class="list-group collapse" id="item-1">
    
    <a href="#item-1-1" class="list-group-item" data-toggle="collapse">
      Registro Usuario 
      <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
    </a>
<!--     <div class="list-group collapse" id="item-1-1">
      <a href="#" class="list-group-item">Item 1.1.1</a>
      <a href="#" class="list-group-item">Item 1.1.2</a>
      <a href="#" class="list-group-item">Item 1.1.3</a>
    </div> -->
    
    <a href="#item-1-2" class="list-group-item" data-toggle="collapse">
      Creación Perfiles
       <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
    </a>
  <!--   <div class="list-group collapse" id="item-1-2">
      <a href="#" class="list-group-item">Item 1.2.1</a>
      <a href="#" class="list-group-item">Item 1.2.2</a>
      <a href="#" class="list-group-item">Item 1.2.3</a>
    </div> -->
    
    <a href="#item-1-3" class="list-group-item" data-toggle="collapse">
      Asignar Perfiles
       <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
    </a>
 <!--    <div class="list-group collapse" id="item-1-3">
      <a href="#" class="list-group-item">Item 1.3.1</a>
      <a href="#" class="list-group-item">Item 1.3.2</a>
      <a href="#" class="list-group-item">Item 1.3.3</a>
    </div> -->
    
  </div>
  
  <a href="#item-2" class="list-group-item" data-toggle="collapse">
    <i class="glyphicon glyphicon-chevron-right"></i>Calendario
  </a>
  <div class="list-group collapse" id="item-2">
    
    <a href="#item-2-1" class="list-group-item" data-toggle="collapse">
      <i class="glyphicon glyphicon-chevron-right"></i>Gestion Tareas
    </a>
    <div class="list-group collapse" id="item-2-1">
      <a href="#" class="list-group-item">Agregar Participante
        <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Observaciones
       <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Asistencias
       <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Informes

        <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
    </div>
    
    <a href="#item-2-3" class="list-group-item" data-toggle="collapse">
      <i class="glyphicon glyphicon-chevron-right"></i>Reportes
    </a>
    <div class="list-group collapse" id="item-2-3">
      <a href="#" class="list-group-item">Reporte de Sustentanciones
        <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Reporte Indicador de Visitas
         <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Reporte Horas Extras
        <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>
      <a href="#" class="list-group-item">Reporte de visitas por proyecto y cliente
        <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
      </a>  
    </div>

    <a href="#item-2-2" class="list-group-item" data-toggle="collapse">
      Agregar Horarios  
       <div class="checkbox pull-right">
        <label>
          <input type="checkbox" value="">
        </label>
      </div>
    </a>
    
  </div>
  
  
  <a href="#item-3" class="list-group-item" data-toggle="collapse">
    Constancias
  </a>

    
  </div>
  
</div>
  
</div>
                    
                      </div>
                  

                    </div>
                    <!-- End SmartWizard Content -->




                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/mainOniros.js"></script>


  <script type="text/javascript">
    
  $(function() {
        
  $('.list-group-item').on('click', function() {
    $('.glyphicon', this)
      .toggleClass('glyphicon-chevron-right')
      .toggleClass('glyphicon-chevron-down');
  });

});

  </script>
  
  </body>
</html>