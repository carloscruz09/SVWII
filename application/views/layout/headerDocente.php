<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Dashboard</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/clndr.css" rel="stylesheet">

    <!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <link href="<?php echo base_url(); ?>assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css" rel="stylesheet">

    <!--clock css-->
    <link href="<?php echo base_url(); ?>assets/js/css3clock/css/style.css" rel="stylesheet">

     <!--Morris Chart CSS -->
    <link href="<?php echo base_url(); ?>assets/js/morris-chart/morris.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        <img src="<?php echo base_url(); ?>assets/images/logo-svwii.png" alt="logo" width="170" height="50">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        
        <!-- settings end -->
        <!-- inbox dropdown start-->
        
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url(); ?>assets/images/avatar-teacher.png" width="30" height="30">
                <span class="username"><?=$this->session->userdata('nombre')?> <?=$this->session->userdata('apellido')?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo site_url('login_docente/logout_ci'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="<?php echo site_url('docente/index'); ?>">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>Calificaciones</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo site_url('person/agregar_alumnos'); ?>">Agregar</a></li>
                    <li><a href="<?php echo site_url('person/buscar_alumnos'); ?>">Buscar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>Horarios</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo site_url('person/construccion'); ?>">Consultar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-users"></i>
                    <span>Grupos</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo site_url('person/construccion'); ?>">Agregar</a></li>
                    <li><a href="<?php echo site_url('person/construccion'); ?>">Buscar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Reportes</span>
                </a>
                <ul class="sub">
                    <li><a href="<?php echo site_url('person/construccion'); ?>">Agregar</a></li>
                    <li><a href="<?php echo site_url('person/construccion'); ?>">Buscar</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo site_url('person/construccion'); ?>">
                    <i class="fa fa-calendar"></i>
                    <span>Calendario esc.</span>
                </a>
            </li>
        </ul>
    </div>       
<!-- sidebar menu end-->
    </div>
</aside>
<!--right sidebar start-->
<div class="right-sidebar">
    <div class="search-row">
        <input type="text" placeholder="Search" class="form-control">
    </div>
    <div class="right-stat-bar">
    <ul class="right-side-accordion">
    <li class="widget-collapsible">
        <a href="#" class="head widget-head red-bg active clearfix">
            <span class="pull-left">work progress (5)</span>
            <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
        </a>
        <ul class="widget-container">
            <li>
                <div class="prog-row side-mini-stat clearfix">
                    <div class="side-graph-info">
                        <h4>Target sell</h4>
                        <p>
                            25%, Deadline 12 june 13
                        </p>
                    </div>
                    <div class="side-mini-graph">
                        <div class="target-sell">
                        </div>
                    </div>
                </div>
                <div class="prog-row side-mini-stat">
                    <div class="side-graph-info">
                        <h4>product delivery</h4>
                        <p>
                            55%, Deadline 12 june 13
                        </p>
                    </div>
                    <div class="side-mini-graph">
                        <div class="p-delivery">
                            <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                            </div>
                        </div>
                    </div>
                </div>
                
            </li>
        </ul>
    </li>
    <li class="widget-collapsible">
        <a href="#" class="head widget-head terques-bg active clearfix">
            <span class="pull-left">contact online (5)</span>
            <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
        </a>
        <ul class="widget-container">
            <li>
                <div class="prog-row">
                    <div class="user-thumb">
                        <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                    </div>
                    <div class="user-details">
                        <h4><a href="#">Jonathan Smith</a></h4>
                        <p>
                            Work for fun
                        </p>
                    </div>
                    <div class="user-status text-danger">
                        <i class="fa fa-comments-o"></i>
                    </div>
                </div>
                
                
                <p class="text-center">
                    <a href="#" class="view-btn">View all Contacts</a>
                </p>
            </li>
        </ul>
    </li>
    <li class="widget-collapsible">
        <a href="#" class="head widget-head purple-bg active">
            <span class="pull-left"> recent activity (3)</span>
            <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
        </a>
        <ul class="widget-container">
            <li>
                <div class="prog-row">
                    <div class="user-thumb rsn-activity">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="rsn-details ">
                        <p class="text-muted">
                            just now
                        </p>
                        <p>
                            <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                        </p>
                    </div>
                </div>
               
            </li>
        </ul>
    </li>
    <li class="widget-collapsible">
        <a href="#" class="head widget-head yellow-bg active">
            <span class="pull-left"> shipment status</span>
            <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
        </a>
        <ul class="widget-container">
            <li>
                <div class="col-md-12">
                    <div class="prog-row">
                        <p>
                            Full sleeve baby wear (SL: 17665)
                        </p>
                        <div class="progress progress-xs mtop10">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </li>
    </ul>
    </div>
</div>
<!--right sidebar end-->
<!--sidebar end-->
