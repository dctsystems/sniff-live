<?php
 include("Includes/defaultHeader.php");
 include("Includes/navbar.php"); ?>


<div id ="mainContent">
            
            <div id ="Content">  
                
                <form action="checklogin.php" method="POST"> 
                
        <font face="NanumPenScript" size ='6%' color="#D47E36">Login:</font><br>
                
            <br><label>Firstname:</label>
            <input type="text" size="30%" style="" name="firstname" required="required" placeholder="ex. John"/><br>

            <label>Lastname:</label>
            <input type="text" size="30%" style="" name="lastname" required="required" placeholder="ex. Adams"/><br>

            <label>Password:</label>
            <input type="password" size="30%" style="" name="password" required="required" placeholder="ex. *******"/><br>

                    <br><br><input type="submit" value="Login"/>
                </form>
            
            </div>
        </div>
    </body>
</html>
