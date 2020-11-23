<?php
class Event{
	function __construct(){
		
	}
	
	function NewEvent($userID, $eventTitle, $eventDesc, $eventSDate, $eventEDate, $featuredImg){
		$db = new DB();
		$db->set('table_name','events');
		$param['userID'] = $userID;
		$param['event_title'] = $eventTitle;
		$param['event_description'] = $eventDesc;
        $param['event_start_date'] = $eventSDate;
        $param['event_end_date'] = $eventEDate;
		$param['event_status'] = 0;
		$param['event_photo'] = $featuredImg;
		$param['event_date_added'] = date("Y-m-d H:i:s");
		$db->insert($param);
	}

	function getAllEventLists(){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM events
			WHERE isDeleted = 0", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
	}

	function getEventListByEventAdmin($userID){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM events
			WHERE userID = $userID and isDeleted = 0", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
	}

	function getEventbyID($eventID){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM events where idevents = $eventID", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
	}

	public function verifyEventStatus($verifyStatus,$idevent){
		$db = new DB();
		$q = "UPDATE `events` 
			SET 
					event_status =:event_status
			WHERE 	idevents =:idevent";
		$arr = array(
			"idevent"		=>$idevent, 
			"event_status"   =>$verifyStatus
		);
		$db->query($q,$arr);
	}

	

}