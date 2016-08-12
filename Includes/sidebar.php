<div id = "sidebarHome">

<font face="NanumPenScript" size ='7%' color="#D47E36" >Hello <?php print $_SESSION['fname']?></font><br>



<form enctype="multipart/form-data" action ="copy.php" method ="post">
<select class="my-select" name="fullFile">

<?php
    $sourceDir = "../SniffPrivate/Users/sys.admin";
    $file = scandir($sourceDir);
    
    $result = preg_grep("/[a-zA-Z]*\Wsniff/", $file);
    foreach ($result as $prj) {
        print "<option value=\"$prj\">$prj</option>\n";
    }
    $result = preg_grep("/[a-zA-Z]*\Wbmp/", $file);
    foreach ($result as $prj)
    {
        print "<option value=\"$prj\">$prj</option>\n";
    }
    ?>
</select>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="submit" value="Copy Example File">
</form>

<form enctype="multipart/form-data" action ="upload.php" method ="post">
<input type="file" name="data" />
<input type="submit" name="submit" value="Upload" />
</form>


<table overflow= "auto" overflow-y= "hidden" cellpadding= "5%" cellspacing= "0,001%" style="height:100px; overflow:auto;">
<tr>
<th>Programs</th>
<th>Actions</th>
</tr>

<?php
    $HOME="../SniffPrivate/Users/".$_SESSION["user"];
    $dir = $HOME;
    $file = scandir($dir);
    $result = preg_grep("/[a-zA-Z]*\Wsniff/", $file);
    
    foreach ($result as $prj) {
        preg_match("/[a-zA-Z]*/", $prj, $temp);
        
        print "<tr>";
        
        print '<td>' . $prj . '</td>';
        
        print "<td><a href='download.php?file=$temp[0]&ext=sniff'";
        print '>Export</a></td>';
        
        print "<td><a href='delete.php?file=$temp[0]&ext=sniff'";
        print '" onclick="return confirm(\'Are you sure?\')"> Delete </a></td>';

        print "<td><a href='sniffPad.php?file=$temp[0]'";
        print '> Edit </a></td>';

        print "<td>";
        if(file_exists($dir."/".$temp[0].".js"))
            {
            print "<a href='run.php?file=$temp[0]'> Run </a>";
            }
        print '</td>';
        
        print "</tr>";  } ?>

    <tr><td><a href='sniffPad.php'> New </a></td></tr>
</table>

<br><table overflow= "auto" overflow-y= "hidden" cellpadding= "5%" cellspacing= "0,001%" style="height:100px; overflow:auto;">

<tr>
<th>Images</th>
<th>Actions</th>
</tr>

<?php
    $dir = $HOME;
    $file = scandir($dir);
    $result = preg_grep("/[a-zA-Z]*\Wbmp/", $file);
    
    foreach ($result as $prj) {
        preg_match("/[a-zA-Z]*/", $prj, $temp);
        
        print "<tr>";
        
        print '<td>' . $prj . '</td>';
        
        print "<td><a href='download.php?file=$temp[0]&ext=bmp'";
        print '>Export</a></td>';
        
        print "<td><a href='delete.php?file=$temp[0]&ext=bmp'";
        print '" onclick="return confirm(\'Are you sure?\')"> Delete </a></td>';
        
        print "<td><a href='sniffPaint.php?file=$temp[0]'";
        print '> Edit </a></td>';
        
       print "</tr>";  }
    ?>
    <tr><td><a href='sniffPaint.php'> New </a></td></tr>
</table>

</div>
