<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/assets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>assets/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <a href="<?php echo base_url()?>index.php/boss/perfilT" class="collapsible-header"><i class="material-icons">business_center</i><span class="hide-menu"> Perfil del taller </span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/boss/catalogo" class="collapsible-header"><i class="material-icons">build</i><span class="hide-menu"> Catalogo de talleres </span></a>
                        </li>
                    </ul>
                </li>
        </aside>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Ingresar Dueño</h5>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card custom-gradient">
                            <div class="card-content">
                                <h5 class="card-title white-text">Registrar taller</h5>
                                <form action="ingresart.html">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">build</i>
                                            <input class="white-text" placeholder="Taller de Jhon Doe" id="name" type="text">
                                            <label for="name" class="white-text">Nombre del Taller</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">location_on</i>
                                            <input class="white-text" placeholder="La direccion de Jhon Doe" id="direction" type="text">
                                            <label for="direction" class="white-text">Direccion del taller</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">call</i>
                                            <input class="white-text" placeholder="26679945" id="tphone" type="number">
                                            <label for="tphone" class="white-text">Telefono del taller</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">call</i>
                                            <input class="white-text" placeholder="75463723" id="phone" type="number">
                                            <label for="phone" class="white-text">Celular del taller</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">business_center</i>
                                            <input class="white-text" placeholder="Mecanica automotriz" id="services" type="text">
                                            <label for="services" class="white-text">Servicios</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn blue-grey waves-effect waves-light right" type="submit" name="action">Registrar taller
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
    <script src="<?php echo base_url(); ?>assets/assets/libs/toastr/build/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/toastr/toastr-init.js"></script>
</body>

</html>