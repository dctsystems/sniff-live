<?php session_start();

    if(!$_SESSION['user'])
    {
        exit();
    }
    $HOME="../SniffPrivate/Users/".$_SESSION["user"];
    
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$cmd=$_GET['cmd'];

$prefix = "sh -c ";

if (substr($cmd, 0, strlen($prefix)) == $prefix) {
    $cmd = substr($cmd, strlen($prefix));
} 
$cmd=trim($cmd,"' ");
$cmd=str_replace("2>&1","",$cmd);
$cmd=preg_replace('!\s+!', ' ', $cmd);
$parts=explode(" ",$cmd);




if($parts[0]=="ls")
{
$out = array();
exec("ls ". $HOME , $out);
foreach($out as $line)
	{
	echo $line."\n";
	}

}

elseif($parts[0]=="sniff")
    {
        $out = array();
	$filename=escapeshellarg(basename($parts[1]));
        exec("../SniffPrivate/Sniff/libexec/serverJSCompile ".$HOME."/".$filename, $out);
        foreach($out as $line)
        {
            echo $line."\n";
        }
        
    }


elseif($parts[0]=="uno-sniff")
{
        $out = array();
        $filename=escapeshellarg(basename($parts[1]));
        exec("../SniffPrivate/Sniff/libexec/serverUnoCompile ".$HOME."/".$filename, $out);
        foreach($out as $line)
        {
            echo $line."\n";
        }
}

elseif($parts[0]=="mb-sniff")
{
echo "Microbit Unavailable\n";
//echo "File:".$parts[1]."\n";
}

else
{
echo "Unknown Command:".$cmd."\n";
}
?>
