<?php
        session_start();    
        
       
?>

<html>
    <head>
    <title>Log in</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
.button {
  height:25px;
    width:100px;
    font-size: 13px;
}

</style>
    </head>
    
    <body bgcolor="#FFFFF">
         <div align ="center">
        <form action ="loginconnetion.php" name ="lgform" method="POST">
            
            <br><br><br>
            <table border ="4" width ="700" height ="200" bordercolor="#000000"> 
                <tr background =images/login.jpg><td><br><br><br><br>
                <table align="center"  width="600" height ="80" >
                <tr> <td> <font color="#FF0000" size="6"><div align="center">Welcome To Engineering Toolbox</td></tr>
            
                     </table>
            <table align="center" border ="0" cellpadding ="10" width ="410" height ="100">
                <tr><td  colspan="2"><font color="#FF0000" size="+2"><div align="center"><i>Plesae Write Your Email and Password</i></td></tr><br><br>
                <tr><td><font color="#FF0000" size="+2"><i>Email:</i></td>
                <td><input type="text" name="uemail"></td></tr>
                <tr><td><font color="#FF0000" size="+2"><i>Password:</i></td>
                <td><input type="password" id="id" name="pass"></td></tr>
                <tr ><td> <input class="button " type="submit" value="LOGIN" name="lg"></td>
                <td width="100"><input class="button " type="button" size ="15" onclick="location.href='../index.php'" value="RETURN" /></td></tr>
                <tr><td height ="80"></td></tr>
                </table>   
                 </td></tr>
                </table> 
        </form>   
    </div>
    </body>   
</html>