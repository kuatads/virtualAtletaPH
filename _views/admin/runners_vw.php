
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Users List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User</li>
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
                                                <th>ID No.</th>
                                                <th>Username</th>
                                                <th>Date Registered</th>
                                                <th>Fullname</th>
                                                <th>Contact No.</th>
                                                <th>Email Address</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if($runners) :
                                            foreach($runners as $k=>$v) : ?>
                                            <tr>
                                                <td><?php echo $v['ID']; ?></td>
                                                <td><?php echo $v['username']; ?></td>
                                                <td><?php echo $v['date_added']; ?></td>
                                                <td><?php echo $v['name']; ?></td>
                                                <td><?php echo $v['mobile']; ?></td>
                                                <td><?php echo $v['email']; ?></td>
                                                <td><?php echo $v['address']; ?></td>
                                                <td><?php if($v['status'] == '0'){
                                                    echo '<span class="badge bg-orange"> Not Active </span>';
                                                    } else {
                                                    echo '<span class="badge bg-success"> Active </span>';
                                                    } ?>
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
                                            <?php endforeach;
                                            else: ?>
                                            <tr>
                                                <td colspan="9">No record yet</td>
                                            </tr>
                                            <?php
                                            endif;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                </div>
</div>