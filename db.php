<?php
	
	class DB{
		public $connect;
		/*************************/
		/*เก็บข้อมูล*/
		public $result;
		public $record = array();
		/**************************/
		/*connext DB*/
		public $server = 'localhost';
		public $username = 'root';
		public $password = '';
		public $dbname = 'vote_college_w';
		/***********************************/
		public function __construct(){
			/* เริ่มทำงานก่อนเลย ประตู*/
			$this->connect = new mysqli($this->server,$this->username,$this->password,$this->dbname);
			mysqli_set_charset($this->connect,'utf8');
		}

		public function sqlQuery($textsql=''){
			/*$textsql='' = พารามิดเตอร์ */
			if (!empty($textsql)){
				$this->result = $this->connect->query($textsql);
				return $this;
			}else {
				return false;
			}

		}

		public function getStatus(){
			if(!empty($this->result)){
				return true;
			} else {
				return false;
			}
		}

		public function findAll(){
			if (!empty($this->result)) {
				$record = array();
				while ($row = mysqli_fetch_assoc($this->result)) {	
					$record[] = $row;	
				}
				return json_encode($record);	
			} else {
				return false;
			}
		}
		public function find(){
			if (!empty($this->result)) {
				$this->record = mysqli_fetch_object($this->result);
				return json_encode($this->record);
		} else{
			return false;
		}

	}
}


?>