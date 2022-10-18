<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

loginUser($username, $password);

}

function loginUser($email, $password){
	$file = "../storage/users.csv";
	$open = fopen($file,"r");
	while(($filename = fgetcsv($open))!==false){		
		$name = $filename[0];
		$emails = $filename[1];
		$passwords = $filename[2];
		
		if($emails==$email && $passwords==$password){
			$success = true;
			break;
		}else{
			$success = false;
		}
	}
	fclose($open);
	
	if($success){
		$_SESSION['username'] = $email;
		$_SESSION['user'] = $name;
		header("Location:../dashboard.php");
	}else{
		//echo "Wrong username/password";
		header("Location:../html/login.html");
	}	
}
?>
