
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
                        <h4 class="page-title">My Orders</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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
            
                <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#00011</td>
                                                <td>July 23, 2020</td>
                                                <td>Paid</td>
                                                <td>P 1,500.00</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                        <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">View Details</a>
                                                        <a class="dropdown-item" href="#">Activity Records</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Link for the Completed</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#00012</td>
                                                <td>July 22, 2020</td>
                                                <td>Pending</td>
                                                <td>P 1,100.00</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                        <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">View Details</a>
                                                        <a class="dropdown-item" href="#">Activity Records</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Link for the Completed</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                </div>
</div>