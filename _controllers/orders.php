<?php
include_once('admin.php');
class Orders extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		$data = array("successmsg"=>"Welcome to your RunningPH account!");

		Load::view('admin/orders_vw',$data);
		Load::hook_js('modal');
	}



}