<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
	
	$file = "../storage/users.csv";
	$temp = "../storage/temp.csv";
	$filename = fopen($file,"r");
	$write = fopen($temp,"w");
	while(($filenames = fgetcsv($filename))!==false){
		$name = $filenames[1];
		if($email==$name){
			$filenames[2] = $password;
			echo "Password successfully changed";
			fputcsv($write,$filenames);
			file_put_contents('../storage/users.csv', file_get_contents('../storage/temp.csv')); 
			unlink('../storage/temp.csv');
			break;
			?>
				<p align="center">Please <a href="../html/login.html">click here</a> to proceed to the login page</p>
			<?php
		}else{
			echo "<p align='center'>Email not present in our system</p>";
			unlink('../storage/temp.csv');
		}
		
	}
	fclose($filename);
	fclose($write);	
}


