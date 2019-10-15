<?php require_once('includes/init.php');?>

 <?php 
		// get template and assign vars
	 	// $topic=new Topic();
		//throw the query result to view topic
 		$category = isset($_GET['category']) ? $_GET['category'] : null;
 		$user_id = isset($_GET['user']) ? $_GET['user'] : null;
		$template = new Template('Templates/topics.php');
		if (isset($category)) {
			$template->topics=$topic->getByCategory($category);
			$template->title='Posts in "'.$topic->getCategory($category)['name'].'"';	
		}
		if (isset($user_id)) {
			$template->topics=$topic->getByUser($user_id);
			$template->title='Posts in "'.$topic->getUser($user_id)['name'].'"';	
		}
		if (!isset($category) &&!isset($user_id)) {
			$template->topics=$topic->getAllTopics();
		}
		$template->totalTopics=$topic->getTotalTopics();
		$template->totalcategories=$topic->getTotalcategories();
		echo $template;
;?>
