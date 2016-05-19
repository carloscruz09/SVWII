<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        AGREGAR ALUMNO
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body--> 
                      <form class="form-horizontal" name="formulario" role="form" action="<?php echo site_url('admin_student/add_student'); ?>" method="post">
                        <div class="row"> 
                            <div class="col-xs-12">
                                 <legend>Información del Alumno</legend>
                            </div> 
                            <div class="col-xs-4">
                                <label>Nombre:</label> 
                                <input name="nombre" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas">
                                <input name="perfil" type="hidden" value="alumno" class="form-control"> 
                            </div>

                             <div class="col-xs-4"> 
                                <label>Fecha de inscripción:</label> 
                                <input name="finscripcion" type="date" class="form-control"> 
                            </div>

                             <div class="col-xs-4"> 
                                 <label>Email:</label> 
                                 <input name="email" type="email" class="form-control">
                                 <br> 
                             </div> 

                             <div class="clearfix">
                                </div> 
                                    <div class="col-xs-4"> 
                                        <label>Apellido Paterno:</label> 
                                        <input name="apaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label>Status:</label> 
                                        <select name="status" class="form-control">
                                             <option value="1">Activo</option>
                                             <option value="0">Inactivo</option>                                             
                                        </select> 
                                    </div>  
                                    <div class="col-xs-4"> 
                                        <label>Matricula del alumno:</label><br>  
                                        <input name="matricula" type="text"  class="form-control" required>
                                        <br> 
                                    </div>

                                <div class="clearfix"></div> 
                                    <div class="col-xs-4"> 
                                        <label>Apellido Materno:</label> 
                                        <input name="amaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label>Grupo:</label> 
                                        <select name="grupo" class="form-control">
                                             <option value="1">1-A</option>
                                             <option value="2">1-B</option>
                                             <option value="3">2-A</option>
                                             <option value="4">2-B</option> 
                                             <option value="5">3-A</option>
                                             <option value="6">3-B</option>                                              
                                        </select> 
                                    </div>  
                                    <div class="col-xs-4"> 
                                        <label>Contraseña:</label> 
                                        <input name="password" class="form-control " id="password" name="password" type="password" required>
                                        <br> 
                                    </div> 
                                    <div class="clearfix"></div> <!--Salto-->
                                    <div class="col-xs-4"> 
                                        <label>Sexo:</label>
                                        <select name="sexo" class="form-control">
                                         <option value="Masculino">Masculino</option>
                                         <option value="Femenino">Femenino</option>
                                        </select> 
                                    </div>  
                                    <div class="col-xs-4">  
                                        <label>Telefono (Casa):</label>    
                                        <input name="tel_casa" type="text" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control">
                                    </div> 
                                   <div class="col-xs-4"> 
                                        <label>Repetir contraseña:</label> 
                                        <input class="form-control " id="confirm_password" name="confirm_password" type="password" required>
                                        <br>
                                    </div> 
                                     <div class="clearfix"></div><!--Salto-->
                                     <div class="col-xs-4"> 
                                        <label>Fecha de nacimiento:</label> 
                                        <input name="fnacimiento" type="date" class="form-control"> 
                                    </div>
                                     <div class="col-xs-4">  
                                        <label>Telefono (Celular):</label>    
                                        <input name="tel_celular" type="text" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control">
                                    </div> 
                                    <div class="col-xs-4">
                                       <br>
                                    </div>
                                    <div class="clearfix"></div>  <!--Salto-->
                                     <div class="col-xs-4"> 
                                        <br> 
                                        <label>CURP:</label>    
                                        <input name="curp" type="text" placeholder="" data-mask="aaaa-999999-a-aa-aaa-99" class="form-control">
                                    </div> 
                                    <div class="col-xs-4">
                                         <br> 
                                         <label>Dirección:</label><br>  
                                         <textarea name="direccion" class="form-control" rows="3" cols="30"></textarea>
                                    </div> 
                                    <div class="col-xs-4"> 
                                        
                                        <br>
                                    </div>
                                     

                                    <div class="clearfix"></div>
                                    <!--Información del tutor ///////////////////////////////////////////// -->
                                    <div class="col-xs-12">
                                        <legend>Información del Tutor</legend>
                                    </div>       
                                    <div class="clearfix"></div>
                                    <div class="col-xs-4"> 
                                        <label>Nombre:</label> 
                                        <input name="tutor_nombre" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div>
                                    <div class="col-xs-4"> 
                                        <label>Apellido Paterno:</label> 
                                        <input name="tutor_apaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas"> 
                                    </div>
                                    <div class="col-xs-4"> 
                                        <label>Apellido Materno:</label> 
                                        <input name="tutor_amaterno" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas">
                                        <br> 
                                    </div>  
                                    <div class="col-xs-4"> 
                                        <label>Sexo:</label>
                                        <select name="tutor_sexo" class="form-control">
                                             <option value="Masculino">Masculino</option>
                                             <option value="Femenino">Femenino</option>
                                        </select> 
                                    </div>  
                                    <div class="col-xs-4">  
                                        <label>Telefono (Celular):</label>    
                                        <input name="tutor_telefono" type="text" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control">
                                    </div> 
                                    <div class="col-xs-4"> 
                                        <label>Empresa:</label> 
                                        <input name="tutor_empresa" type="text" class="form-control" pattern="\S{1,30}[A-Za-z ]+" title="Solo se aceptan letras mayusculas y minusculas">
                                        <br> 
                                    </div>
                                     <div class="clearfix">
                                    <div class="col-xs-4"> 
                                        <label>Dirección:</label> 
                                        <textarea name="tutor_direccion" class="form-control" rows="3" cols="30"></textarea> 
                                    </div>
                                    <div class="col-xs-4">  
                                    </div>
                                    <div class="col-xs-4"> 
                                        <br><br><br><br><br><br> 
                                    </div>   
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
                    swal("Bien hecho", "El alumno se ha registrado correctamente", "success");
                 }  
                 else {
                    sweetAlert("Oops...", "Al parecer la matricula ya esta registrada", "error");
                 }
            }
        });
    });
    function cifrar(){

            var input_pass = document.getElementById("password");
            input_pass.value = sha1(input_pass.value);
        }
}
</script>
</body>
</html>
