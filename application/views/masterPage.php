<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>
		
	
	
	  <link href="<?=base_url()?>style/css/toastr.min.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/common.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/normalize.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/style.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/material-design-iconic-font.min.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/jquery.mCustomScrollbar.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/sweetalert.css" rel="stylesheet"> 
	  <link href="<?=base_url()?>style/css/materialize.min.css" rel="stylesheet">
	  <link href="<?=base_url()?>style/css/materializeIcons.css" type="text/css" rel="stylesheet">	
	 	
	  <script src="<?=base_url()?>style/js/jquery.min.js"></script>
	  <script src="<?=base_url()?>style/js/toastr.min.js"></script>
	  <script src="<?=base_url()?>style/js/sweetalert.min.js"></script>
	  <script src="<?=base_url()?>style/js/jquery.mCustomScrollbar.concat.min.js"></script>
	  <script src="<?=base_url()?>style/js/main.js"></script>
	  <script src="<?=base_url()?>style/js/materialize.min.js"></script>
	    
		
	</head>
	<body>
	     <!-- Nav Lateral -->
		<section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
               La Primavera <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            
            <input type="hidden" name="base_url" id="base_url" value="<?=base_url()?>">
            
            <figure class="full-width NavLateral-logo">
                <img src="<?=base_url()?>style/recursos/assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="home.html" class="center-align waves-effect waves-light"><i class="medium material-icons">language</i>Vista de Horario</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>

                        <a href="#"  class="NavLateral-DropDown center-align waves-effect waves-light" ><i class="tiny center-align material-icons">language</i>Gestion de Usuarios</a>
                    
                       <ul class="full-width">
                            <li><a href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/Usuarios/index" class=" center-align waves-effect waves-light">Lista de Usuarios</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/Usuarios/nuevoUsuario" class="center-align waves-effect waves-light">Nuevo Usuario</a></li>
                        </ul>
                        </li>
                    <li class="NavLateralDivider"></li>
                    <li>

                         <a href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/Bloqueos/index"class="center-align" ><i class="tiny center-align material-icons">language</i>Gestión de bloqueos</a>
                    </li>
                       <li class="NavLateralDivider"></li>
                    <li>
                        <a href="https://cancha-la-primavera-dilearmo.c9users.io/index.php/Costos/index"class="center-align" ><i class="tiny center-align material-icons">language</i>Gestión de precios</a>
                    
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown center-align waves-effect waves-light"><i class="tiny material-icons">language</i>Gestión de reservas</a>
                        <ul class="full-width">
                            <li><a href="template.html" class="waves-effect waves-light">Crear una reserva</a></li>
                            <li><a href="template.html" class="waves-effect waves-light">Editar reservas</a></li>
                        </ul>
                    </li>   
                </ul>
            </div>  
        </div>  
    </section>
    
    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="tiny material-icons">language</i></a></li>
                <li><figure><img src="<?=base_url()?>style/recursos/assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">Administrador</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Cerrar sesión"><i class="tiny material-icons">language</i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="tiny material-icons">language</i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="tiny material-icons">language</i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>
   
	</body>