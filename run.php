<?php
   include("Includes/startSession.php");
   $file=basename($_GET['file']);
   if ($file && file_exists($HOME."/".$file.".hex"))
        {
        header("location:download.php?file=".$file."&ext=hex");
        exit(); 
	}


include("Includes/defaultHeader.php");
?>

<body>
<?php include("Includes/navbar.php"); ?>

<div id = "mainContentHome">

<?php include("Includes/sidebar.php"); ?>


    <div id = "contentHome">
        
<div id="compiler">

<?php
   $file=basename($_GET['file']);
    if($file && file_exists($HOME."/".$file.".js"))
       {
        $memFile="load.php?file=".$file.".js.mem";
        $jsFile= "load.php?file=".$file.".js";
        include("Includes/runInline.php");
       }
    else
	{
	print("X$file X");
	print("No Compiled Program Found");
	}

    ?>
</body>
            </div>
        </div>
    </body>
</html>
