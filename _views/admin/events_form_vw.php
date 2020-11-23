
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add New Event</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Event Form</li>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    
                                    <form action="" name="form" method="POST">
                                        
                                            <b>Event Title</b>
                                            <input type="text" name="eventtitle" id="eventtitle" class="form-control" autocomplete="off" value="<?php echo !empty($_GET['idevents']) ? $eventTitle : '' ?>">

                                            <br/>
                                            <b>Event Details</b>
                                            <!-- Create the editor container -->
                                            <textarea class="form-control" name="eventDesc" id="eventDesc" rows="10" cols="30">
                                                <?php echo !empty($_GET['idevents']) ? $eventDesc : '' ?>
                                            </textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="m-t-15">Start Date</label>
                                                    <div class="input-group">
                                                        <input type="text" name="eventStartDate" class="form-control" id="datepicker-autoclose" placeholder="yyyy-mm-dd" value="<?php echo !empty($_GET['idevents']) ? $eventSDate : '' ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-15">End Date</label>
                                                    <div class="input-group">
                                                        <input type="text" name="eventEndDate" class="form-control" id="datepicker-autoclose-2" placeholder="yyyy-mm-dd" value="<?php echo !empty($_GET['idevents']) ? $eventEDate : '' ?>">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- Uploading Banner Picture --->
                                            <b>Featured Image</b>
                                            <small>Browse Featured Picture (Note** Should be 800 x 300 pixel)</small>
                                            <img src="<?php echo !empty($_GET['idevents']) ? SITE_URL.'/uploads/'.$eventPhoto : '' ?>" class="upload_prev" />
                                                <div class="beforeupload">
                                                <input type="file" class="form-control" id="btnphoto" name="file" />
                                                    <input class="form-control" type="hidden" name="eventphoto" id="eventphoto" value="<?php echo !empty($_GET['idevents']) ? $eventPhoto : '' ?>"/>
                                                <div id="progress" class="progress">
                                                    <div class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" name="userid" value="<?php echo $_SESSION['user_ID']; ?>"/>
                                                    <button type="button" id="<?php echo !empty($_GET['idevents']) ? 'btnUpdateEvent' : 'btnSubmitEvent' ?>" name="<?php echo !empty($_GET['idevents']) ? 'btnUpdateEvent' : 'btnSubmitEvent' ?>" class="btn btn-default align-items-right"><i class="mdi mdi-database"></i> <?php echo !empty($_GET['idevents']) ? 'Update' : 'Save' ?></button>
                                                    <a href="<?php echo SITE_URL ?>/admin/event_lists" class="btn btn-danger align-items-right"><i class="mdi mdi-close"></i> Cancel</a>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>