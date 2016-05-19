<?php 
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?> 
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                     <?php echo $output; ?>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->

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

<script src="<?php echo base_url(); ?>assets/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/evnt.calendar.init.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gauge/gauge.js"></script>


<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validation-init.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>




<!--dynamic table initialization -->
<script src="<?php echo base_url(); ?>assets/js/dynamic_table_init.js"></script>

</body>
</html>