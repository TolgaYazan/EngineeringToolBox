
<html>
    <head>
    <title>Report JoB</title>
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
        <form action ="reportjobconnection.php" name ="reportjobform" method="POST">
            <br><br>
            <table border ="4" width ="700" height ="200" bordercolor="#0000"> 
                <tr><td><br>
                <table align="center"  width="600" height ="80" >
                <tr> <td> <font color="#FF0000" size="6"><div align="center">Engineering Toolbox</td></tr>
            
                   </table>
                        <table align="center" border ="0" cellpadding ="10" width ="410" height ="100">
                            <tr><td  colspan="2"><font color="#FF0000" size="+2"><div align="center"><i>Report Job</i></td></tr><br>
                      <tr><td><font color="#FF0000" size="+2"><i>Company:</i></td>
                      <td><input type="text" size="27"   name="company"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Qualification:</i></td>
                      <td><select name="qualification"   id="qualification">  
                                                           <option value="Computer Engineering">Computer Engineering</option>
                                                           <option value="Civil Engineering">Civil Engineering</option>
                                                           <option value="Electrical Engineering">Electrical Engineering</option>
                                                           <option value="Mechanical Engineering">Mechanical Engineering</option>
                          </select></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>City:</i></td>
                      <td><input type="text" size="27"  name="city"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Adress:</i></td>
                      <td> <textarea id="id" name="adress" cols="25"rows="4"></textarea></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Telephone Number:</i></td>
                      <td><input type="text"  size="27"  id="id" name="telephoneNumber"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>WorkType:</i></td>
                      <td><input type="text" size="27"   id="id" name="worktype"></td></tr>
                      <tr><td><input type="submit" class="button" value="REPORT" name="lg"></td><td><input type="reset" class="button" value="RESET"></td></tr>
                          <tr><td><input class="button " type="button" size ="15" onclick="location.href='findjob.php'" value="RETURN" /></td></tr>
                          <tr><td height ="80"></td></tr>
            
               </table>        
        </form>       
    </div>
    </body>
    
</html>