
 <div class="page-wrapper">
    <?php if($_SESSION['status'] == 0) : ?>
        <div id="errmsg" class="alert alert-danger alert-dismissible">Activate your account by completing all the details!</div>
    <?php endif; ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Event Listings</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Event Listings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Event Cards  -->
                <!-- ============================================================== -->
                <h4 class="page-title">Your On-going progress</h4>
                <div class="row">
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo SITE_URL.'/uploads/sample/card_img.png' ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card     </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Upcoming Events -->
                <hr/>
                <h4 class="page-title">Your Up-coming events</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo SITE_URL.'/uploads/sample/card_img.png' ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card     </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo SITE_URL.'/uploads/sample/card_img.png' ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card     </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Your past Events -->
                 <hr/>
                <h4 class="page-title">Your past events events</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo SITE_URL.'/uploads/sample/card_img.png' ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card     </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo SITE_URL.'/uploads/sample/card_img.png' ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card     </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</div>