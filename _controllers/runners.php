<?php
include_once('admin.php');
class Runners extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
        Load::model('user');
        $user = new User();
        
        $data['runners'] = $user->getAllRunners();

		Load::view('admin/runners_vw',$data);
		Load::hook_js('modal');
	}



}