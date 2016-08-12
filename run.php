<?php include("Includes/setup.php"); ?>

<body>
<?php include("Includes/navbar.php"); ?>

<div id = "mainContentHome">

<?php include("Includes/sidebar.php"); ?>


    <div id = "contentHome">
        
<div id="compiler">

<?php
    $file=basename($_GET['file']);
    if($file)
       {
        $memFile="load.php?file=".$file.".js.mem";
        $jsFile= "load.php?file=".$file.".js";
        include("Includes/runInline.php");
       }
    ?>
</body>
            </div>
        </div>
    </body>
</html>
