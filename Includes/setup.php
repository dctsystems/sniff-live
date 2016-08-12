 <?php
	session_start(); 
	
    if(!$_SESSION['user'])
    {
       header("location:index.php"); // redirects if user is not logged in
       exit();
       }
       
       
?>


<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel = "icon" href = "Images/Sniff_Scratch.png">
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="styleCompiler.css" type="text/css" />
<title>Sniff Live</title>
</head>
