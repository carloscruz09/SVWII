<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="ThemeBucket">
	    <link rel="shortcut icon" href="images/favicon.png">

	    <title>Login</title>

	    <!--Core CSS -->
	    <link href="<?php echo base_url(); ?>assets/bs3/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	   

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
	    <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #16a085;
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		border: 8px solid #16a085;		 		
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: #16a085;
		 		font-weight: bold;
		 	}
		 	
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 	#logo{
		 		width: 275px;
		 		height: 80px;
		 	}
		 	
		 </style>
	    
	</head>
	
<body class="login-body">

    <div class="container">

      <div class="form-signin" >
        <h2 class="form-signin-heading">
        	<img id="logo" src="<?php echo base_url(); ?>assets/images/logo-svwii3.png" alt="">
        </h2>

        <div class="login-wrap">
            <div class="user-login-info">
            	<label for="username">Ingresar como:</label>
            	<a href="<?php echo site_url('login_admin/index'); ?>">
                	<button class="btn btn-lg btn-login btn-block" type="button">Administrativo</button>
                </a>
                <a href="<?php echo site_url('login_docente/index'); ?>">
                	<button class="btn btn-lg btn-login btn-block" type="button">Docente</button>
                </a>
                <a href="<?php echo site_url('login_alumno/index'); ?>">
                	<button class="btn btn-lg btn-login btn-block" type="button">Alumno</button>
               	</a>
            </div>

            <div class="registration">
                © 2016 
                <a class="" href="#">
                    SVWII.
                </a>
                Reservados todos los derechos.
            </div>

        </div>

      </div>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>

  </body>
	
	
</html>