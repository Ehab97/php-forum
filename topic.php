<?php
// die('Ehab');
 //init there are every single function and things we use with all pages so but in init file in core folder
 require_once('includes/init.php');
 ?>

 <?php
  $topic=new Topic();
  $topic_id=$_GET['id'];
  // get template and assign vars
  $template = new Template('Templates/topic.php');
  $template->topic=$topic->getTopic($topic_id);
  $template->replies=$topic->getReplies($topic_id);
  $template->title=$topic->getTopic($topic_id)['title'];
  echo $template;
   // Template::view('view1');
