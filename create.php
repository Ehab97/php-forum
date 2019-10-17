<?php require_once 'includes/init.php';?>

 <?php
// get template and assign vars
$topic = new Topic();

if (isset($_POST['topic'])) {
	$valed = new Validator();
	$data['title'] = $_POST['title'];
	$data['category'] = $_POST['category'];
	$data['body'] = $_POST['body'];
	$data['user_id'] = $_SESSION['user_id_logged'];
	$data['last_activity'] = date("y-m-d H:i:s");
	$array_valid = array('title', 'body', 'category');
	if ($valed->isRequered($array_valid)) {
		if ($topic->create($data)) {
			redirect('index.php', 'you post success', 'success');
		} else {
			redirect('topic.php?id=' . $topic_id, 'fill all input please ', 'error');
		}
	} else {
		redirect('create.php', 'fill all requered please ', 'error');
	}
}
// $user = new User();
$template = new Template('Templates/create.php');
echo $template;
