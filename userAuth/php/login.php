<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

loginUser($username, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
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
		$_SESSION['user'] = $name;
		header("location:../dashboard.php");
	}else{
		echo "Wrong username/password";
		header("location:../html/login.html");
	}
	
	
}

?>
