<?php
	session_start(); 
	
    if(!$_SESSION['user'])
    {
       header("location:index.php"); // redirects if user is not logged in
       exit();
       }
     $HOME="../SniffPrivate/Users/".$_SESSION["user"];
?>
