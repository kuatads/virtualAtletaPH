<!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo SITE_URL ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $("#signupform").hide();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();

    });
    $('#to-login').click(function(){
        $("#signupform").hide();
        $("#recoverform").hide();
        $("#loginform").fadeIn();

    });
    $('#to-signup').click(function(){
        $("#loginform").hide();
        $("#recoverform").hide();
        $("#signupform").fadeIn();

    });
    $('#back-to-login').click(function(){
        $("#signupform").hide();
        $("#recoverform").hide();
        $("#loginform").fadeIn();

    });
    </script>

</body>
    <?php Load::do_css(); ?>
    <?php Load::do_js(); ?>
    <?php Load::do_footer(); ?>
</html>