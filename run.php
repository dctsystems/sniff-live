<?php include("Includes/setup.php"); ?>

<body>
<?php include("Includes/navbar.php"); ?>

<div id = "mainContentHome">

<?php include("Includes/sidebar.php"); ?>


    <div id = "contentHome">
        
<div id="compiler">

<?php
    $HOME="../SniffPrivate/Users/".$_SESSION["user"];

    $file=basename($_GET['file']);
    if($file)
       {
        $memFile=$HOME."/".$file.".js.mem";
        $jsFile= $HOME."/".$file.".js";
        include("Includes/runInline.php");
       }
    ?>
</body>
            </div>
        </div>
    </body>
</html>
