<?php
/**
* Description:	user class. 
*				Return list of users, Single user.
* Author:		Joken E. Villanueva
* Date Created:	May 24,2013
* Date Modified:June 8, 2013		
*/

require_once(LIB_PATH.DS.'database.php');
class User {

	protected static $tbl_name = "users";
	/*-Comon SQL Queries-*/
	function db_fields(){
		global $mydb;
		return $mydb->getFieldsOnOneTable(self::$tbl_name);
	}
	
	function allUsers(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM users");
		$cur = $mydb->loadResultList();
		return $cur;
	}
	function userFilter($id=0,$uname=''){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where user_id= {$id} OR uname= {$uname}");
			$cur = $mydb->loadResultList();
			return $cur;
	}		
	function singleUser($id=0){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name." WHERE user_id={$id} LIMIT 1");
		$row = $mydb->loadSingleResult();
		return $row;
	}
	
	static function Authenticate($uname="", $h_upass=""){
		global $mydb;
		$res=$mydb->setQuery("SELECT * FROM `users` WHERE `uname`='". $uname ."' and `u_pass`='". $h_upass ."' LIMIT 1");
		$rows = $mydb->loadSingleResult();
		 $_SESSION['user_id']    = $rows->user_id;
		 $_SESSION['users_name'] = $rows->users_name;
		 $_SESSION['uname'] 	 = $rows->uname;
		 $_SESSION['u_pass'] 	 = $rows->u_pass;
		 $_SESSION['utype'] 	 = $rows->utype;
		return $rows;	
	}	
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->db_fields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	/*--Create,Update and Delete methods--*/
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tbl_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id=0) {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tbl_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE user_id=". $id;
	  $mydb->setQuery($sql);
	 	if(!$mydb->executeQuery()) return false; 	
		
	}

	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tbl_name;
		  $sql .= " WHERE user_id=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}
	
	
	
	/*--This is an oldCode Method this will serves as a reference for future use---*/
	function oldCode(){
/* 	var $id;
	var $users_name;
	var $uname;
	var $u_pass;
	var $utype;
	var $db_fields = array('user_id','users_name','uname','u_pass','utype');
	
		// Common Database Methods
	public static function loadAllResult() {
		return self::setQuery("SELECT * FROM ".self::$tbl_name);
	
	}
	public static function setQuery($sql="") {
			global $mydb;
			$result_set = $mydb->getQuery($sql);
			
			$object_array = array();
			while ($row = $mydb->fetch_array($result_set)) {
			  $object_array[] = self::instantiate($row);
			}
		return $object_array;
	 
	} 
	 public static function setQuery1($sql="") {
		global $mydb;
		$result_set = $mydb->getQuery($sql);
		return $result_set;
	}  
	 static function singleUser($id=0) {
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name." WHERE user_id={$id} LIMIT 1");
		$results = $mydb->executeQuery();
		$found = $mydb->fetch_array($results);
		return $found;
	}    
		
 	function allUser(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tbl_name);
		$results = $mydb->executeQuery();
		$object_array = array();
			while ($row = $mydb->fetch_array($results)) {
			  $object_array[] = self::instantiate($row);
			}
		return $object_array;
	}  
	static function instantiate($record) {
		// Could check that $record exists and is an array
		$object = new self;
		// Simple, long-form approach:
		  $object->id 			= $record['user_id'];
		 $object->users_name 	= $record['users_name'];
		 $object->uname  	 	= $record['uname'];
		 $object->u_pass 		= $record['u_pass'];
		 $object->utype 		= $record['utype'];
		 
		// More dynamic, short-form approach:
		 foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	public function full_name() {
		if(isset($this->users_name) && isset($this->username)) {
		  return $this->users_name . " " . $this->username;
		} else {
		  return "";
		}
	}
	*/
}	
	
	
}
?>