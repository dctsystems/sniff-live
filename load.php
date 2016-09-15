<?php 
include 'Includes/startSession.php';

chdir($HOME);

$file=basename($_GET['file']);
readfile($file);

?>
