<?php require_once('includes/init.php');?>
<?php 
	//create a topic object
   $topic=new Topic();
   $template=new Template('Templates/frontpage.php');
   $template->topics=$topic->getAllTopics();
   echo $template;
   ;?>
<?php include 'includes/footer.php';?>