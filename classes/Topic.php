<?php
   /**
    * summary
    */
   class Topic
   {
       //init db variable
       private $db;
       public function __construct()
       {
        	 $this->db = new Database();   
       }
       //get all topics
       public function getAllTopics(){
       		$this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM 
       						  `topics` INNER JOIN `users` ON topics.user_id = users.id
       						  INNER JOIN `categories` ON topics.category_id=categories.id
       						  ORDER BY 	create_date DESC");
       		$result=$this->db->resultset();
       		return $result;
       }
   }