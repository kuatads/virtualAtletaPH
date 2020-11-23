<?php
include_once('admin.php');
class Events extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		$data = array("successmsg"=>"Welcome to your RunningPH account!");
		//Load Models
		Load::model('event');
		$event = new Event();

		$data['eventlisting'] = $event->getEventListByEventAdmin($_SESSION['user_ID']);
		$data['allEvents']	= $event->getAllEventLists();

		Load::view('admin/events_vw',$data);
		Load::hook_js('modal');
		Load::hook_footer('backendjs');
	}

	function verifyEvent(){
		Load::hook_js('modal');
		Load::model('event');
		$event = new Event();

		if ($_POST['event_status'] != 0){
			$event->verifyEventStatus($_POST['event_status'], $_POST['eventid']);
			echo 1;
		} else {
			echo 0;
		}
		exit();
	}


}