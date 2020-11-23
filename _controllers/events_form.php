<?php
include_once('admin.php');
class Events_form extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		//Load Models
		Load::model('event');
		$event = new Event();

		
		Load::view('admin/events_form_vw');
		Load::hook_js('modal');
		Load::hook_footer('backendjs');
	}

	function edit(){
		Load::model('event');
		$event = new Event();

		if ($_GET['idevents'] != ""){ // If form is in EDIT mode
			$data['eventlisting'] = $event->getEventbyID($_GET['idevents']);
				$data['eventTitle'] = $this->getEventTitle($data['eventlisting']);
				$data['eventDesc'] = $this->getEventDesc($data['eventlisting']);
				$data['eventSDate'] = $this->getEventStartDate($data['eventlisting']);
				$data['eventEDate'] = $this->getEventEndDate($data['eventlisting']);
				$data['eventPhoto'] = $this->getEventPhoto($data['eventlisting']);
			
		} else {
			// Load empty form
		}

		Load::view('admin/events_form_vw',$data);
		Load::hook_js('modal');
		Load::hook_footer('backendjs');
	}

	function saveEvent(){
		Load::hook_js('modal');
		Load::model('event');
		$event = new Event();

		if ($_POST['eventtitle'] != ""){
			$event->NewEvent($_POST['userid'],$_POST['eventtitle'],$_POST['eventDesc'],$_POST['eventStartDate'],$_POST['eventEndDate'], $_POST['eventphoto']);
			echo 1;
		} else {
			echo 0;
		}
		exit();
	}

	function getEventTitle($records){
		$eventTitle = '';
		if($records){
			foreach($records as $k=>$v){
				$eventTitle = $v['event_title'];
			}
		}
		return $eventTitle;
	}

	function getEventDesc($records){
		$eventDesc = '';
		if($records){
			foreach($records as $k=>$v){
				$eventDesc = $v['event_description'];
			}
		}
		return $eventDesc;
	}

	function getEventStartDate($records){
		$eventSDate = '';
		if($records){
			foreach($records as $k=>$v){
				$eventSDate = $v['event_start_date'];
			}
		}
		return $eventSDate;
	}

	function getEventEndDate($records){
		$eventEDate = '';
		if($records){
			foreach($records as $k=>$v){
				$eventEDate = $v['event_end_date'];
			}
		}
		return $eventEDate;
	}

	function getEventPhoto($records){
		$eventPhoto = '';
		if($records){
			foreach($records as $k=>$v){
				$eventPhoto = $v['event_photo'];
			}
		}
		return $eventPhoto;
	}




}