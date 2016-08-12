<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    ?>

<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel = "icon" href = "Images/Sniff_Scratch.png">
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Sniff Live</title>
</head>

<body>

<?php include("Includes/navbar.php"); ?>

<div id ="mainContent">

<div id ="content">

<form action="register.php" class="regForm" method="POST">

<font face="NanumPenScript" size ='6%' color="#D47E36">Register:</font><br><br>


<br><label>Firstname:</label>
<input type="text" size="30%" style="" name="firstname" required="required" placeholder="ex. John"/><br>

<label>Lastname:</label>
<input type="text" size="30%" style="" name="lastname" required="required" placeholder="ex. Adams"/><br>

<label>Password:</label>
<input type="password" size="30%" style="" name="password" required="required" placeholder="ex. *******"/><br>

<input type="submit" value="Register"/>
</form>

</div>
</div>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        
        $isFree = true;
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

	if(strlen($firstname)<2 || strlen($lastname)<2 ||!preg_match('/^[a-zA-Z]+$/', $firstname) || !preg_match('/^[a-zA-Z]+$/', $lastname))
	{
            Print '<script>alert("Is that really your name?");</script>';
            Print '<script>window.location.assign("register.php");</script>';
	   exit();
	}

        $password = addslashes($_POST['password']);
        $username = $firstname .".". $lastname;
        
        $file = fopen("../SniffPrivate/passwd.csv","r");
        
        while($row = fgetcsv($file))
        {
            $table_users = $row[0];
            
            if($username == $table_users)
            {
                $isFree = false;
            }
        }
        fclose($file);
        
        
        if($isFree)
        {
            $HOME="../SniffPrivate/Users/".$username;

            mkdir($HOME,0777);
                
            $fileName="new.sniff";
             $sourceDir = "../SniffPrivate/Users/sys.admin/";

            copy($sourceDir.$fileName, $HOME."/".$fileName);
            
            $hash=password_hash($password,PASSWORD_DEFAULT);
            file_put_contents("../SniffPrivate/passwd.csv", "$username,$firstname,$lastname,$hash\n",FILE_APPEND|LOCK_EX);

            echo '<script>window.location.assign("login.php");</script>';
            echo '<script>alert("Successfully Registered");</script>';

        }
        else
        {
            Print '<script>alert("Username already exists!");</script>';
            Print '<script>window.location.assign("register.php");</script>';
        }
    
    }
?>
