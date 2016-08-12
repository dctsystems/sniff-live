<div id = "navBar">

<scrtch>
<b><font face="NanumPenScript" size ='8%' color="#D47E36">Sniff Online</font></b>

</scrtch>

<nav><ul>

<?php
    if(isset($_SESSION['user']))
    {
    print '<li><a href = "logout.php" >⇦Logout</a></li>';
    }
else
    {
        print '<li><a href = "login.php" >Login</a></li>';
        print '<li><a href = "register.php" >Register</a></li>';
    }
?>

</ul></nav>

</div>
