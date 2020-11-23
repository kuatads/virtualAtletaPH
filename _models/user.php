<?php
class User{
	function __construct(){
		
	}
	
	function validate_login($data){
		$db = new DB();
		$password = $data['password'];

		$salt = md5($password);
		$password=md5($password.$salt);

		$param = array(
				'username'=>$_POST['username'],
				'password'=>$password
			);
		$stmt = $db->query("SELECT ID, photo, user_type, username, status FROM users WHERE username=:username AND password=:password AND user_type != 'User'",$param);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(empty($result))
			return false;
		else{
			$_SESSION['user_ID'] = $result[0]['ID'];
			$_SESSION['user_type'] = $result[0]['user_type'];
			$_SESSION['photo'] = $result[0]['photo'];
			$_SESSION['username'] = $result[0]['username'];
			$_SESSION['status'] = $result[0]['status'];

			return true;

		}			
	}

	function signup($username, $email, $password){
		$db = new DB();
		$db->set('table_name','users');
		$param['username'] = $username;
		$param['email'] = $email;
		$param['password'] = $password;
		$param['status'] = 0;
		$param['user_type'] = "User";
		$param['date_added'] = date("Y-m-d H:i:s");
		$db->insert($param);
		

	}

	function getAllRunners(){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM users", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
	}

	function getUserDetails($uid){
		$db = new DB();
		$stmt = $db->query("SELECT * FROM users
			WHERE ID = $uid", array());
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return (empty($result)) ? false : $result;
	}
	
	public function updateUserDetails($userID,$fullname,$contactno,$address){
		$db = new DB();
		$q = "UPDATE `users` 
				SET 
					name  	   	=:name,
					mobile 		=:mobile,
					address		=:address,
					status		= '1',
					date_added 	= CURDATE() 
			WHERE ID = $userID";
		$arr = array(
			"name"		=>$fullname, 
			"mobile"   	=>$contactno,
			"address"	=>$address
		);
		if(empty($arr))
			return false;
		else {
			$db->query($q,$arr);
			$_SESSION['status'] = 1;
		}
		
	}

}