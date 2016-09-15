

<?php
    include("Includes/startSession.php");

    $sourceDir = "../SniffPrivate/Users/sys.admin";
    $destDir = $HOME;
    
    if (isset ($_POST["fullFile"])) {
        $projectName = basename($_POST["fullFile"]);
        copy($sourceDir . '/' . $projectName, $destDir . '/' . $projectName);
        
        
        $file=pathinfo($projectName,PATHINFO_FILENAME );
        $extension=pathinfo($projectName,PATHINFO_EXTENSION);
        if($extension=="sniff")
        {
            header("location:sniffPad.php?file=$file");
        }
        elseif($extension=="bmp")
        {
            header("location:sniffPaint.php?file=$file");
        }
        else
        {
            header("location:sniffPad.php");
        }
    }
?>


