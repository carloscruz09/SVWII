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
                <section>
                  
                      <!-- Start panel body--> 
                        <?php echo $output; ?>
                    
                    <!-- End panel body-->
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
</body>
<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->

<script src="<?php echo base_url(); ?>assets/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript"  src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>

<!--Input Mask-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->


<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    
</body>
</html>