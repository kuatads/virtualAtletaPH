
 <div class="page-wrapper">
    <?php if($_SESSION['status'] == 0) : ?>
        <div id="errmsg" class="alert alert-danger alert-dismissible">Your account is still not active! Please complete all your details by completing your information in <a href="<?php echo SITE_URL.'/admin/user_account' ?>">My Account</a></div>
    <?php endif; ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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

            <?php if ($_SESSION['user_type'] == 'Administrator') { ?>
             <!-- Administrator Dashboard -->
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Quick View</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                    <div class="row">
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-cyan text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                                    <h6 class="text-white">Dashboard</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-4 col-xlg-3">
                                            <div class="card card-hover">
                                            <a href="<?php echo SITE_URL.'/admin/runners'; ?>">
                                                <div class="box bg-success text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                                    <h6 class="text-white">Users</h6>
                                                </div>
                                            </a>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <a href="<?php echo SITE_URL.'/admin/event_lists'; ?>">
                                                    <div class="box bg-warning text-center">
                                                        <h1 class="font-light text-white"><i class="mdi mdi-run"></i></h1>
                                                        <h6 class="text-white">Events</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-danger text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-cart-outline"></i></h1>
                                                    <h6 class="text-white">Orders</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                                    <h6 class="text-white">Shippings</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-4 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-danger text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                                    <h6 class="text-white">Race on Progress</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                                    <h6 class="text-white">Charities</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-cyan text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-message-text-outline"></i></h1>
                                                    <h6 class="text-white">Messages</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-success text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                                    <h6 class="text-white">Calendar</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-6 col-lg-2 col-xlg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-warning text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                                    <h6 class="text-white">Support</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                    </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">2540</h5>
                                                   <small class="font-light">Total Runners</small>
                                                </div>
                                            </div>
                                             <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-plus m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">120</h5>
                                                   <small class="font-light">New Runners</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">656</h5>
                                                   <small class="font-light">Total Orders</small>
                                                </div>
                                            </div>
                                             <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-tag m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">9540</h5>
                                                   <small class="font-light">Total Registered</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-table m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">100</h5>
                                                   <small class="font-light">Pending Orders</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-globe m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Total Donations</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php } else { ?>
                <div class="row">
                     <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo SITE_URL.'/admin/event_lists'; ?>">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-run"></i></h1>
                                    <h6 class="text-white">Events</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-cart-outline"></i></h1>
                                <h6 class="text-white">Orders</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Shippings</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Race on Progress</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-message-text-outline"></i></h1>
                                <h6 class="text-white">Messages</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6 class="text-white">Support</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>  

            <?php } ?>


</div>