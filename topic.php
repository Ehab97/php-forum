<?php
 //init there are every single function and things we use with all pages so but in init file in core folder
 require_once('includes/init.php');
 ?>

 <?php 
  // $topic = new Topic;
  // get template and assign vars
  $template = new Template('Templates/topic.php');
  echo $template;