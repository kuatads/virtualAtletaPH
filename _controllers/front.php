<?php

class Front{
	function __construct(){
		// always called first
		session_start();
	}
	function end(){
		// always called last
		Load::view('partials/footer');
	}
	function FIRST(){
		// first to call
		Load::hook_js('modal');
		
		$this->login();
	}

	public function login(){
		$param=array();
		if(isset($_POST['username'])) {
			Load::model('user');
			$User = new User();			
			if( $User->validate_login($_POST) )
				Load::redirect('admin/dashboard');
			else
				$param = array("msg"=>"Wrong username and password");
		}
		Load::view('partials/header');
		Load::view('front/login',$param);
		Load::hook_footer('frontjs');
	}

	private function encrypt_decrypt($action, $string) {
	    $output = false;

	    $encrypt_method = "AES-256-CBC";
	    $secret_key = SECRET_KEY;
	    $secret_iv = SECRET_IV;

	    // hash
	    $key = hash('sha256', $secret_key);
	    
	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);

	    if( $action == 'encrypt' ) {
	        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	        $output = base64_encode($output);
	    }
	    else if( $action == 'decrypt' ){
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }

	    return $output;
	}

	public function signup(){
		Load::hook_js('modal');
		Load::model('user');
		$salt = md5($_POST['new_password']);
		$User = new User();
		if ($_POST['new_password'] == $_POST['confirm_password']) {
			$User->signup($_POST['uname'], $_POST['email'], md5($_POST['new_password'].$salt));
			echo 1; // Success
		} else {
			echo 0; // Error	
		}
		exit();
	}
}