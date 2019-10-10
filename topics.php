<?php require_once('includes/init.php');?>

 <?php 
  // $topic = new Topic;
  // get template and assign vars
 		$topic=new Topic();
		//throw the query result to view topic
 		$category = isset($_GET['category']) ? $_GET['category'] : null;
		$template = new Template('Templates/topics.php');
		if (isset($category)) {
			$template->topics=$topic->getByCategory($category);
			$template->title='Posts in "'.$topic->getCategory($category)['name'].'"';	
		}
		if (!isset($category)) {
			$template->topics=$topic->getAllTopics();
		}
		$template->totalTopics=$topic->getTotalTopics();
		$template->totalcategories=$topic->getTotalcategories();
		echo $template;
;?>
