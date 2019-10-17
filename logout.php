<?php require_once 'includes/init.php';?>
<?php
if (isset($_POST['logout'])) {
	$user = new User();
	if ($user->logout()) {
		redirect('index.php', 'success loged out ', 'success');
	} else {
		redirect('index.php');
	}
}