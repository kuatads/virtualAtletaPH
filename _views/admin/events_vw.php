
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
                <a href="<?php echo SITE_URL.'/admin/events_form' ?>" class="btn btn-default align-items-right"><i class="mdi mdi-library-plus"></i> Add New Event</a>
     
            <hr/>
                <!-- ============================================================== -->
                <!-- Event Cards  -->
                <!-- ============================================================== -->
                
                <div class="row">
                    
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Event Title</th>
                                <th>Event Date (From - To)</th>
                                <th>Progress</th>
                                <th>Activated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php echo !empty($_GET['idevents']) ? SITE_URL.'/uploads/'.$eventPhoto : '' ?>
                            <?php if($_SESSION['user_type'] == 'Administrator' ? $allEvents : $eventlisting) :
                                foreach($_SESSION['user_type'] == 'Administrator' ? $allEvents : $eventlisting as $k=>$v) : ?>
                                <tr>
                                    <td><?php if($v['userID'] == 1){
                                        echo '<i class="fas fa-certificate" aria-hidden="true"></i>';
                                    } else {
                                        
                                    }?></td>
                                    <td><?php echo $v['idevents']; ?></td>
                                    <td><?php echo $v['event_title'] ?></td>
                                    <td><?php echo date("M d, Y", strtotime($v['event_start_date'])).' - '.date("M d, Y", strtotime($v['event_end_date'])); ?></td>
                                    <td><?php
                                        $begin = new DateTime( $v['event_start_date'] );
                                        $end = new DateTime( $v['event_end_date'] );
                                        $end = $end->modify( '+1 day' ); 
                                        
                                        $today = new DateTime(); // Today
                                        //echo $today->format('Y-m-d'); // echos today! 
                                        $eventDateStart = new DateTime($v['event_start_date']);
                                        $eventDateEnd  = new DateTime($v['event_end_date']);

                                        if ($today->getTimestamp() > $eventDateStart->getTimestamp() && $today->getTimestamp() < $eventDateEnd->getTimestamp()){
                                            echo '<span class="badge badge-pill badge-success">Race on progress!</span>';
                                        }elseif ($today->getTimestamp() > $eventDateEnd->getTimestamp()){
                                            echo '<span class="badge badge-pill badge-danger">Event was done!</span>';  
                                        } else {
                                            echo '<span class="badge badge-pill badge-success">Not yet started!</span>';
                                        }?>
                                    </td>
                                    <td><?php if($v['event_status'] == 1){
                                            echo '<span class="badge badge-pill badge-success">Verified</span>';
                                        } elseif ($v['event_status'] == 2) {
                                            echo '<span class="badge badge-pill badge-warning">Declined</span>';
                                        } else {
                                            echo '<span class="badge badge-pill badge-danger">Unverified</span>';
                                        }?>
                                    </td>
                                    <td>
                                        <a href="<?php echo SITE_URL ?>/admin/form_edit?idevents=<?php echo $v['idevents'] ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="<?php echo SITE_URL ?>/admin/eventparticipants?idevents=<?php echo $v['idevents'] ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Participants"><i class="fas fa-users" aria-hidden="true"></i></a>
                                        <?php if($_SESSION['user_type'] == 'Administrator') : ?>
                                            <button id="openModal" data-id="<?php echo $v['idevents']; ?>" class="open-AddBookDialog btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Update Status"><i class="fas fa-thumbs-up" aria-hidden="true"></i></button>
                                        <?php endif; ?>
                                        <button id="btnDeleteEvent" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<div class="modal fade" id="verifyEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" name="form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-control" name="event_status">  
                        <option value="0">Unverified</option>   
                        <option value="1">Verified</option>
                        <option value="2">Declined</option>  
                    </select>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="eventid" id="eventid" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnEventVerify">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>