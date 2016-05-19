<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
             <div class="row">
            <div class="col-sm-3">
                <section class="panel">
                    <div class="panel-body">
                        <a href="<?php echo site_url('admin/send_student'); ?>"  class="btn btn-compose">
                            Aviso para alumno
                        </a><br><br>
                        <a href="<?php echo site_url('admin/index'); ?>"  class="btn btn-compose">
                            Aviso para docente
                        </a><br><br>

                        <a href="<?php echo site_url('admin/index'); ?>"  class="btn btn-compose">
                            Aviso para Administrativo
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="mail.html"> <i class="fa fa-inbox"></i> Bandeja de entrda <span class="label label-danger pull-right inbox-notification">9</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Enviados</a></li>
                            
                        </ul>
                    </div>
                </section>

               
            </div>
            <div class="col-sm-9">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Bandeja de entrada (34)
                        <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox ">
                                    <input type="checkbox" class="">
                                </div>

                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all">
                                        Todo
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Ninguno</a></li>
                                        <li><a href="#"> Leidos</a></li>
                                        <li><a href="#"> Sin leer</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="<?php echo site_url('admin/notices'); ?>" class="btn mini tooltips">
                                    <i href="<?php echo site_url('admin/notices'); ?>" class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Más
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Marcar como leido</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Eliminados</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Marcar como leido</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Eliminados</a></li>
                                </ul>
                            </div>

                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 124</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <tbody>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message  dont-show"><a href="mail_view.html">ABC Company</a></td>
                                    <td class="view-message "><a href="mail_view.html">Lorem ipsum dolor imit set.</a></td>
                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message  text-right">12.10 AM</td>
                                </tr>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="mail_view.html">Mr Bean</a></td>
                                    <td class="view-message"><a href="mail_view.html">Hi Bro, Lorem ipsum dolor imit</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Jan 11</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="mail_view.html">Jonathan Smith</a></td>
                                    <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                                    <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer adipiscing</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">June 01</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show"><a href="mail_view.html">Tasi man <span class="label label-danger pull-right">urgent</span></a></td>
                                    <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">May 2</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                                    <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer adipiscing</a></td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">March 14</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
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
<script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>

<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.js"></script>

<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>

<script src="<?php echo base_url(); ?>assets/js/iCheck/jquery.icheck.min.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<!--icheck init -->
<script src="<?php echo base_url(); ?>assets/js/icheck-init.js"></script>

</body>
</html>