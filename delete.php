<?php include("Includes/setup.php"); ?>


<?php	
    if($_SESSION['user'] && (!empty($_GET) && isset($_GET))) {
        $HOME="../SniffPrivate/Users/".$_SESSION["user"];
       
        $basename=basename($_GET['file']);
        $extension=$_GET['ext'];
	$filename=basename($basename . "." . $extension);
        $sourceDir = $HOME ;

        if($extension=="bmp")
        {
            if(file_exists($sourceDir. "/". $filename ))
            {
                unlink($sourceDir. "/". $filename);
            }
        }
        
        if($extension=="sniff")
        {
            if(file_exists($sourceDir. "/". $filename))
            {
                unlink($sourceDir. "/". $filename);
            }
            if(file_exists($sourceDir. "/". $basename . ".js"))
            {
                unlink($sourceDir. "/". $basename . ".js");
            }
            if(file_exists($sourceDir. "/". $basename . ".js.mem"))
            {
                unlink($sourceDir. "/". $basename . ".js.mem");
            }
            if(file_exists($sourceDir. "/". $basename . ".hex"))
            {
                unlink($sourceDir. "/". $basename . ".hex");
            }
        }


        header("location:sniffPad.php");
    }
    else
    {
        header("location:index.php"); // redirects if user is not logged in
    }
?>
