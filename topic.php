<?php
// die('Ehab');
//init there are every single function and things we use with all pages so but in init file in core folder
require_once 'includes/init.php';
?>
 <?php
$topic = new Topic();
$topic_id = $_GET['id'];
// get template and assign vars
if (isset($_POST['replay'])) {
	$i = $_GET['topic'];
	$valed = new Validator;
	$data = array();
	$data['topic_id'] = $topic_id;
	$data['user_id'] = $_SESSION['user_id_logged'];
	$data['body'] = $_POST['body'];
	$array_valid = array('body');
	if ($valed->isRequered($array_valid)) {
		if ($topic->reply($data)) {
			$i = $_GET['topic'];
			redirect('topic.php?topic=' . $topic_id, 'you post success', 'success');
		} else {
			$i = $_GET['topic'];
			redirect('topic.php?topic=' . $topic_id, 'fill all input please ', 'error');
		}

	} else {
		$i = $_GET['topic'];
		redirect('topic.php?topic=' . $topic_id, 'fill all requered please ', 'error');
	}
}
$template = new Template('Templates/topic.php');
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)['title'];
echo $template;
// Template::view('view1');
