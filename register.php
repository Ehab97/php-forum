<?php require_once('includes/init.php');?>
<?php 
   $template=new Template('Templates/register.php');
   $user=new User();
   $valed=new Validator();
   if (isset($_POST['register'])) {
   	    $data = array();
	    $data['name'] = $_POST['name'];
	    $data['email'] = $_POST['email'];
	    $data['username'] = $_POST['username'];
	    $data['password'] = $_POST['password'];
	    $data['password2'] = $_POST['password2'];
	    $data['about'] = $_POST['about'];
	    $data['last_actvaty'] = date("y-m-d H:i:s");
	      //check for validation 
		   $array_valid = array('name','email','username','password','password2');
		   if ($valed->isRequered($array_valid)) {
		   	   if($valed->isvalidemail($data['email'])){
		   	   	   if($valed->passmatch($data['password'],$data['password2'])){
		   	   	   	//uploaded avatar
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
						       redirect('index.php','some thing goes wrong please try again','fail');
						    }

		   	   	   }else{
		   	   	   	    redirect('register.php','password doesnot match','error');

		   	   	   }

		   	   }else{

		           redirect('register.php','in valid email','error');
		   	   }
		   }else{
		       redirect('register.php','fill all input please ','error');
		   }
   	 }  


   
   echo $template;

