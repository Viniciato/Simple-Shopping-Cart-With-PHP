<?php

	class Contact extends Base{
		private $name;
		private $email;
		private $message;

		public function setName($name){
			$this->name = $name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setMessage($message){
			$this->message = $message;
		}

		public function getName(){
			return $this->name;
		}
		
		public function getEmail(){
			return $this->email;
		}

		public function getMessage(){
			return $this->message;
		}

		public function validations(){
			Validations::notEmpty($this->name, 'name', $this->errors);
  			Validations::validEmail($this->email, 'email', $this->errors);
  			Validations::notEmpty($this->message, 'message', $this->errors);		
		}

		public function save(){
			if(!$this->isValid()) return false;

			$db = new PDO('mysql:host=localhost;dbname=contact_pi2', "root", "mysql");
			$params = [$this->name, $this->email, $this->message];
			$sql = "INSERT INTO contacts(name, email, message) VALUES (?, ?, ?)";
			$statement = $db->prepare($sql);
			$statement->execute($params);

			echo "ok";

			$temp = $statement->fetch(PDO::FETCH_ASSOC);
			print_r($temp);
			echo "<br>";
			print($db->lastInsertId());
			exit;

			

			return true;
		}
	}
?>