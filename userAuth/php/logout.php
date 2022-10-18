<?php
logout();
function logout(){   
   session_start();
   session_destroy();
   header("location:../html/login.html");
}
?>
