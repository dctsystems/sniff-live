<?php include("Includes/setup.php"); ?>

<body>
<?php include("Includes/navbar.php"); ?>

<div id = "mainContentHome">    

<?php include("Includes/sidebar.php"); ?>

    <div id = "contentHome">
        
<div id="compiler">

<?php
    $memFile="IDE/sniffpaint.js.mem";
    $jsFile="IDE/sniffpaint.js";
    $args=$_GET['file'];
    include("Includes/runInline.php");
    ?>
            </div>    
        </div>
    </body>    
</html>
