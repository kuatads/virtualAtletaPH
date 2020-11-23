<?php
class Admin{
	function __construct(){
		// always called first
		ob_start();
		session_start();
		if(!isset($_SESSION)){session_start();}
		$data = array(
				'photo'=>$_SESSION['photo'],
				'user_type'=>$_SESSION['user_type'],
				'username'=>$_SESSION['username'],
				'status'=>$_SESSION['status'],
				'ID'=>$_SESSION['user_ID']
			);
			
		if(!isset($_GET['ajax'])){
			Load::view('partials/admin-header',$data);
			Load::view('partials/admin-sidebar',$data);	
		}		
	}
	function end(){
		Load::view('partials/admin-footer');

	}
	function logout(){
		session_destroy();
		header("Location:".SITE_URL);
	}
	function FIRST(){
		// first to call
		$this->dashboard();
	}
	
	function dashboard(){
		Load::controller('dashboard');	
	}

	function user_account(){
		Load::controller('user_account');
	}

	function event_lists(){
		Load::controller('events');
	}

	function registered_events(){
		Load::controller('runner_events');
	}

	function orders(){
		Load::controller('orders');
	}

	function runners(){
		Load::controller('runners');
	}

	function events_form(){
		Load::controller('events_form');
	}

	function eventparticipants(){
		Load::controller('participants');
	}

	function runners_activities(){
		Load::controller('runnersuploads');
	}

	// Edit Controllers
	function form_edit(){
		Load::edit_form('events_form');
	}

}