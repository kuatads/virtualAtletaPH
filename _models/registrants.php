<?php
class Registrants{
	function __construct(){
		
	}
	
	function getRegistrantsByEvent($eventID){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM participants as a
                INNER JOIN events as b ON b.idevents = a.eventid
                INNER JOIN users as c ON c.ID = a.userid
                INNER JOIN events_payment as d ON d.userid = a.userid
			WHERE a.eventid = $eventID", array());
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

    function getPaymentDetails($eventID, $userID){
        $db = new DB();
        $stmt = $db->query("SELECT * FROM events_payment as a
            INNER JOIN events as b ON b.idevents = a.eventid
            INNER JOIN users as c ON c.ID = a.userid
        WHERE a.eventid = $eventID AND a.userid = $userID", array());
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return (empty($result)) ? false : $result;
    }

    function verifyPayment($idevent,$userid){
		$db = new DB();
		$q = "UPDATE `participants` 
			SET 
					payment_status =:payment_status
			WHERE 	eventid =:eventid AND userid=:userid";
		$arr = array(
            "eventid"		    => $idevent, 
            "userid"            => $userid,
			"payment_status"    => 1
		);
		$db->query($q,$arr);
	}


	

}