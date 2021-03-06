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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function habilita() {
            $(".inputText").removeAttr("readonly");
        }
        function vercontra(){
            if ($("#pwd").attr("type") == "text"){
            $("#pwd").attr("type","password"); 
            }else {
            $("#pwd").attr("type","text");
            }
        }
    </script>
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
            </ul>
        </aside>
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Perfil del Dueño</h5>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card custom-gradient">
                            <div class="card-content">
                                <h5 class="card-title white-text">Informacion del Dueño</h5>
                                <?=form_open("boss/update")?>
                                    <div class="row">
                                    <input type="hidden" value="<?=$user->id;?>" name="id">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">face</i>
                                            <input class="inputText white-text" readonly value="<?=$user->nombre?>" name="nombre" id="name" type="text">
                                            <label for="name" class="white-text">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">face</i>
                                            <input class="inputText white-text" readonly value="<?=$user->apellido?>" name="apellido" id="lastname" type="text">
                                            <label for="lastname" class="white-text">Apellido</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix white-text">account_circle</i>
                                            <input class="inputText white-text" readonly value="<?=$user->usuario?>" name="usuario" id="username" type="text">
                                            <label for="username" class="white-text">Usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s10 m10 l10">
                                            <i class="material-icons prefix white-text">lock</i>
                                            <input class="inputText white-text" readonly value="<?=$user->contraseña?>" name="contraseña" id="pwd" type="password">
                                            <label for="password" class="white-text">Contraseña</label>
                                        </div>
                                        <div class="input-field col s2 m2 l2 center-align">
                                            <br><a class="btn-floating blue-grey" onclick="vercontra();"><i class="material-icons">remove_red_eye</i></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m4 l4">
                                            <a class="btn blue-grey waves-effect waves-light col s12 m12 l12" onclick="habilita();">Modificar dueño
                                            </a>
                                        </div>
                                        <div class="input-field col s12 m4 l4">
                                            <button class="btn blue-grey waves-effect waves-light col s12 m12 l12" type="submit">Guardar dueño
                                            </button>
                                        </div>
                                        <div class="input-field col s12 m4 l4">
                                            <a href="#modalE" class="btn blue-grey waves-effect waves-light col s12 m12 l12 modal-trigger">Eliminar Cuenta
                                            </a>
                                        </div>
                                    </div>
                                <?=form_close()?>
                            </div>
                        </div>
                    </div>                 
                </div>
            </div>
            <div id="modalE" class="modal">
                <div class="modal-content">
                    <h4><i class="small material-icons">warning</i>&nbsp;ADVERTENCIA</h4>
                    <hr style="width:100%;border: 1px solid gray">
                    <span class="grey-text ">Esta a punto de eliminarse, esta seguro de 
                    eliminarse porque cuando usted se elimine no podra volver a ingresar con este usuario?. Recuerde
                        que sus datos no pueden ser recuperados.</span>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-ligth white-text btn">Cerrar</a>
                    <a class="modal-close waves-effect waves-ligth white-text btn"
                        href="<?php echo base_url()?>index.php/boss/delete/<?php echo $user->id; ?>">Si</a>
                </div>
            </div>
            <footer class="center-align m-b-30"></footer>
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