<?php include("Includes/setup.php"); ?>

<body>
<?php include("Includes/navbar.php"); ?>

<div id = "mainContentHome">

<?php include("Includes/sidebar.php"); ?>


    <div id = "contentHome">
        
<div id="compiler">

<?php
    $file=basename($_GET['file']);
    if($file && file_exists($dir."/".$file.".js"))
       {
        $memFile="load.php?file=".$file.".js.mem";
        $jsFile= "load.php?file=".$file.".js";
        include("Includes/runInline.php");
       }
    else if ($file && file_exists($dir."/".$file.".hex"))
	{
	print("Arduino Flashing not Available");
	}
    else
	{
	print("No Compiled Program Found");
	}

    ?>
</body>
            </div>
        </div>
    </body>
</html>
