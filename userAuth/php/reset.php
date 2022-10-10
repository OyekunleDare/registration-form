<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
	$file = "../storage/users.csv";
	$temp = "../storage/temp.csv";
	$filename = fopen($file,"r");
	$write = fopen($temp,"w");
	while(($filenames = fgetcsv($filename))!==false){
		$name = $filenames[1];
		if($email==$name){
			$filenames[2] = $password;
			echo "Password successfully changed";
		}
		fputcsv($write,$filenames);
	}
	fclose($filename);
	fclose($write);
	
	file_put_contents('../storage/users.csv', file_get_contents('../storage/temp.csv')); 
	unlink('../storage/temp.csv');
}


