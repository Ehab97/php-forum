<?php
/**
 * summary
 */
class Topic {
	//init db variable
	private $db;
	public function __construct() {
		$this->db = new Database();
	}
	//get all topics
	public function getAllTopics() {
		$this->db->query("SELECT topics.*,users.username,users.avatar,categories.name FROM
       						        `topics` INNER JOIN `users` ON topics.user_id = users.id
       						        INNER JOIN `categories` ON topics.category_id=categories.id
       						        ORDER BY 	create_date DESC");
		$result = $this->db->resultset();
		return $result;
	}
	//get totalt topics
	public function getTotalTopics() {
		$this->db->query('SELECT * FROM topics');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
	//get totalt categories
	public function getTotalcategories() {
		$this->db->query('SELECT * FROM categories');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
	//get totalt replies
	public function getTotalReplies($topic_id) {
		$this->db->query('SELECT * FROM replies WHERE topic_id =' . $topic_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
	//get singel categriy
	public function getCategory($category_id) {
		$this->db->query('SELECT * FROM categories WHERE id =:category_id');
		$this->db->bind(':category_id', $category_id);
		$rows = $this->db->single();
		return $rows;
	}
	public function getUser($user_id) {
		$this->db->query('SELECT * FROM users WHERE id =:user_id');
		$this->db->bind(':user_id', $user_id);
		$rows = $this->db->single();
		return $rows;
	}
	public function getByCategory($category_id) {
		$this->db->query("SELECT topics.*,categories.*,users.username,users.avatar FROM
                         `topics` INNER JOIN `users` ON topics.user_id = users.id
                          INNER JOIN `categories` ON topics.category_id=categories.id
                          WHERE topics.category_id=:category_id");
		//grap result
		$this->db->bind(':category_id', $category_id);
		$results = $this->db->resultset();
		return $results;
	}
	public function getByUser($user_id) {
		$this->db->query(" SELECT topics.*,categories.*,users.username,users.avatar FROM
                          `topics` INNER JOIN `categories` ON topics.category_id = categories.id
                           INNER JOIN `users` ON topics.user_id = users.id
                           WHERE  topics.user_id=:user_id");

		//grap result
		$this->db->bind(':user_id', $user_id);
		$results = $this->db->resultset();
		return $results;
	}
	public function getTopic($id) {
		$this->db->query("SELECT topics.*,users.username,users.avatar FROM
                    `topics` INNER JOIN `users` ON topics.user_id = users.id
                     WHERE topics.id=:id");

		//grap result
		$this->db->bind(':id', $id);
		$results = $this->db->single();
		return $results;
	}
	public function getReplies($topic_id) {
		$this->db->query("SELECT replies.*,users.* FROM  replies
                          INNER JOIN `users` ON replies.user_id = users.id
                          WHERE replies.topic_id=:topic_id
                          ORDER BY create_date DESC");

		//grap result
		$this->db->bind(':topic_id', $topic_id);
		$results = $this->db->resultset();
		return $results;
	}
}