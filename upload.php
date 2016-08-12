<?php include("Includes/setup.php"); ?>

<?php
    $HOME="../SniffPrivate/Users/".$_SESSION["user"];

    $file=pathinfo($_FILES['data']['name'],PATHINFO_FILENAME );
    $extension=pathinfo($_FILES['data']['name'],PATHINFO_EXTENSION);
    $destDir = $HOME;

    if($extension=="sniff")
    {
        copy($_FILES['data']['tmp_name'],$destDir . '/' . $_FILES['data']['name']);
        header("location:sniffPad.php?file=$file");
    }
    elseif($extension=="bmp")
    {
        copy($_FILES['data']['tmp_name'],$destDir . '/' . $_FILES['data']['name']);
        header("location:sniffPaint.php?file=$file");
    }
    else
    {
    header("location:sniffPad.php");
    }
    
    
?>



