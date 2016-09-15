<?php

    include("Includes/startSession.php");

ignore_user_abort(true);
set_time_limit(0); 
 
$path = ($HOME ."/"); 

$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['file'].".".$_GET['ext']);
$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); 
$fullPath = $path.$dl_file;
if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    switch ($_GET['ext']) {
        case "sniff":
          header("Content-type: file/.sniff");
          header("Content-Disposition: attachment; filename=\"".$dl_file."\"");
          break;
        case "bmp":
          header("Content-type: file/.bmp");
          header("Content-Disposition: attachment; filename=\"".$dl_file."\"");
          break;
        default:
          header("Content-type: application/octet-stream");
          header("Content-Disposition: filename=\"".$dl_file."\"");
          break;
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
    fclose ($fd);
}
else
    {
        print("failed to open".$fullPath);
    }

?>
