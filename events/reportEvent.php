
<html>
    <head>
    <title>Report Event</title>
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <style>
.button {
  height:25px;
    width:100px;
    font-size: 13px;
}

</style>
    
    
    </head>
    
    <body bgcolor="#FFFFFF">
    <div align ="center">
        <form action ="reportEventconnection.php" name ="reporteventform" method="POST">
            <br><br>
            <table border ="4" width ="700" height ="200" bordercolor="#000000"> 
                <tr><td><br>
                <table align="center"  width="600" height ="80" >
                    <tr> <td> <font color="#FF0000" size="6"><div align="center"<b>Engineering Toolbox</b></td></tr>
            
                   </table>
                        <table align="center" border ="0" cellpadding ="10" width ="410" height ="100">
                            <tr><td  colspan="2"><font color="#FF0000" size="+2"><div align="center"><i>Report Event</i></td></tr><br>
                      <tr><td><font color="#FF0000" size="+2"><i>City:</i></td>
                      <td><input type="text"  size="27"  name="city"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Date:</i></td>
                      <td><input type="text"  size="27"   name="date"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Hour:</i></td>
                      <td><input type="text"   size="27" name="hour"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Name:</i></td>
                      <td><input type="text"  size="27" name="name"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Adress:</i></td>
                      <td> <textarea type="text"  cols="25"rows="4" id="id" name="adress"></textarea></td></tr>
                    <tr><td><font color="#FF0000" size="+2"><i>Description:</i></td>
                      <td> <textarea type="text"  cols="25"rows="4" id="id" name="description"></textarea></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Manager:</i></td>
                      <td><input type="text"  size="27"  id="id" name="organizer"></td></tr>
                      <tr><td><font color="#FF0000" size="+2"><i>Telephone Number:</i></td>
                      <td><input type="text"   size="27" id="id" name="telephoneNumber"></td></tr>
                      <tr><td><input type="submit" class="button" value="REPORT" name="lg"></td><td><input type="reset" class="button" value="RESET"></td></tr>
                          <tr><td><input class="button " type="button" size ="15" onclick="location.href='events.php'" value="RETURN" /></td></tr>
                          <tr><td height ="80"></td></tr>
            
               </table>        
        </form>       
    </div>
    </body>
    
</html>