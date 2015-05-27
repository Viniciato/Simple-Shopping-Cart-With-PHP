<?php
	
	class UserSession extends Base{
		private $email;
		private $password;

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function isAuthenticate(){
			$email_db = 'admin@web.gp.edu.br';
			$password_db = '123456';

			if ($email_db === $this->email && $password_db == $this->password) {
			    $_SESSION['user']['name'] = "Admin";
			    return true;
			}
			return false;
		}

		public static function logout(){
			unset($_SESSION['user']);
		}
	}
?>