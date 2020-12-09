<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/assets/images/favicon.png">
    <title>Catatogo de Talleres</title>
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Cargando</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-light-icon.png">
                            <img class="dark-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-icon.png">
                        </span>
                        <span class="text">
                            <img class="light-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-light-text.png">
                            <img class="dark-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-text.png">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center hide-on-small-only" style="padding: 20px 20px 40px 300px;">
                        <h5 class="font-medium m-b-0">Catalogo de talleres de San Miguel</h5>
                    </div>
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">Dueño</span></li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/boss/perfilD" class="collapsible-header"><i class="material-icons">person</i><span class="hide-menu"> Ver perfil </span></a>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Taller</span></li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/boss/ingresar" class="collapsible-header"><i class="material-icons">add</i><span class="hide-menu"> Registrar taller </span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/boss/catalogo" class="collapsible-header"><i class="material-icons">build</i><span class="hide-menu"> Catalogo de talleres </span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/inicio/end" class="collapsible-header"><i
                                    class="material-icons">exit_to_app</i><span class="hide-menu"> Salir </span></a>
                        </li>
                    </ul>
                </li>
        </aside>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Catalogo de talleres</h5>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="input-field col s12 m10">
                        <i class="material-icons prefix">search</i>
                        <input id="criterio" type="text" class="validate">
                        <label for="search">Ingrese busqueda</label>
                    </div>
                    <div class=" col s12 m2 l2">
                        <br><a class="btn col s12 m12 l12 blue-grey"
                        >Buscar</a><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">

                    <?php foreach($data as $user){?>
                        <div class="card horizontal custom-gradient">
                            <div class="card-image hide-on-small-only">
                                <img src="<?php echo base_url(); ?>assets/assets/images/cards/taller.svg" width="250px" height="200px" style="margin-top: 5%;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content white-text">
                                    <h5 class="card-title white-text" style="margin-top: 1%;"><?= $user->nombret;?></h5>
                                    <p align="justify"><?= $user->servicios?></p>
                                    <p align="justify"><i class="material-icons">location_on</i><?= $user->direccion?></p>
                                    <p><?= $user->telefono?></p>
                                    <p><?= $user->celular?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ;?>    
                    </div>
                </div>
            </div>
            <footer class="center-align m-b-30">Holis</footer>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
</body>

</html>