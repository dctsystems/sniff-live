<?php
	session_start();

        $username = addslashes($_POST['firstname'].".".$_POST['lastname']);
        $password = addslashes($_POST['password']);	

        $file = fopen("../SniffPrivate/passwd.csv","r");

	$found=false;
        while($row = fgetcsv($file))
    {
        if($username == $row[0])
        {
            $hash = $row[3];
            if(password_verify($password,$hash))
            {
                $found = true;
                $_SESSION['id'] = $row[0];
                $_SESSION['user'] = $row[0];
                $_SESSION['fname'] = $row[1];
                $_SESSION['sname'] = $row[2];
            }
        }
    }
        fclose($file);

	
    if($found)
	{
		header("location: sniffPad.php");
	}
	else
	{
		Print '<script>alert("Incorrect Password!");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
	}
?>
