<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        AGREGAR ADMINISTRATIVO
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body--> 
                         <form class="form-horizontal" name="formulario" role="form" action="<?php echo site_url('admin_admin/add_admin'); ?>" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                 <legend>Información del administrativo</legend>
                            </div>  
                            <div class="col-xs-4"> 
                                <label for="input-@gray-base">Nombre:</label> 
                                <input name="nombre" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas">
                                <input name="perfil" type="hidden" value="administrador" class="form-control"> 
                            </div>

                            <div class="col-xs-4"> 
                                <label for="input-@gray-darker">Sexo:</label>
                                <select name="sexo" class="form-control">
                                 <option value="Masculino">Masculino</option>
                                 <option value="Femenino">Femenino</option>
                                </select> 
                             </div> 

                             <div class="col-xs-4"> 
                                 <label for="input-@gray-dark">Email:</label> 
                                 <input name="email" type="email" class="form-control">
                                 <br> 
                             </div> 

                             <div class="clearfix">
                                </div> 
                                    <div class="col-xs-4"> 
                                        <label for="input-@gray">Apellido Paterno:</label> 
                                        <input name="apaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label for="input-@gray-light">Estado civil:</label> 
                                        <select name="estado_civil" class="form-control">
                                             <option value="Soltero">Soltero</option>
                                             <option value="Comprometido">Comprometido</option>
                                             <option value="Casado">Casado</option>
                                             <option value="Divorciado">Divorciado</option>
                                        </select> 
                                    </div>  
                                    <div class="col-xs-4"> 
                                        <label for="input-@gray-lighter">Usuario:</label><br>  
                                        <input name="matricula" type="text"  class="form-control" required>
                                        <br> 
                                    </div>

                                <div class="clearfix"></div> 
                                    <div class="col-xs-4"> 
                                        <label for="input-@brand-primary">Apellido Materno:</label> 
                                        <input name="amaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label for="input-@brand-success">Telefono (Casa):</label> 
                                        <input name="tel_casa" type="text" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control"> 
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label for="input-@brand-info">Contraseña:</label> 
                                        <input name="password" class="form-control " id="password" name="password" type="password" required>
                                        <br> 
                                    </div> 
                                    <div class="clearfix"></div> 
                                    <div class="col-xs-4"> 
                                        <label>Fecha de nacimiento:</label> 
                                        <input name="fnacimiento" type="date" class="form-control"> 
                                    </div> 
                                    <div class="col-xs-4">  
                                        <label>Telefono (Celular):</label>    
                                        <input name="tel_celular" type="text" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control">
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label>Repetir contraseña:</label> 
                                        <input class="form-control " id="confirm_password" name="confirm_password" type="password" required>
                                    </div>
                                    <div class="clearfix"></div> 
                                     <div class="col-xs-4"> 
                                        <br><button class="btn btn-primary" type="submit" value="Registrar">Guardar</button>
                                    </div>
                                     <div class="col-xs-4">
                                    </div>
                                    <div class="col-xs-4">
                                         <br><input  class="btn btn-warning" type="reset" value="Limpiar">
                                    </div>
                                </div>
                        </form>
                        
                    </div>
                    <!-- End panel body-->
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo base_url(); ?>assets/js/resourcejs/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>

<!--Seccion 2-->
<script src="<?php echo base_url(); ?>assets/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--Input Mask-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/validation-init.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>


<script>
$(document).on("ready",inicio);

function inicio(){
    $("form").submit(function (event){

        event.preventDefault();

        $.ajax({
            url:$("form").attr("action"),
            type:$("form").attr("method"),
            data:$("form").serialize(),
            success:function(respuesta){
                if (respuesta == "ok"){
                    swal("Bien hecho", "El personal administrativo se ha registrado correctamente", "success");
                 }  
                 else {
                    sweetAlert("Oops...", "Al parecer la matricula ya esta registrada", "error");
                 }
            }
        });
    });
    
}
</script>
</body>
</html>