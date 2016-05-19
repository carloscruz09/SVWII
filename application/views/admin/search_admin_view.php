<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Buscar Administrativos
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body-->
                         <div class="row">
                            <br>
                            <div class="col-lg-7"></div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="buscar" placeholder="Buscar (Usuario o nombre)">
                            </div>
                            <div class="col-lg-2">
                                <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
                            </div>
                        </div>
                        <hr> 
                        <div class="row">
                            <div  class="adv-table">
                                <table id="listaEmpleados" class="display table table-bordered table-striped"  >

                                </table>
                            </div>
                        </div>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h2 class="modal-title">Editar Administrativo</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-success text-center" id="exito" style="display:none;">
                                        <span class="glyphicon glyphicon-ok"> </span><span> Su cuenta ha sido registrada</span>
                                    </div>
                                            <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>admin_admin/actualizar" method="post" role="form" style="padding:0 10px;">
                                                <div class="form-group">
                                                    <label>Nombre:</label>
                                                    <input type="hidden" id="idsele" name="idsele" value="">
                                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Paterno:</label>
                                                    <input type="text" name="apaterno" id="apaterno" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellido Materno:</label>
                                                    <input type="text" name="amaterno" id="amaterno" class="form-control">
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Fecha de nacimiento:</label> 
                                                    <input type="date" name="fnacimiento" id="fnacimiento"  class="form-control"> 
                                                </div> 
                                                <div class="form-group"> 
                                                    <label>Sexo:</label>
                                                    <select name="sexo" id="sexo" class="form-control">
                                                         <option value="Masculino">Masculino</option>
                                                         <option value="Femenino">Femenino</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Estado civil:</label> 
                                                    <select name="estado_civil" id="estado_civil" class="form-control">
                                                         <option value="Soltero">Soltero</option>
                                                         <option value="Comprometido">Comprometido</option>
                                                         <option value="Casado">Casado</option>
                                                         <option value="Divorciado">Divorciado</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Telefono (Casa):</label> 
                                                    <input type="text" name="tel_casa" id="tel_casa" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control"> 
                                                </div>
                                                <div class="form-group"> 
                                                    <label>Telefono (Celular):</label> 
                                                    <input type="text" name="tel_celular" id="tel_celular" placeholder="(999) 999-9999" data-mask="(999) 999-9999" class="form-control"> 
                                                </div>    
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="email" name="email" id="email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Usuario:</label>
                                                    <input type="text" name="usuario" id="usuario" class="form-control">
                                                </div>
                                            </form>     
                                </div>
                                <div class="modal-footer">  
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <button type="button" id="btnactualizar" class="btn btn-success">Guardar</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

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
<!--Input Mask-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<!--Seccion 2-->
<script src="<?php echo base_url(); ?>assets/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gauge/gauge.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/validation-init.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

</script>
<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>assets/js/dynamic_table_init.js"></script>
<script>

$(document).on("ready",inicio);
 $(document).ready(function() {
    $('#dataAdmin').DataTable();
} );
function inicio(){
   
    mostrarDatos("");
    $("#buscar").keyup(function(){
        buscar = $("#buscar").val();
        mostrarDatos(buscar);
    });
    
    $("#btnbuscar").click(function(){
        mostrarDatos("");
    });
    $("#btnactualizar").click(actualizar);
    $("form").submit(function (event){

        event.preventDefault();

        $.ajax({
            url:$("form").attr("action"),
            type:$("form").attr("method"),
            data:$("form").serialize(),
            success:function(respuesta){
                alert(respuesta);
            }
        });
    });
    $("body").on("click","#listaEmpleados a",function(event){
        event.preventDefault();
        idsele = $(this).attr("href");
        nombre = $(this).parent().parent().children("td:eq(2)").text();
        apaterno = $(this).parent().parent().children("td:eq(3)").text();
        amaterno = $(this).parent().parent().children("td:eq(4)").text();
        fnacimiento = $(this).parent().parent().children("td:eq(5)").text();
        sexo = $(this).parent().parent().children("td:eq(6)").text();
        estado_civil = $(this).parent().parent().children("td:eq(7)").text();
        tel_casa = $(this).parent().parent().children("td:eq(8)").text();
        tel_celular = $(this).parent().parent().children("td:eq(9)").text();
        email = $(this).parent().parent().children("td:eq(10)").text();
        usuario = $(this).parent().parent().children("td:eq(1)").text();

        $("#idsele").val(idsele);
        $("#nombre").val(nombre);
        $("#apaterno").val(apaterno);
        $("#amaterno").val(amaterno);
        $("#fnacimiento").val(fnacimiento);
        $("#sexo").val(sexo);
        $("#estado_civil").val(estado_civil);
        $("#tel_casa").val(tel_casa);
        $("#tel_celular").val(tel_celular);
        $("#email").val(email);
        $("#usuario").val(usuario);
        
    });
    $("body").on("click","#listaEmpleados button",function(event){
        idsele = $(this).attr("value");
        eliminar(idsele);
    });

    
}

function mostrarDatos(valor){
    $.ajax({
        url:"http://127.0.0.1/Proyectos/SVWIIv3/admin_admin/mostrar",
        type:"POST",
        data:{buscar:valor},
        success:function(respuesta){
            //alert(respuesta);
            var registros = eval(respuesta);

            html ="<table id='dataAdmin' class='display' data-page-length='10' data-order='[[ 1, &quot;asc&quot; ]]'>";
            html +="<thead>"; 
            html +="<tr><th>Usuario</th></th><th>Nombre</th><th>A. Paterno</th><th>A. Materno</th><th>Acciones</th></tr>";
            html +="</thead><tbody>";
            for (var i = 0; i < registros.length; i++) {
                html +="<tr><td style='display:none;'>"+registros[i]["id_administrador"]+"</td><td>"+registros[i]["usuario"]+"</td><td>"+registros[i]["nombre"]+"</td><td>"+registros[i]["a_paterno"]+"</td><td>"+registros[i]["a_materno"]+"</td><td style='display:none;'>"+registros[i]["fnacimiento"]+"</td><td style='display:none;'>"+registros[i]["sexo"]+"</td><td style='display:none;'>"+registros[i]["estado_civil"]+"</td><td style='display:none;'>"+registros[i]["tel_casa"]+"</td><td style='display:none;'>"+registros[i]["tel_cel"]+"</td><td style='display:none;'>"+registros[i]["email"]+"</td><td><a href='"+registros[i]["id_administrador"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>E</a> <button class='btn btn-danger' type='button' value='"+registros[i]["id_administrador"]+"'>X</button></td></tr>";
            };
            html +="</tbody>"; 
            html +="</table";
            $("#listaEmpleados").html(html);
        }
    });
}

function actualizar(){
    $.ajax({
        url:"http://127.0.0.1/Proyectos/SVWIIv3/admin_admin/actualizar",
        type:"POST",
        data:$("#form-actualizar").serialize(),
        success:function(respuesta){
            if (respuesta == "Actualizado"){
                    swal("Bien hecho", "Los datos se han actualizado correctamente", "success");
                 }  
                 else {
                    sweetAlert("Oops...", "Al parecer los datos no se han actualizado correctamente", "error");
                 }
            mostrarDatos("");
        }
    });
}

function eliminar(idsele){
    swal({
        title: "Esta usted seguro?",
        text: "Usted no sera capaz de recuperar este registro!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    },
function(){
    $.ajax({
        url:"http://127.0.0.1/Proyectos/SVWIIv3/admin_admin/eliminar",
        type:"POST",
        data:{id:idsele},
        success:function(respuesta){
            swal("Eliminado!", respuesta, "success");
            
            mostrarDatos("");
        }
    });
    
    });
    
}
</script>

</body>
</html>