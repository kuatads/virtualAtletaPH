<?php
include_once('admin.php');
class Dashboard extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		$data = array("successmsg"=>"Welcome to your RunningPH account!");

		Load::view('admin/dashboard',$data);
		Load::hook_js('modal');
	}



}