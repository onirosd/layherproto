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
                <h3>GESTIÓN DE USUARIOS </h3>
              </div>

             <!--  <div class="title_right">
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
              <div class="col-xs-6 col-sm-6 col-md-3 ">
                
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> REGISTRAR NUEVO USUARIO <i class="fa fa-user"></i> </h2>
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
                     
                   

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                      <label for="fullname">Nombre Completo * :</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required />

                      <label for="email">DNI * :</label>
                      <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                      <h2> Datos Logueo </h2>
                      <div class="clearfix"></div>
                      <label for="fullname">Usuario</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required />

                      <label for="email">Contraseña :</label>
                      <input type="password" class="form-control" value="passwordonetwo">
                    

                          <label for="heard">Seleccionar Perfil:</label>
                          <select id="heard" class="form-control" required>
                            <option value="">..</option>
                            <option value="press">Coordinador</option>
                            <option value="net">Administrativo</option>
                            <option value="mouth">Capacitador</option>
                          </select>

    
                          <br/>
                          <span class="btn btn-primary">Regfistraar Usuario</span>

                    </form>
       

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
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
