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
       //get totalt topics
       public function getTotalTopics(){
       	$this->db->query('SELECT * FROM topics');
       	$rows=$this->db->resultset();
       	return $this->db->rowCount();
       }
       //get totalt categories
       public function getTotalcategories(){
       	$this->db->query('SELECT * FROM categories');
       	$rows=$this->db->resultset();
       	return $this->db->rowCount();
       }
       //get totalt replies
       public function getTotalReplies($topic_id){
       	$this->db->query('SELECT * FROM replies WHERE topic_id ='.$topic_id);
       	$rows=$this->db->resultset();
       	return $this->db->rowCount();
       }
       //get singel categriy
       public function  getCategory($category_id){
            $this->db->query('SELECT * FROM categories WHERE id =:category_id');
            $this->db->bind(':category_id',$category_id);
            $rows=$this->db->single();
            return $rows;
       }
        public function getByCategory($category_id){
        $this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM 
                    `topics` INNER JOIN `users` ON topics.user_id = users.id
                    INNER JOIN `categories` ON topics.category_id=:category_id");
     
        //grap result
        $this->db->bind(':category_id',$category_id);
        $results = $this->db->resultset();
        return $results; 
      }
       
   }