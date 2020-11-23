<?php
include_once('admin.php');
class User_account extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		
		Load::model('user');
		$user = new User();

		$data = array("successmsg"=>"Welcome to your RunningPH account!");

		$data['myAccount'] = $user->getUserDetails($_SESSION['user_ID']);
		$data['username'] = $this->getUsername($data['myAccount']);
		$data['email'] = $this->getEmail($data['myAccount']);
		$data['profilePic'] = $this->getPhoto($data['myAccount']);
		$data['fullname'] = $this->getFullname($data['myAccount']);
		$data['mobile'] = $this->getMobile($data['myAccount']);
		$data['address'] = $this->getAddress($data['myAccount']);


		Load::view('admin/user_account_vw',$data);
		Load::hook_js('modal');
		Load::hook_footer('userjs');
	}
	
	function getFullname($records){
		$fullname = '';
		if($records){
			foreach($records as $k=>$v){
				$fullname = $v['name'];
			}
		}
		return $fullname;
	}

	function getMobile($records){
		$mobile = '';
		if($records){
			foreach($records as $k=>$v){
				$mobile = $v['mobile'];
			}
		}
		return $mobile;
	}

	function getAddress($records){
		$address = '';
		if($records){
			foreach($records as $k=>$v){
				$address = $v['address'];
			}
		}
		return $address;
	}

	function getUsername($records){
		$username = '';
		if($records){
			foreach($records as $k=>$v){
				$username = $v['username'];
			}
		}
		return $username;
	}

	function getEmail($records){
		$email = '';
		if($records){
			foreach($records as $k=>$v){
				$email = $v['email'];
			}
		}
		return $email;
	}

	function getPhoto($records){
		$photo = '';
		if($records){
			foreach($records as $k=>$v){
				$photo = $v['photo'];
			}
		}
		return $photo;
	}

	// Update User Details in My Account Page
	function updateUser(){
		Load::hook_js('modal');
		Load::model('user');
		$user = new User();

		if ($_POST['fullname'] != ""){
			$user->updateUserDetails($_POST['userid'],$_POST['fullname'],$_POST['contactno'],$_POST['address']);
			echo 1;
		} else {
			echo 0;
		}
		exit();
	}

}