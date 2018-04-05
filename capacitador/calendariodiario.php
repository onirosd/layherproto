<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vista de Capacitador</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

      <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
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
     
    .adduser{

          width: 120px;
          text-align: center;
          font-size: 20px !important;
          color: #fff!important;
          background-color: #72a95a;
    } 
    .adduser:hover{
         background-color: #7ad055 !important;
    }
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
            <h4 class="modal-title" id="myModalLabel2">Programación Semanal</h4>
          </div>
          <div class="modal-body">

           <div class="row">

            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
              
            </div>
             <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                 <a class="btn btn-app" style="width: 200px;" onclick=" $('#fc_agregar').click(); ">
                     <span class="badge bg-green">25</span>
                      <i class="fa fa-users"></i> Agregar
                    </a>

                      <a class="btn btn-app" style="width: 200px;" onclick=" $('#fc_observacion').click(); ">
                     
                      <i class="fa fa-comment"></i> Observación
                    </a>
             </div>

             <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

              <a class="btn btn-app" style="width: 200px;" onclick=" $('#fc_asistencia').click(); ">
                     <span class="badge bg-green">10</span>
                      <i class="fa fa-check-square-o"></i>  Asistencia
                    </a>

                      <a class="btn btn-app" style="width: 200px;" onclick=" $('#fc_informe').click(); ">
                      <i class="fa fa-file-text"></i>
                      Informe
                    </a>
               
             </div>
           </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal"><i class="fa fa-share-square-o"></i> Cerrar Ventana</button>
         
          </div>
        </div>
      </div>
    </div>





  <div id="CalendarAgregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-users"></i> Agregar Participantes </h4>
          </div>
          <div class="modal-body">



            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Gestionar Lista de Participantes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link adduser"><i class="fa fa-user-plus"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                         

                       <table class="table table-striped table-responsive">
                         <thead>
                           <tr class="headings">
                             <th>Nombre y Apellido</th>
                             <th>DNI</th>
                             <th>Email</th>
                             <th>Estado</th>
                             <th>Herramientas</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td> juan ramirez canales</td>
                             <td>46623823</td>
                             <td>ramirez@gmail.com</td>
                             <td><span class="badge bg-green"> Activo </span></td>

                             <td>
                               
                               <a class = "float-left h3" href="#/pencil-square-o"><i class="fa fa-edit"></i></a>

                              <a class = "float-left h3"  href="#/trash" style="padding-left: 20px;"><i class="fa fa-trash"></i></a> 

                             </td>
                             
                           </tr>
                           <tr>
                             <td> aguntin prieto ugarte</td>
                             <td>46623823</td>
                                <td>ramirez@gmail.com</td>
                             <td><span class="badge bg-red"> Inactivo </span></td>

                            <td>
                               
                               <a class = "float-left h3" href="#/pencil-square-o"><i class="fa fa-edit"></i></a>

                              <a class = "float-left h3"  href="#/trash" style="padding-left: 20px;"><i class="fa fa-trash"></i></a> 

                             </td>
                           </tr>
                           <tr>
                             <td> abellaneda suarez inga</td>
                             <td>46623823</td>
                                <td>ramirez@gmail.com</td>
                             <td><span class="badge bg-green"> Activo </span></td>
                            <td>
                               
                               <a class = "float-left h3" href="#/pencil-square-o"><i class="fa fa-edit"></i></a>

                              <a class = "float-left h3"  href="#/trash" style="padding-left: 20px;"><i class="fa fa-trash"></i></a> 

                             </td>

                           </tr>


                            <tr>
                             <td>  <input type="text" name="" id="input" class="form-control" value="" required="required" title="Ingresar Nuevo usuario">   </td>
                             <td><input type="text" name="" id="input" class="form-control" value="" required="required" title="Ingresar DNI">  </td>
                                <td><input type="text" name="" id="input" class="form-control" value="" required="required" title="Ingresar Correo">  </td>
                             <td> <span class="badge bg-green"> Activo </span> </td>
                            <td>
                               
                               <a class = "float-left h3" href="#/pencil-square-o"> <i class="fa fa-save"></i> </a>


                             </td>

                           </tr>
                         </tbody>
                       </table>


                  </div>
                </div>
              </div>
            </div>

   

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2"><i class="fa fa-edit"></i> Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>


     <div id="CalenderAsistencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-check-square-o"></i> Gestionar Asistencias </h4>
          </div>
          <div class="modal-body">


                    <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Asistencia</th>
                                  <th>Participante</th>
                                  <th>Dni</th>
                                  <th width="10">Nota Teoria</th>
                                  <th width="10">Nota Practica</th>
                                  <th width="10">Nota Promedio</th>
                                  <th><i class="fa fa-pencil"></i> Observación</th>
                            
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="success">
                                  <th scope="row">1</th>
                                  <td> <input type="checkbox" class="flat"> </td>
                                  <td>Bienvenido ramirez soto</td>
                                  <td>5653453</td>
                                  <td><input type="text" class="form-control" value="20"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td > <input type="text" class="form-control" width="300px">  </td>
                                  
                                </tr>
                                <tr class="warning">
                                  <th scope="row">1</th>
                                  <td> <input type="checkbox" class="flat"> </td>
                                  <td>nicanor perez muñoz</td>
                                  <td>2343433</td>
                                  <td><input type="text" class="form-control" value=""></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td > <input type="text" class="form-control" width="300px">  </td>
                                  
                                </tr>
                                <tr class="warning">
                                  <th scope="row">1</th>
                                  <td> <input type="checkbox" class="flat"> </td>
                                  <td>Rosmel ollos sarmiento</td>
                                  <td>4321232</td>
                                  <td><input type="text" class="form-control" value="16"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td > <input type="text" class="form-control" width="300px">  </td>
                                  
                                </tr>

                                  <tr class="warning">
                                  <th scope="row">1</th>
                                  <td> <input type="checkbox" class="flat"> </td>
                                  <td>joaquin ramirez</td>
                                  <td>232323</td>
                                  <td><input type="text" class="form-control" value=""></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td > <input type="text" class="form-control" width="300px">  </td>
                                  
                                </tr>

                                  <tr class="success">
                                  <th scope="row">1</th>
                                  <td> <input type="checkbox" checked="checked" class="flat"> </td>
                                  <td>Diego Warthon Hurtado</td>
                                  <td>4321232</td>
                                  <td><input type="text" class="form-control" value=""></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td><input type="text" class="form-control"></td>
                                  <td > <input type="text" class="form-control" width="300px">  </td>
                                  
                                </tr>
                              </tbody>
                            </table>

   

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit2"><i class="fa fa-edit"></i> Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>


     <div id="CalendarObservacion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2"> <i class="fa fa-comment"></i> Incluir Observaciones </h4>
          </div>
          <div class="modal-body">


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
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
                    
                      <div class="form-group">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12" for="first-name"> Comentario  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea style="    height: 150px;" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> </textarea>
                        </div>
                      </div>
                      

                      

                      <div class="form-group" style="margin-top: 12px;">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12" for="first-name"> Estado  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select name="" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="">Seleccionar</option>
                            <option value="">Falta</option>
                            <option value="">Reprogramación</option>
                            <option value="">Sin Asistencia</option>
                          </select>
                          
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>

   

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit2"><i class="fa fa-edit"></i> Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>



     <div id="CalenderInforme" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">  <i class="fa fa-file-text"></i> Incluir Informe </h4>
          </div>
          <div class="modal-body">



                        <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>INFORME<small>ingresar la estructura del informe diario</small></h2>
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
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" class="editor-wrapper"></div>

                  <textarea name="descr" id="descr" style="display:none;"></textarea>
                  
                  <br />

                  <div class="ln_solid"></div>

                 
                </div>
              </div>
            </div>


   

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary antosubmit2"><i class="fa fa-edit"></i> Guardar Cambios</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_module" data-toggle="modal" data-target="#CalenderModalNew"></div>

    <div id="fc_agregar" data-toggle="modal" data-target="#CalendarAgregar"></div>
    <div id="fc_asistencia" data-toggle="modal" data-target="#CalenderAsistencia"></div>
    <div id="fc_observacion" data-toggle="modal" data-target="#CalendarObservacion"></div>
    <div id="fc_informe" data-toggle="modal" data-target="#CalenderInforme"></div>
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

     <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

      <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
  
    <script src="../vendors/fullcalendar/dist/fullcalendar.js"></script>
    <script src="../vendors/fullcalendar/dist/scheduler.min.js"></script>
    <script src="../vendors/fullcalendar/dist/locale-all.js"></script>
    <script type="text/javascript">
        
       var llavelistar = { 
                           arreglo : ['month','customWeek','agendaDay'],
                           init    : 'agendaDay'                           
  
                         }; 

    </script>
    <script src="../build/js/mainOniroscapa.js"></script>


  </body>
</html>
