<?php
include_once('admin.php');
class Runnersuploads extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
        Load::model('activities');
        $activities = new Activities();

        // Get title event
        $data['eventTitle'] = $activities->getEventName($_GET['idevents']);
        $data['eventName'] = $this->getEventTitle($data['eventTitle']);

        // Get runners info
        $data['runner'] = $activities->getRunnerName($_GET['runnerid']);
		$data['runnerName'] = $this->getRunnersName($data['runner']);
		
		//Get runners uploads per event
		$data['uploadsActivities'] = $activities->getRunnersUploadsByEvent($_GET['idevents'], $_GET['runnerid']);


		Load::view('admin/runners_uploads_vw',$data);
		Load::hook_js('modal');
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

    function getRunnersName($records){
		$runner = '';
		if($records){
			foreach($records as $k=>$v){
				$runner = $v['name'];
			}
		}
		return $runner;
    }



}