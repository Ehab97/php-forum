<?php require_once('includes/init.php');?>
<?php 
   $template=new Template('Templates/register.php');
   $user=new User();
   if (isset($_POST['register'])) {
   	    $data = array();
	    $data['name'] = $_POST['name'];
	    $data['email'] = $_POST['email'];
	    $data['username'] = $_POST['username'];
	    $data['password'] = $_POST['password'];
	    $data['password2'] = $_POST['password2'];
	    $data['about'] = $_POST['about'];
	    $data['last_actvaty'] = date("y-m-d H:i:s");
	    if ($user->uploadavatar()) {
		   $data['avatar'] = $_FILES["avatar"]["name"];
		 }
		else{
			$data['avatar'] = 'noimge.png';
		 }
		if ($user->register($data)) {
	    	redirect('index.php','success registrition you can log in now','success');
	     }
	    else{
	       redirect('index.php','some thing goes wrong please try agin','fial');
	       }
   	   // else{
   	   // 	    redirect('register.php','password doesnot match','error');
   	   //     }
   	 }  


   
   echo $template;

