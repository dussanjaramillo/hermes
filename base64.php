<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hermes | Codificación base64 </title>
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
    <script src="js/base64.js"></script>
    <script src="js/base64_rollBack.js"></script>
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
                        <h1>Codificación Base 64</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                            <li class="breadcrumb-item active">Codificación Base 64</li>
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
                                <h3 class="card-title">Codificar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Texto claro</label>
                                                <textarea class="form-control" rows="3" placeholder="Entrada ..." id="entrada"></textarea>
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
                                    <a class="btn btn-app" id="encriptar" href="#">
                                        <i class="fas fa-eye-slash"></i> Codificar
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
                                <h3 class="card-title">Decodificar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Texto encriptado</label>
                                                <textarea class="form-control" rows="3" placeholder="Entrada ..." id="entrada2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Texto claro</label>
                                                <textarea class="form-control" rows="3" placeholder="Salida ..." disabled id="resultado2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a class="btn btn-app" id="desencriptar" href="#">
                                        <i class="fas fa-eye"></i> Decodificar
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
                                <h3 class="card-title">Codificación Base64</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><b>Base 64</b> es un sistema de numeración posicional que usa 64 como base. Es la mayor potencia que puede ser representada usando únicamente los caracteres imprimibles de ASCII. Esto ha propiciado su uso para codificación de correos electrónicos, PGP y otras aplicaciones. Todas las variantes famosas que se conocen con el nombre de Base64 usan el rango de caracteres A-Z, a-z y 0-9 en este orden para los primeros 62 dígitos, pero los símbolos escogidos para los últimos dos dígitos varían considerablemente de unas a otras. Otros métodos de codificación como UUEncode y las últimas versiones de binhex usan un conjunto diferente de 64 caracteres para representar 6 dígitos binarios, pero estos nunca son llamados Base64.</p>
                                            <p>Una cita de Thomas Hobbes perteneciente a la obra Leviathan:</p>
                                            <blockquote class="flexquote">
                                             <div class="flex">
                                              <div class="quote">Man is distinguished, not only by his reason, but by this singular passion from other animals, which is a lust of the mind, that by a perseverance of delight in the continued and indefatigable generation of knowledge, exceeds the short vehemence of any carnal pleasure.</div>
                                             </div>
                                            </blockquote>
                                            <p>se codifica en <i>base64</i> como sigue:
                                            </p>
                                            <pre>
                                            TWFuIGlzIGRpc3Rpbmd1aXNoZWQsIG5vdCBvbmx5IGJ5IGhpcyByZWFzb24sIGJ1dCBieSB0aGlz
                                            IHNpbmd1bGFyIHBhc3Npb24gZnJvbSBvdGhlciBhbmltYWxzLCB3aGljaCBpcyBhIGx1c3Qgb2Yg
                                            dGhlIG1pbmQsIHRoYXQgYnkgYSBwZXJzZXZlcmFuY2Ugb2YgZGVsaWdodCBpbiB0aGUgY29udGlu
                                            dWVkIGFuZCBpbmRlZmF0aWdhYmxlIGdlbmVyYXRpb24gb2Yga25vd2xlZGdlLCBleGNlZWRzIHRo
                                            ZSBzaG9ydCB2ZWhlbWVuY2Ugb2YgYW55IGNhcm5hbCBwbGVhc3VyZS4=
                                            </pre>
                                            <p>En la cita de arriba el valor codificado de <i>Man</i> es TWFu. Codificadas en ASCII, las letras: M, a y n son almacenadas como los bytes 77, 97 y 110, es decir, 01001101, 01100001, 01101110 en base 2.
                                            </p>
                                            <p>Ahora esos tres bytes se unen y tenemos el búfer de 24 bits, que será 010011010110000101101110. Este número se convertirá a su valor Base 64, que puede hacerse tomando bloques de 6 bits a la vez (6 bits forman como máximo 64 valores diferentes en binario: 2<sup>6</sup>). A continuación, cogiendo cada vez 6 bits del búfer, tenemos 4 números (24 = 6 x 4), que entonces son convertidos a su correspondiente valor en Base 64.
                                            </p>
                                            <table class="table table-bordered table-hover">
                                            <tbody><tr>
                                            <th>Texto de entrada
                                            </th>
                                            <td colspan="8" align="center"><b>M</b>
                                            </td>
                                            <td colspan="8" align="center"><b>a</b>
                                            </td>
                                            <td colspan="8" align="center"><b>n</b>
                                            </td></tr>
                                            <tr>
                                            <th>ASCII
                                            </th>
                                            <td colspan="8" align="center">77
                                            </td>
                                            <td colspan="8" align="center">97
                                            </td>
                                            <td colspan="8" align="center">110
                                            </td></tr>
                                            <tr>
                                            <th>Bits
                                            </th>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0
                                            </td></tr>
                                            <tr>
                                            <th>Índice
                                            </th>
                                            <td colspan="6" align="center">19
                                            </td>
                                            <td colspan="6" align="center">22
                                            </td>
                                            <td colspan="6" align="center">5
                                            </td>
                                            <td colspan="6" align="center">46
                                            </td></tr>
                                            <tr>
                                            <th>Resultado en Base64
                                            </th>
                                            <td colspan="6" align="center"><b>T</b>
                                            </td>
                                            <td colspan="6" align="center"><b>W</b>
                                            </td>
                                            <td colspan="6" align="center"><b>F</b>
                                            </td>
                                            <td colspan="6" align="center"><b>u</b>
                                            </td></tr></tbody></table>
                                            <p>Por tanto, 3 bytes sin codificar (en este caso, caracteres ASCII) entran y 4 caracteres ASCII codificados surgen como resultado.
                                            </p>
                                            <p>La tabla de índice Base64:
                                            </p>
                                            <table class="wikitable" style="text-align:center; display:inline-table" border="1" width="24%">
                                            <tbody><tr>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Carácter
                                            </th></tr>
                                            <tr>
                                            <td>0</td>
                                            <td><code>A</code>
                                            </td></tr>
                                            <tr>
                                            <td>1</td>
                                            <td><code>B</code>
                                            </td></tr>
                                            <tr>
                                            <td>2</td>
                                            <td><code>C</code>
                                            </td></tr>
                                            <tr>
                                            <td>3</td>
                                            <td><code>D</code>
                                            </td></tr>
                                            <tr>
                                            <td>4</td>
                                            <td><code>E</code>
                                            </td></tr>
                                            <tr>
                                            <td>5</td>
                                            <td><code>F</code>
                                            </td></tr>
                                            <tr>
                                            <td>6</td>
                                            <td><code>G</code>
                                            </td></tr>
                                            <tr>
                                            <td>7</td>
                                            <td><code>H</code>
                                            </td></tr>
                                            <tr>
                                            <td>8</td>
                                            <td><code>I</code>
                                            </td></tr>
                                            <tr>
                                            <td>9</td>
                                            <td><code>J</code>
                                            </td></tr>
                                            <tr>
                                            <td>10</td>
                                            <td><code>K</code>
                                            </td></tr>
                                            <tr>
                                            <td>11</td>
                                            <td><code>L</code>
                                            </td></tr>
                                            <tr>
                                            <td>12</td>
                                            <td><code>M</code>
                                            </td></tr>
                                            <tr>
                                            <td>13</td>
                                            <td><code>N</code>
                                            </td></tr>
                                            <tr>
                                            <td>14</td>
                                            <td><code>O</code>
                                            </td></tr>
                                            <tr>
                                            <td>15</td>
                                            <td><code>P</code>
                                            </td></tr></tbody></table>
                                            <table class="wikitable" style="text-align:center; display:inline-table" border="1" width="24%">

                                            <tbody><tr>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Carácter
                                            </th></tr>
                                            <tr>
                                            <td>16</td>
                                            <td><code>Q</code>
                                            </td></tr>
                                            <tr>
                                            <td>17</td>
                                            <td><code>R</code>
                                            </td></tr>
                                            <tr>
                                            <td>18</td>
                                            <td><code>S</code>
                                            </td></tr>
                                            <tr>
                                            <td>19</td>
                                            <td><code>T</code>
                                            </td></tr>
                                            <tr>
                                            <td>20</td>
                                            <td><code>U</code>
                                            </td></tr>
                                            <tr>
                                            <td>21</td>
                                            <td><code>V</code>
                                            </td></tr>
                                            <tr>
                                            <td>22</td>
                                            <td><code>W</code>
                                            </td></tr>
                                            <tr>
                                            <td>23</td>
                                            <td><code>X</code>
                                            </td></tr>
                                            <tr>
                                            <td>24</td>
                                            <td><code>Y</code>
                                            </td></tr>
                                            <tr>
                                            <td>25</td>
                                            <td><code>Z</code>
                                            </td></tr>
                                            <tr>
                                            <td>26</td>
                                            <td><code>a</code>
                                            </td></tr>
                                            <tr>
                                            <td>27</td>
                                            <td><code>b</code>
                                            </td></tr>
                                            <tr>
                                            <td>28</td>
                                            <td><code>c</code>
                                            </td></tr>
                                            <tr>
                                            <td>29</td>
                                            <td><code>d</code>
                                            </td></tr>
                                            <tr>
                                            <td>30</td>
                                            <td><code>e</code>
                                            </td></tr>
                                            <tr>
                                            <td>31</td>
                                            <td><code>f</code>
                                            </td></tr></tbody></table>
                                            <table class="wikitable" style="text-align:center; display:inline-table" border="1" width="24%">

                                            <tbody><tr>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Carácter
                                            </th></tr>
                                            <tr>
                                            <td>32</td>
                                            <td><code>g</code>
                                            </td></tr>
                                            <tr>
                                            <td>33</td>
                                            <td><code>h</code>
                                            </td></tr>
                                            <tr>
                                            <td>34</td>
                                            <td><code>i</code>
                                            </td></tr>
                                            <tr>
                                            <td>35</td>
                                            <td><code>j</code>
                                            </td></tr>
                                            <tr>
                                            <td>36</td>
                                            <td><code>k</code>
                                            </td></tr>
                                            <tr>
                                            <td>37</td>
                                            <td><code>l</code>
                                            </td></tr>
                                            <tr>
                                            <td>38</td>
                                            <td><code>m</code>
                                            </td></tr>
                                            <tr>
                                            <td>39</td>
                                            <td><code>n</code>
                                            </td></tr>
                                            <tr>
                                            <td>40</td>
                                            <td><code>o</code>
                                            </td></tr>
                                            <tr>
                                            <td>41</td>
                                            <td><code>p</code>
                                            </td></tr>
                                            <tr>
                                            <td>42</td>
                                            <td><code>q</code>
                                            </td></tr>
                                            <tr>
                                            <td>43</td>
                                            <td><code>r</code>
                                            </td></tr>
                                            <tr>
                                            <td>44</td>
                                            <td><code>s</code>
                                            </td></tr>
                                            <tr>
                                            <td>45</td>
                                            <td><code>t</code>
                                            </td></tr>
                                            <tr>
                                            <td>46</td>
                                            <td><code>u</code>
                                            </td></tr>
                                            <tr>
                                            <td>47</td>
                                            <td><code>v</code>
                                            </td></tr></tbody></table>
                                            <table class="wikitable" style="text-align:center; display:inline-table" border="1" width="24%">

                                            <tbody><tr>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Carácter
                                            </th></tr>
                                            <tr>
                                            <td>48</td>
                                            <td><code>w</code>
                                            </td></tr>
                                            <tr>
                                            <td>49</td>
                                            <td><code>x</code>
                                            </td></tr>
                                            <tr>
                                            <td>50</td>
                                            <td><code>y</code>
                                            </td></tr>
                                            <tr>
                                            <td>51</td>
                                            <td><code>z</code>
                                            </td></tr>
                                            <tr>
                                            <td>52</td>
                                            <td><code>0</code>
                                            </td></tr>
                                            <tr>
                                            <td>53</td>
                                            <td><code>1</code>
                                            </td></tr>
                                            <tr>
                                            <td>54</td>
                                            <td><code>2</code>
                                            </td></tr>
                                            <tr>
                                            <td>55</td>
                                            <td><code>3</code>
                                            </td></tr>
                                            <tr>
                                            <td>56</td>
                                            <td><code>4</code>
                                            </td></tr>
                                            <tr>
                                            <td>57</td>
                                            <td><code>5</code>
                                            </td></tr>
                                            <tr>
                                            <td>58</td>
                                            <td><code>6</code>
                                            </td></tr>
                                            <tr>
                                            <td>59</td>
                                            <td><code>7</code>
                                            </td></tr>
                                            <tr>
                                            <td>60</td>
                                            <td><code>8</code>
                                            </td></tr>
                                            <tr>
                                            <td>61</td>
                                            <td><code>9</code>
                                            </td></tr>
                                            <tr>
                                            <td>62</td>
                                            <td><code>+</code>
                                            </td></tr>
                                            <tr>
                                            <td>63</td>
                                            <td><code>/</code>
                                            </td></tr></tbody></table>
                                            <p>&nbsp;</p>
                                            <p>Ilustración del marcado de relleno conforme acortamos la entrada:
                                            </p>
                                            <pre>
                                            La entrada termina con: <i>any carnal plea<b>sure.</b></i>  La salida termina con: YW55IGNhcm5hbCBwbGVh<b>c3VyZS4=</b>
                                            La entrada termina con: <i>any carnal plea<b>sure</b></i>   La salida termina con: YW55IGNhcm5hbCBwbGVh<b>c3VyZQ==</b>
                                            La entrada termina con: <i>any carnal plea<b>sur</b></i>    La salida termina con: YW55IGNhcm5hbCBwbGVh<b>c3Vy</b>
                                            La entrada termina con: <i>any carnal plea<b>su</b></i>     La salida termina con: YW55IGNhcm5hbCBwbGVh<b>c3U=</b>
                                            La entrada termina con: <i>any carnal plea<b>s</b></i>      La salida termina con: YW55IGNhcm5hbCBwbGVh<b>cw==</b>
                                            </pre>
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

