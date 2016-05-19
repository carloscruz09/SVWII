<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        AGREGAR MATERIA
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body--> 
                    <form class="form-horizontal" name="formulario" role="form" action="<?php echo site_url('admin_subject/add_subject'); ?>" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                 <legend>Información de la materia</legend>
                            </div>  
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Clave de materia:</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cve_materia" name="cve_materia" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Nombre de materia:</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="materia" name="materia" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Tipo de materia:</label>
                                        <div class="col-lg-6">
                                             <select name="tipo_materia" class="form-control">
                                                 <option value="Masculino">Tronco comun</option>
                                                 <option value="Femenino">Especialidad</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Profesor:</label>
                                        <div class="col-lg-6">
                                             <select name="cve_profesor" class="form-control">
                                                 <option value="D11560111">Carlos Cruz</option>
                                                 <option value="D11560112">Alberto Medrano</option>
                                            </select> 
                                        </div>
                                    </div>
                                                                    

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                            <input  class="btn btn-warning" type="reset" value="Limpiar">
                                        </div>
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
                    swal("Bien hecho", "La materia se ha registrado correctamente", "success");
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
