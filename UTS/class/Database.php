<?php

class Database {

   private $host  = 'localhost';
   private $user  = 'root';
   private $pass  = '';
   private $db    = 'inventory';

   protected $connection;

   public function __construct()
   {
      if (!isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
   }

}