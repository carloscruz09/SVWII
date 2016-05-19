
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Portal de <?=$this->session->userdata('perfil')?>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                      <!-- Start panel body-->
                    <div class="col-md-3">
                        <div class="mini-stat clearfix">
                            <span class="mini-stat-icon orange"><i class="fa fa-user"></i></span>
                            <div class="mini-stat-info">
                                <span><?php echo $administradores;?></span>                                           
                                Administrativos 
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon tar"><i class="fa fa-user"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo $profesores;?></span>
                                    Docentes
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon pink"><i class="fa fa-user"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo $alumnos;?></span>
                                    Alumnos
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mini-stat clearfix">
                                <span class="mini-stat-icon green"><i class="fa fa-users"></i></span>
                                <div class="mini-stat-info">
                                    <span><?php echo $usuarios;?></span>
                                    Usuarios totales
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-8">
                                <div class="event-calendar clearfix">
                                    <div class="col-lg-7 calendar-block">
                                        <div class="cal1 ">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 event-list-block">
                                        <div class="cal-day">
                                            <span>Today</span>
                                            Friday
                                        </div>
                                        <ul class="event-list">
                                            <li>Lunch with jhon @ 3:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Coffee meeting with Lisa @ 4:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Skypee conf with patrick @ 5:45 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Gym @ 7:00 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>
                                            <li>Dinner with daniel @ 9:30 <a href="#" class="event-close"><i class="ico-close2"></i></a></li>

                                        </ul>
                                        <input type="text" class="form-control evnt-input" placeholder="NOTES">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <!-- Reloj con alarma-->
                            <div class="col-md-4">
                                <div class="profile-nav alt">
                                    <section class="panel">
                                        <div class="user-heading alt clock-row terques-bg">
                                            <h1>December 14</h1>
                                            <p class="text-left">2014, Friday</p>
                                            <p class="text-left">7:53 PM</p>
                                        </div>
                                        <ul id="clock">
                                            <li id="sec"></li>
                                            <li id="hour"></li>
                                            <li id="min"></li>
                                        </ul>

                                        <ul class="clock-category">
                                            <li>
                                                <a href="#" class="active">
                                                    <i class="ico-clock2"></i>
                                                    <span>Clock</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ico-alarm2 "></i>
                                                    <span>Alarm</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ico-stopwatch"></i>
                                                    <span>Stop watch</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class=" ico-clock2 "></i>
                                                    <span>Timer</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </section>

                                    </div>
                                </div>
                                <!-- Reloj con alarma-->
                        </div>     
                        
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
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery-steps/jquery.steps.js"></script>
<!--Seccion 2-->
<script src="<?php echo base_url(); ?>assets/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/evnt.calendar.init.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gauge/gauge.js"></script>

<!--clock init-->
<script src="<?php echo base_url(); ?>assets/js/css3clock/js/css3clock.js"></script>

<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/js/morris-chart/morris.js"></script>
<script src="<?php echo base_url(); ?>assets/js/morris-chart/raphael-min.js"></script>

<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/validation-init.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>


<!--common script init for all pages


<script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>

-->

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>



</script>
<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>assets/js/dynamic_table_init.js"></script>

</body>
</html>








