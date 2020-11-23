<?php
include_once('admin.php');
class Participants extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
        $data = array("successmsg"=>"Welcome to your RunningPH account!");
        
        Load::model('registrants');
		$registrants = new Registrants();

        $data['eventRegistrants'] = $registrants->getRegistrantsByEvent($_GET['idevents']);

        $data['getEventTitle'] = $registrants->getEventName($_GET['idevents']);
        $data['eventName'] = $this->getEventTitle($data['getEventTitle']);
        $data['paymentSlip'] = $this->getPaymentSlip($data['eventRegistrants']);

		Load::view('admin/participants_vw',$data);
        Load::hook_js('modal');
        Load::hook_footer('backendjs');
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
    
    function verifyPayment(){
		Load::hook_js('modal');
		Load::model('registrants');
		$registrants = new Registrants();

		if ($_POST['payment_status'] == 0){
			$registrants->verifyPayment($_POST['eventid'], $_POST['userid']);
			echo 1;
		} else {
			echo 0;
		}
		exit();
    }
    
    function getPaymentSlip($records){
		$paymentSlip = '';
		if($records){
			foreach($records as $k=>$v){
				$paymentSlip = $v['payment_photo'];
			}
		}
		return $paymentSlip;
	}
	
	



}