<?php require_once 'includes/init.php';?>
<?php
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password']; //md5($_POST['password']);
	$user = new User();
	if ($user->login($username, $password)) {
		$_SESSION['user_id_logged'] = $user->getUserId($username, $password);
		redirect('index.php', 'success log in ', 'success');
	} else {
		edirect('index.php', 'unvalid log in please try again ', 'error');
		// redirect('index.php', 'unvalid log in please try again ' . $_SESSION['count'], 'error');
	}
} else {
	redirect('index.php');
}
