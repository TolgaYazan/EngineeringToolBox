
<html>
    <head>
    <title>Delete JoB</title>
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
        <form action ="deletejobconnection.php" name ="reportjobform" method="POST">
            <br><br>
            <table border ="4" width ="700" height ="200" bordercolor="#0000"> 
                <tr><td><br>
                <table align="center"  width="600" height ="80" >
                <tr> <td> <font color="#FF0000" size="6"><div align="center">Engineering Toolbox</td></tr>
            
                   </table>
                        <table align="center" border ="0" cellpadding ="10" width ="410" height ="100">
                            <tr><td  colspan="2"><font color="#FF0000" size="+2"><div align="center"><i>Delete Your Job Report</i></td></tr><br>
                      <tr><td><font color="#FF0000" size="+2"><i>Your Report ID:</i></td>
                      <td><input type="text"  name="deletedreport"></td></tr>
                    
                      
                      <tr><td><input type="submit" class="button" value="DELETE" name="lg"></td><td><input type="reset" class="button" onclick="location.href='findjob.php'"value="RETURN"></td></tr>
                          <tr><td height ="80"></td></tr>
            
               </table>        
        </form>       
    </div>
    </body>
    
</html>