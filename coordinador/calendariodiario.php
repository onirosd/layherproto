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
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
     <!-- bootstrap-daterangepicker --><!-- 
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->

     <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.print.min.css" rel="stylesheet" media="print">
     <link href="../vendors/fullcalendar/dist/scheduler.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">

    .fc-month-button , .fc-customWeek-button{
      display: none;
    }

    .fc-time-size{
      font-size: 9px;
    }      

    

    .fc-event{

 
        background-color: initial !important;
        border: initial !important;

    }  

    .fc-event-pendiente{

          background-color: rgb(206, 75, 95);
          height: 100%;
          color: rgb(255, 255, 255);
          font-size: 11px;

    }
    .fc-event-pendiente nav.copete{
       font-size: 9px;
       background-color: #900000;
       text-align: center;
    }

    .fc-event-realizado{

          background-color: rgb(7, 177, 18);
          height: 100%;
          color: rgb(255, 255, 255);
          font-size: 11px;

    }
    .fc-event-realizado nav.copete{
       font-size: 9px;
       background-color: #165d0c;
       text-align: center;
    }


    .fc-event-progreso{

          background-color: rgb(241, 208, 0);
          height: 100%;
          color: #fff;
          font-size: 11px;

    }
    .fc-event-progreso nav.copete{
       font-size: 9px;
       background-color: #b18d14;
       text-align: center;
    }

    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       
         <?php require 'estructura/vertical-menu.php'; ?>

        <!-- top navigation -->
       
         <?php require 'estructura/header.php'; ?>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CALENDARIO -LAYHER <small>Vista Coordinador</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <!--  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Programaciones <small> Lista de Tareas del empleado</small></h2>
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

                    <div id='calendar'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <?php require 'estructura/footer.php'; ?>

        <!-- /footer content -->
      </div>
    </div>

    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Programación Semanal</h4>
          </div>
          <div class="modal-body">

                <div class="x_panel">
                  <div class="x_content">

                  

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                 
                  <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Programación</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Lista Tareas</a>
                    </li>
                  </ul>

                <div id="myTabContent2" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">


                 <div id="testmodal">
                  
                  <form id="AddEventForm" class="form-horizontal calender" role="form">
 
                     <div class="form-group">
                     <label class="col-sm-3 control-label">Titulo</label>
                     <div class="col-sm-9">
                     <input type="text" class="form-control" id="ftitulo" name="ftitulo" >
                   
                     </div>
                    </div>


                    <div class="form-group">
                     <label class="col-sm-3 control-label">Empleado</label>
                     <div class="col-sm-9">
                     <input type="text" class="form-control" id="fnombre" name="fnombre" disabled="disabled" >
                   
                     </div>
                    </div>
                   
                    <h4>Detalle de la programación </h4>
                  
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Programación</label>
                      <div class="col-sm-9">
                        <select id="ftipoprogra" class="form-control changeDate" name="ftipoprogra">
                                <option value="vaca"> Vacaciones</option>
                                <option value="desca"> Descanzo</option>
                                <option value="permi">Permisos</option>
                                <option value="tardi" selected="selected">Tarea Diaria</option>
                              </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" style="height:55px;" id="fdescripcion" name="fdescripcion"></textarea>
                      </div>
                    </div>

                    <div class="form-group" id="DivIniDate">
                        <label class="col-sm-3 control-label">Tiempo Inicial</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='IniDate'>
                              <input type='text' id="fini" name="fini" class="form-control" readonly="readonly" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>
                    </div>
                    </div>

                    <div class="form-group" id="DivFinDate">
                        <label class="col-sm-3 control-label">Tiempo Final</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='FinDate'>
                              <input type='text' id="ffin" name="ffin" class="form-control" readonly="readonly" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>
                    </div>

                        
                    </div>

                  </form>
           
                 </div>

                    
                 </div>
                
                 <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                         
                  <div class="x_title">
                  <h2 class="pull-left">Agregar<small>Lista de Tareas</small></h2>
                  
                  <a id="ONIAddTask" class="btn btn-app pull-right" style=" height: 40px; min-width: initial; width: 50px;">
                  <i class="fa fa-plus" style="    margin-top: -5px;"></i>
                  </a>  
                  <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                   <table id='ONITableTask' class="table table-bordered table-inverse table-hover">
                     <thead>
                       <tr>
                         <th>N°</th>
                         <th>Descripción</th>
                         <th>Prioridad</th>
                         <th>#</th>
                       </tr>
                     </thead>
                     <tbody>
                      
                     </tbody>
                   </table>
                  </div>

                  </div>
  
                  </div>
                 
                  </div>

                  </div>
                </div>
            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit"><i class="fa fa-plus"></i> Agregar Evento</button>
          </div>
        </div>
      </div>
    </div>


    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Programación Semanal</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="EditEventForm" class="form-horizontal calender" role="form">
               
               
              
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                 
                  <ul id="myTab2" class="nav nav-tabs bar_tabs right" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content33" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Programación</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content44" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Lista Tareas</a>
                    </li>
                  </ul>

                <div id="myTabContent2" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content33" aria-labelledby="home-tab">


                 <div id="testmodal">
                  
                  <form id="AddEventForm" class="form-horizontal calender" role="form">
 

                    <div class="form-group">
                     <label class="col-sm-3 control-label">Titulo</label>
                     <div class="col-sm-9">
                     <input type="text" class="form-control" id="ftitulo" name="ftitulo" >
                   
                     </div>
                    </div>

                    <div class="form-group">
                     <label class="col-sm-3 control-label">Empleado</label>
                     <div class="col-sm-9">
                     <input type="text" class="form-control" id="fnombre" name="fnombre" disabled="disabled" >
                   
                     </div>
                    </div>
                   
                    <h4>Detalle de la programación </h4>
                  
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Programación</label>
                      <div class="col-sm-9">
                        <select id="ftipoprogra" class="form-control changeDate" name="ftipoprogra">
                                <option value="vaca"> Vacaciones</option>
                                <option value="desca"> Descanzo</option>
                                <option value="permi">Permisos</option>
                                <option value="tardi" selected="selected">Tarea Diaria</option>
                              </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" style="height:55px;" id="fdescripcion" name="fdescripcion"></textarea>
                      </div>
                    </div>

                    <div class="form-group" id="DivIniDate">
                        <label class="col-sm-3 control-label">Tiempo Inicial</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='IniDate'>
                              <input type='text' id="fini" name="fini" class="form-control" readonly="readonly" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>
                    </div>
                    </div>

                    <div class="form-group" id="DivFinDate">
                        <label class="col-sm-3 control-label">Tiempo Final</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='FinDate'>
                              <input type='text' id="ffin" name="ffin" class="form-control" readonly="readonly" />
                              <span class="input-group-addon">
                                 <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                        </div>
                    </div>

                        
                    </div>

                  </form>
           
                 </div>

                    
                 </div>
                
                 <div role="tabpanel" class="tab-pane fade" id="tab_content44" aria-labelledby="profile-tab">
                         
                  <div class="x_title">
                  <h2 class="pull-left">Agregar<small>Lista de Tareas</small></h2>
                  
                  <a id="ONIAddTask" class="btn btn-app pull-right" style=" height: 40px; min-width: initial; width: 50px;">
                  <i class="fa fa-plus" style="    margin-top: -5px;"></i>
                  </a>  
                  <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                   <table id='ONITableTask' class="table table-bordered table-inverse table-hover">
                     <thead>
                       <tr>
                         <th>N°</th>
                         <th>Descripción</th>
                         <th>Prioridad</th>
                         <th>#</th>
                       </tr>
                     </thead>
                     <tbody>
                      
                     </tbody>
                   </table>
                  </div>

                  </div>
  
                  </div>
                 
                  </div>


              </form>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2"><i class="fa fa-edit"></i> Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

    
        
    <script src="../vendors/moment/min/moment.min.js"></script>    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->

     <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
  
    <script src="../vendors/fullcalendar/dist/fullcalendar.js"></script>
    <script src="../vendors/fullcalendar/dist/scheduler.min.js"></script>
    <script src="../vendors/fullcalendar/dist/locale-all.js"></script>
    <script type="text/javascript">
        
       var llavelistar = { 
                           arreglo : ['month','customWeek','agendaDay'],
                           init    : 'agendaDay'                           
  
                         }; 

    </script>
    <script src="../build/js/mainOniros.js"></script>


  </body>
</html>
