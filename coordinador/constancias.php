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
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MANTENEDOR DE CONSTANCIAS <small> Impresión de Constancias </small></h3>
              </div>
<!-- 
              <div class="title_right">
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
                    <h2> <i class="fa fa-exclamation-triangle"></i> Aqui podremos tambien hacer las reimpresiones</h2>
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
                       
                  <div class="row">
                    
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <i class="fa fa-search"></i> Busqueda de Constancias  <small> Mediante criterios haremos el filtro </small></h2>
                  <!--   <ul class="nav navbar-right panel_toolbox">
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
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" >
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      

                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* Correlativo </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* Proyecto </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Ingresar Proyecto" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* Cliente </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Ingrese Cliente" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* DNI </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" placeholder=" Ingresar DNI" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* Estado </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <select name="ds" id="inputDs" class="form-control" required="required">
                            <option value="">Todos</option>
                            <option value="">Cancelado</option>
                            <option value="">En Curso</option>
                            <option value="">Cumplido</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required">* Rango Tiempo </span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            
                             <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text"  name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" />
                                </div>
                              </div>
                            </div>
                          </fieldset>

                        </div>
                      </div>
                  
                    
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset"><i class="fa fa-trash-o"></i> Limpiar</button>
                       <!--    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i>  Buscar</button> -->

                           <!-- Large modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i>  Buscar </button>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="width:90%;">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Gestión de Constancias</h4>
                        </div>
                        <div class="modal-body">
                           
                          
                            <div class="row">
            
             <div class="col-xs-5 col-sm-5 col-md-5 ">
               
              
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SUPERVISIÓN FERROSA</h2>
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
                    <h4>Tipo Tarea :<small> Capacitacion</small></h4>
                    <h4>Empresa : <small> FERROSA SAC </small></h4>
                    <h4>Fecha Capacitación : <small> 20/03/2018 </small></h4>
                    <h4>Numero Participantes : <small> 20  </small></h4>
                    <h4>Capacitador : <small> Walter Dominguez Giraldo</small></h4>
                    <h4>Dirección : <small> Lurin, Lomas de lucumo 1456 </small></h4>
                    <br>
                    <div>
                     <h4> Resumen : </h4> 
                      <div class="starrr stars"></div>
                       Se comenzo 1 hora despues de la hora pactada, se tuvo retrasos al reunir al personal dentro del centro de laboral . No se tuvieron algunos implementos necesarios para la capacitacion.

                      </div>

                 

                  </div>
                </div>


             </div>

             <div class="col-xs-7 col-sm-7 col-md-7 ">  
               <div class="x_panel" style="    height: 366px;">
                <div class="x_title">
                  <h2>CONSTANCIAS INDIVIDUALES </h2>
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

                  <div class="" style="    overflow-y: scroll; height: 230px;">

                    <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nombre Completo</th>
                                  <th>Dni</th>
                                  <th>Nota Promedio</th>
                                  <th>Estado</th>
                                  <th>#</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="success">
                                  <th scope="row">1</th>
                                  <td>Diego Warthon Hurtado</td>
                                  <td>4321232</td>
                                  <td>18</td>
                                  <td > <span class="badge bg-green">Generada</span> </td>
                                  <td><input type="checkbox" class="flat"> </td>
                                </tr>
                               <tr class="success">
                                  <th scope="row">2</th>
                                  <td>Juan Perez Sullon</td>
                                  <td>12321312</td>
                                  <td>16</td>
                                  <td > <span class="badge bg-green">Generada</span></td>
                                  <td><input type="checkbox" class="flat"> </td>
                                </tr>
                                <tr class="danger">
                                  <th scope="row">3</th>
                                  <td>Pilco Vera Santos</td>
                                  <td>3462342</td>
                                  <td>13</td>
                                  <td > <span class="badge bg-red">No Generada</span></td>
                                  <td><input type="checkbox" class="flat"> </td>
                                </tr>

                                <tr class="danger">
                                  <th scope="row">4</th>
                                  <td>Pilco Vera Santos</td>
                                  <td>423512234</td>
                                  <td>11</td>
                                  <td> <span class="badge bg-red">No Generada</span></td>
                                  <td><input type="checkbox" class="flat"> </td>
                                </tr>

                                <tr class="danger">
                                  <th scope="row">5</th>
                                  <td>Nadia Gutierrez Santos</td>
                                  <td>2341412</td>
                                  <td>09</td>
                                  <td> <span class="badge bg-red ">No Generada</span></td>
                                  <td><input type="checkbox" class="flat"> </td>
                                </tr>
                              </tbody>
                            </table>
               
                  </div>
                  <br>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Constancias</button>
                
                  </div>

                </div>
              </div>
             </div>
          </div>


          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="x_panel">
                
                <div class="x_title">
                  
                  <h2>CONSTANCIA GRUPAL </h2>
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
                   
                      <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Constancias</button>
                 </div>
               </div>
            </div>
          </div>

    


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
                         
                        </div>

                      </div>
                    </div>
                  </div>

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6  col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                  <h2>Resultados Encontrados  .. <small></small></h2>
                 <!--  <ul class="nav navbar-right panel_toolbox">
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
                  </ul> -->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height: 350px; overflow-y: scroll;">
                  <ul class="list-unstyled msg_list">
                     <li>
                      <a>
                        <span class="image">
                         <i class="fa fa-calendar-o"></i>
                        </span>
                        <span>
                          <span>Supervision Ferrosa</span>
                          <span class="label label-danger"> Cancelado</span>
                          <span class="time">17-03-2018</span>
                        </span>
                        <span class="message">
                          Se llego a la direccion pero no se encontro al encargado del proyecto, se procedio a cerrar la cita.
                        </span>
                      </a>
                    </li>

                    <li>
                      <a>
                        <span class="image">
                         <i class="fa fa-calendar-o"></i>
                        </span>
                        <span>
                          <span>Supervision Ferrosa</span>
                          <span class="label label-danger"> Cancelado</span>
                          <span class="time">17-03-2018</span>
                        </span>
                        <span class="message">
                          Se llego a la direccion pero no se encontro al encargado del proyecto, se procedio a cerrar la cita.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                         <i class="fa fa-calendar-o"></i>
                        </span>
                        <span>
                          <span>Capacitacion remixes Corp.</span>
                          <span class="label label-danger"> Cancelado</span>
                          <span class="time">01-03-2018</span>
                        </span>
                        <span class="message">
                          Ubicacion inaccesible por temporal del clima, se cierra cita.
                          
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                         <i class="fa fa-calendar"></i>
                        </span>
                        <span>
                          <span>Capacitacion Frenosa</span>
                          <span class="time">21-03-2018</span>
                          <span class="label label-warning"> En curso</span>
                        </span>
                        <span class="message">
                           No se tiene Observacion del capacitador, hasta el momento ..
                        </span>
                      </a>
                    </li>

                    <li>
                      <a>
                        <span class="image">
                         <i class="fa fa-calendar"></i>
                        </span>
                        <span>
                          <span>Capacitacion Remasa </span>
                          <span class="time">21-03-2018</span>
                          <span class="label label-success"> Cumplido </span>
                        </span>
                        <span class="message">
                          La capacitación  se realizo correctamene, se llego a la hora  pero se tuvo retrasos con el amoblado del lugar de capacitacion 
                          <br>
                          <button type="button" class="btn btn-success btn-xs pull-right"> <i class="fa fa-check-square-o"></i> Ver Informe</button>
                        </span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              </div>
               </div>

               
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="x_panel">
                
                <div class="x_title">
                  
                  <h2>CONSTANCIA GRUPAL </h2>
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
                   
                      <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Constancias</button>
                 </div>
  

                  
               
               </div>
            </div>
          </div>


                  </div>
                   

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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/mainOniros.js"></script>
  </body>
</html>
