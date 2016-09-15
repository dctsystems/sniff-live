<?php
    include("Includes/startSession.php");


ini_set('display_errors', 'On');
error_reporting(E_ALL);

$file=basename($_GET['file']);
$file=$HOME ."/".$file;
$data=$_POST['data'];

file_put_contents($file,$data);
?>
