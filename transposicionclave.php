<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hermes | Trasnsposición con clave </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE-3.0.2/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE-3.0.2/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- function ajax -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/transposicionclave.js"></script>
    <script src="js/transposicion_rollBack.js"></script>
    <script src="js/transposicion_matriz.js"></script>
    <script src="js/transposicion_rollBack_matriz.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contácto</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Salir</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="AdminLTE-3.0.2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Doe
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Problema con item 1...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 4 horas</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="AdminLTE-3.0.2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Doe
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Problema con item 2...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 5 horas</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="AdminLTE-3.0.2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Doe
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Problema con item 13..</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Hace 6 horas</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notificaciones</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 solicitudes
                        <span class="float-right text-muted text-sm">12 horas</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 reportes
                        <span class="float-right text-muted text-sm">2 días</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="index.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <!--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                  <i class="fas fa-th-large"></i>
                </a>-->
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="AdminLTE-3.0.2/index3.html" class="brand-link">
            <img src="AdminLTE-3.0.2/dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">HERMES</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="transposicion.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Transposición
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="transposicionclave.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Transposición con clave
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="cifradovallas.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Cifrado por vallas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="cifradogrupos.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Cifrado grupos y series
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="transposicionseries.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Transposición series NP
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="sustitucionmono.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Sustitución monoalfab.
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="sustitucionpoli.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Sustitución polialfab.
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="base64.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Base 64
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="sustitucionvigenere.php" class="nav-link">
                            <i class="nav-icon fas fa-cubes"></i>
                            <p>
                                Sustitución vigenere
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Transposición con clave</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Transposición con clave</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Encriptar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- textfield -->
                                            <div class="form-group">
                                                <label>Clave</label>
                                                <input type="text" class="form-control" placeholder="Clave" id="clave" style="text-transform:uppercase">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Texto claro</label>
                                                <textarea class="form-control" rows="3" placeholder="Entrada ..." id="entrada" style="text-transform:uppercase"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Texto encryptado</label>
                                                <textarea class="form-control" rows="3" placeholder="Salida ..." readonly id="resultado"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a class="btn btn-app" href="#" id="encriptar">
                                        <i class="fas fa-eye-slash"></i> Encriptar
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Desencriptar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- textfield -->
                                            <div class="form-group">
                                                <label>Clave</label>
                                                <input type="text" class="form-control" placeholder="Clave" id="clave2" style="text-transform:uppercase">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Texto encriptado</label>
                                                <textarea class="form-control" rows="3" placeholder="Entrada ..." id="entrada2" style="text-transform:uppercase"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Texto claro</label>
                                                <textarea class="form-control" rows="3" placeholder="Salida ..." readonly id="resultado2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a class="btn btn-app" href="#" id="desencriptar">
                                        <i class="fas fa-eye"></i> Desencriptar
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Transposición con clave</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-sm-12">
                                            <p>Si un texto en claro se escribe letra a letra hacia abajo con un nivel Fl de filas y luego se lee el resultado por filas de izquierda a derecha, diremos que se trata de una cifra por permutación de filas.</p>
                                            <p>La figura muestra un sistema de cifra por permutación de filas.</p>
                                            <p><img class="responsive" src="img/transposicion.png" alt="Cifrador por permutación de filas."></p>
                                            <p>Observa que se escribe el texto en claro hacia abajo, en columnas, definiendo previamente con cuántas filas Fi se va a cifrar el texto en claro. En el ejemplo se han definido 4 filas de forma que si el mensaje a cifrar es M = TRANSPOSICION POR FILAS, éste se escribe de arriba hacia abajo como TRAN, SPOS, ICIO, NPOR, FILA, SXXX. Como se observa, si nos quedan cuadrículas en blanco, éstas se rellenan con una letra poco común que se haya asignado previamente como de relleno; en nuestro caso se ha elegido la letra X.</p>
                                            <p>Un sistema similar de relleno se usará en los sistemas de cifra moderna conocidos como simétricos por bloques, como sería el caso por ejemplo del DES, el IDEA, el AES, etc. En estos sistemas el relleno del último bloque a cifrar se realizará mediante un conjunto de bits en 0, varios bytes indicando cada uno el número de bytes que faltan para completar ese último bloque, etc.</p>
                                            <p>Hecho esto y como el cifrado es por filas, vamos leyendo las 4 filas que se han definido, ahora sí de izquierda a derecha, dando como resultado al agruparlo en bloques de 5 letras al criptograma C = TSINF SRPCP IXAOI OLXNS ORAX.</p>
                                            <p>Observa que, dependiendo de la longitud del texto en claro y del número de filas que vamos a utilizar como clave para la cifra, obtendremos el número de columnas de la matriz resultante. En este ejemplo como el texto en claro TRANSPOSICION POR FILAS tenía 21 letras, al dividirlo por la clave 4 filas obtenemos 21/4 = 5,25 es decir 6 columnas (como se aprecia en la figura) y la última de ellas con relleno al darnos esa división un número con decimales.</p>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.2
        </div>
        <strong>Copyright &copy; 2020.</strong> Todos los derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-3.0.2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.0.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.0.2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.0.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.0.2/dist/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>

