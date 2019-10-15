<?php require_once('includes/init.php');?>
<?php require_once('includes/header.php')?>
<?php 
	//create a topic object
	// var_dump($_GET[]);
   $topic=new Topic();
   $template=new Template('Templates/frontpage.php');
   $template->topics=$topic->getAllTopics();
   $template->totalTopics=$topic->getTotalTopics();
   $template->totalcategories=$topic->getTotalcategories();
   echo $template;
   ;?>
<?php //include 'includes/footer.php';?>