</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo SITE_URL ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo SITE_URL ?>/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

        
    <script type="text/javascript">
    jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    
    jQuery('#datepicker-autoclose-2').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
    </script>

    <script type="text/javascript">
      $('#eventDesc').wysihtml5();
    </script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        $(document).on("click", ".open-AddBookDialog", function () {
            // events_vw
            var eventid = $(this).data('id');
            $(".modal-footer #eventid").val(eventid);

            //open the modal
            $("#verifyEventModal").modal("show");
        });
    </script>

    <script>
        $(document).on("click", ".open-AddParticipantDiaglog", function () {
            //participants_vw
            var userid = $(this).data('id');
            $(".modal-footer #userid").val(userid);

            var paymentStatus = $(this).data('payment');
            $(".modal-footer #paymentstatus").val(paymentStatus);

            var date_paid = $(this).data('paid');
            document.getElementById("datePaid").innerHTML = 'Date Paid: ' + date_paid;

            var amount_paid = $(this).data('amount');
            document.getElementById("amount").innerHTML = 'Amount Paid: ' + amount_paid;

            //open the modal
            $("#participantsModal").modal("show");
        });
    </script>

    <script>
        $('#show-password').on('click',function(){
            var curPassword = 'text';
            document.getElementByID("current-password").type(curPassword);
            return false;
        });
    </script>

</body> 
  <?php Load::do_css(); ?>
  <?php Load::do_js(); ?>
  <?php Load::do_footer(); ?>

</html>