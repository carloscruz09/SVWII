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
		 		font-size: 12px;
		 		color: #16a085;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 250px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
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
	<?php
	$username = array('name' => 'username', 'placeholder' => 'Introduce tu usuario');
	$password = array('name' => 'password',	'placeholder' => 'Introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>

    <div class="container">

      <div class="form-signin" >
        <h2 class="form-signin-heading">
        	<img id="logo" src="<?php echo base_url(); ?>assets/images/logo-svwii.png" alt="">
        </h2>

        <div class="login-wrap">
            <div class="user-login-info">
                
               <?=form_open(base_url().'login_alumno/new_user')?>
					<label for="username">Matricula:</label>
					<?=form_input($username)?><p><?=form_error('username')?></p>
					<label for="password">Contraseña:</label>
					<?=form_password($password)?><p><?=form_error('password')?></p>
					<?=form_hidden('token',$token)?>
					<?=form_submit($submit)?>
					<?=form_close()?>
					<?php 
					if($this->session->flashdata('usuario_incorrecto'))
					{
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
					}
					?>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordar me
                <span class="pull-right" id="textoContra">
                    <a data-toggle="modal" href="#myModal"> ¿Has olvidado tu contraseña?</a>
                </span>
            </label>
            

            <div class="registration">
                © 2016 
                <a class="" href="#">
                    SVWII.
                </a>
                Reservados todos los derechos.
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">¿Has olvidado tu contraseña?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Introduce tu dirección de correo para restablecer tu contraseña.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                          <button class="btn btn-success" type="button">Enviar</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </div>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>

  </body>
	
	
</html>