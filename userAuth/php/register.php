<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
	$file = "../storage/users.csv";
	$filename = fopen($file, "a");
	$form = array($username, $email, $password);
	if(fputcsv($filename, $form)!==false){
		echo "<p align='center'>User Successfully Registered</p>";
?>
<p align="center">Please <a href="../html/login.html">click here</a> to proceed to the login page</p>
<?php
	}else{
		echo "User Registration failed";
	}
    fclose($filename);
}

?>

