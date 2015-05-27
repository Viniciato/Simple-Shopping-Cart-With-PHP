<?php

	abstract class Base{

		protected $errors;
		private $id;

		public function __construct($data = []){

			foreach($data as $key => $value){
				$method = "set{$key}";
				$this->$method(trim($value));
			}
			$this->errors = [];

		}

		public function getErrors($index){
			if(isset($this->errors[$index]))
				return $this->errors[$index];
			return false;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function validations(){}

		public function isValid(){
			$this->errors = [];
			$this->validations();
			return empty($this->errors);
		}
	}
?>