<?php  session_start();
    if(!$_SESSION['user'])
    {
        exit();
    }
    $HOME="../SniffPrivate/Users/".$_SESSION["user"];

chdir($HOME);

$file=basename($_GET['file']);
readfile($file);

?>
