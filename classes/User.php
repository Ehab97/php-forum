<?php
/**
 * summary
 */

class User {
	//init db variable
	private $db;
	public function __construct() {
		$this->db = new Database();
	}
	public function uploadavatar() {
		$allowedExts = array("gif", "jpg", "jpeg", "png");
		$temp = explode(".", $_FILES["avatar"]["name"]);
		$extention = end($temp);

		if ((($_FILES["avatar"]["type"] == "image/gif")
			|| ($_FILES["avatar"]["type"] == "image/jpeg")
			|| ($_FILES["avatar"]["type"] == "image/jpg")
			|| ($_FILES["avatar"]["type"] == "image/pjpeg")
			|| ($_FILES["avatar"]["type"] == "image/x-png")
			|| ($_FILES["avatar"]["type"] == "image/png"))
			&& ($_FILES["avatar"]["size"] < 550000)
			&& in_array($extention, $allowedExts)) {
			if ($_FILES["avatar"]["error"] > 0) {
				redirect('register.php', $_FILES["avatar"]["error"], 'error');
			} else {
				if (file_exists("Templates/images/" . $_FILES["avatar"]["name"])) {
					redirect('register.php', 'file already exist', 'error');
				} else {
					move_uploaded_file($_FILES["avatar"]["tmp_name"],
						"Templates/images/" . $_FILES["avatar"]["name"]);
					return true;
				}
			}
		} else {
			redirect('register.php', 'invalid file ', 'error');
		}
	}
	/*
		   *
	*/
	function register($dataq) {
		$this->db->query('INSERT INTO
		    	              users(name, email, avatar, username, password,about,last_activity)
		                      VALUES
		                      (:name, :email, :avatar, :username, :password, :about, :last_activity)');
		//bind value
		$this->db->bind(':name', $dataq['name']);
		$this->db->bind(':avatar', $dataq['avatar']);
		$this->db->bind(':email', $dataq['email']);
		$this->db->bind(':username', $dataq['username']);
		$this->db->bind(':password', $dataq['password']);
		$this->db->bind(':about', $dataq['about']);
		$this->db->bind(':last_activity', $dataq['last_activity']);
		//execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}
	/*
		* log in message
	*/
	public function setUserData($row) {
		if (!isset($_SESSION)) {session_start();}
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id;
		$_SESSION['username'] = $row->username;
		$_SESSION['name'] = $row->name;
	}
	public function login($username, $password) {
		$this->db->query("SELECT * FROM users WHERE username = :username && password = :password");
		//bind
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $password);

		$row = $this->db->single();
		// $_SESSION['count'] = $this->db->resultset()->rowCount();
		if ($this->db->rowCount() > 0) {
			$_SESSION['userlogin'] = $username;
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}

	public function logout() {
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['name']);

	}
	public function getUserId($username, $password) {
		$this->db->query('SELECT id FROM `users` WHERE username=:username
			and password=:password');
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $password);
		$id = $this->db->single();
		return $id['id'];
	}
	public function gettotalnumofusers() {
		$this->db->query('SELECT * FROM users');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
}