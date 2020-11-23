
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Runners Activities</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Activities</li>
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
                                <h5 class="card-title"><?php echo $eventName .' - ' .$runnerName ?></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Distance (KM)</th>
                                                <th>Time</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if($uploadsActivities) :
                                            foreach($uploadsActivities as $k=>$v) : ?>
                                            <tr>
                                                <td><?php echo $v['event_progress_id'] ?></td>
                                                <td><?php echo $v['date_added'] ?></td>
                                                <td><?php echo $v['distance'] ?></td>
                                                <td><?php echo $v['time'] ?></td>
                                                <td><?php echo $v['progress_photo'] ?></td>
                                                <td>
                                                    <?php if($v['status'] == '1'){
                                                        echo '<span class="badge badge-danger"> <i class=" fas fa-thumbs-down"></i> - Unverified</span>';
                                                        } else {
                                                        echo '<span class="badge badge-success"> <i class=" fas fa-thumbs-up"></i> - Verified</span>';
                                                    } ?>
                                                </td>
                                                <td>
                                                <button id="openModal" 
                                                    data-id="<?php echo $v['event_progress_id']; ?>" 
                                                    data-photo="<?php echo $v['progress_photo']; ?>"
                                                    data-distance="<?php echo $v['distance']; ?>"
                                                    data-time="<?php echo $v['time']; ?>"
                                                    class="open-AddParticipantDiaglog btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="View Logs"><i class="fas fa-eye" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <?php endforeach;
                                            else: ?>
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


<div class="modal fade" id="participantsModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" name="form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Activity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                
                    <img src="<?php echo !empty($paymentSlip) ? SITE_URL.'/uploads/'.$paymentSlip : SITE_URL.'/uploads/npa.jpg';?>" width="100% ">
                   
                        <div class="col-md-6"><p id="amount"></p><p id="datePaid"></p>
                    
                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="userid" id="userid" value="">
                    <input type="hidden" name="eventid" id="eventid" value="<?php echo $_GET['idevents'] ?>">
                    <input type="hidden" name="paymentstatus" id="paymentstatus" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="btnPaymentVerify">Verify</button>
                </div>
            </form>
        </div>
    </div>
</div>