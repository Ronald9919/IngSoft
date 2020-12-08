<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/assets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Sidebar scss in sidebar.scss -->
    <!-- ============================================================== -->
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Cargando</p>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="center-align">
                    <h1 class="font-medium m-b-10">Bienvenido al Catalogo de talleres de San Miguel</h1>
                    <h3 class="font-medium m-b-0">¿Como desea ingresar?</h3>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m6">
                        <a href="<?php echo base_url()?>index.php/inicio/login">
                            <div class="card card-hover" style="background-color: transparent;">
                                <div class="card-image" style="margin-top: 10%;">
                                    <img src="<?php echo base_url(); ?>assets/assets/images/cards/Dueño.svg" width="200px" height="200px">
                                </div>
                                <div class="card-content center-align">
                                    <h1><b>Dueño</b></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col s12 m6">
                        <a href="Conductor/catalogo.html">
                            <div class="card card-hover" style="background-color: transparent;">
                                <div class="card-image" style="margin-top: 10%;">
                                    <img src="<?php echo base_url(); ?>assets/assets/images/cards/Conductor.svg" width="200px" height="200px">
                                </div>
                                <div class="card-content center-align">
                                    <h1><b>Conductor</b></h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
    <script src="<?php echo base_url(); ?>assets/dist/js/app.init.overlay.js"></script>
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