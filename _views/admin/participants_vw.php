
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Participants</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Participants</li>
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
                                <h5 class="card-title"><?php echo $eventName; ?></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Fullname</th>
                                                <th>Progress</th>
                                                <th>Date Registered</th>
                                                <th>Contact No.</th>
                                                <th>Email Address</th>
                                                <th>Verify Payment</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if($eventRegistrants) :
                                            foreach($eventRegistrants as $k=>$v) : ?>
                                            <tr>
                                                <td><?php echo $v['ID']; ?></td>
                                                <td><?php echo $v['name']; ?></td>
                                                <td>
                                                    <small class="float-left">0% &nbsp;</small>
                                                    <div class="progress m-t-5">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><?php echo $v['date_added']; ?></td>
                                                <td><?php echo $v['mobile']; ?></td>
                                                <td><?php echo $v['email']; ?></td>
                                                <td><?php if($v['payment_status'] == '0'){
                                                    echo '<span class="badge badge-danger"> <i class=" fas fa-thumbs-down"></i> - Unverified</span>';
                                                    } else {
                                                    echo '<span class="badge badge-success"> <i class=" fas fa-thumbs-up"></i> - Verified</span>';
                                                    } ?>
                                                <td>
                                                    <button id="openModal" 
                                                    data-payment="<?php echo $v['payment_status'] ?>" 
                                                    data-id="<?php echo $v['ID']; ?>" 
                                                    data-slip="<?php echo $v['payment_photo']; ?>"
                                                    data-amount="<?php echo $v['amount_paid']; ?>"
                                                    data-paid="<?php echo $v['date_paid']; ?>"
                                                    class="open-AddParticipantDiaglog btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="View Payment"><i class="fas fa-eye" aria-hidden="true"></i></button>
                                                    <a href="<?php echo SITE_URL ?>/admin/runners_activities?idevents=<?php echo $v['eventid'] ?>&&runnerid=<?php echo $v['ID'] ?>" id="btnRunUploads" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Runners Uploads"><i class="fas fa-upload" aria-hidden="true"></i></a>
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
                                <hr>
                                <a class="btn btn-secondary float-right" href="<?php echo SITE_URL ?>/admin/event_lists"><i class="fas fa-backward"></i> Back</a>
                            </div>
                        </div>
                </div>
</div>


<div class="modal fade" id="participantsModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" name="form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Payment</h5>
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