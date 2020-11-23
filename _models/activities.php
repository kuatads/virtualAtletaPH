<?php
class Activities{
	function __construct(){
		
	}
	
	function getRunnersUploadsByEvent($eventID, $userID){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM events_progress as a
                INNER JOIN events as b ON b.idevents = a.events_id
                INNER JOIN users as c ON c.ID = a.user_id
			WHERE a.events_id = $eventID and a.user_id = $userID", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
    }

    function getEventName($eventID){
        $db = new DB();
        $stmt = $db->query("SELECT * FROM events
            WHERE idevents = $eventID", array());
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return (empty($result)) ? false : $result;
    }

    function getRunnerName($userID){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM participants as a
                INNER JOIN users as b ON b.ID = a.userID
			WHERE a.userid = $userID", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
    }
 


	

}