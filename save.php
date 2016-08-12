<?php session_start();
    if(!$_SESSION['user'])
    {
        exit();
    }

ini_set('display_errors', 'On');
error_reporting(E_ALL);

    $HOME="../SniffPrivate/Users/".$_SESSION["user"];
    
    
$file=basename($_GET['file']);
$file=$HOME ."/".$file;
$data=$_POST['data'];

file_put_contents($file,$data);
?>
