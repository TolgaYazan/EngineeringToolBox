<html>
    <head>
    <title>Mass Converter</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jobs/newcssjob.css">
    <script>
            //for the Mass Converter
            function result(){
                x=document.mass.milli.value;
                g=document.mass.gramresult.value=x/1000;
                k=document.mass.kiloresult.value=g/1000;
                t=document.mass.tonresult.value=k/1000;
            }
            function result2(){
                x=document.mass.gram.value;
                m=document.mass.milliresult.value=x*1000;
                k=document.mass.kiloresult2.value=x/1000;
                t=document.mass.tonresult2.value=k/1000;
            }
            function result3(){
                x=document.mass.kilo.value;
                g=document.mass.gramresult2.value=x*1000;
                m=document.mass.milliresult2.value=g*1000;
                t=document.mass.tonresult3.value=x/1000;
            }
            function result4(){
                x=document.mass.ton.value;
                k=document.mass.kiloresult3.value=x*1000;
                g=document.mass.gramresult3.value=k*1000;
                m=document.mass.milliresult3.value=g*1000;
            }
    </script>
    
    
</head>
<body bgcolor="#FFFFFF">
    <div class="wrapper80">

    <header>
      <div class="navbar">
        <div class="leftside-navbar">
          <img src="../jobs/redlogo.png" class="logo" />
          <ul>
              
                <a href="../index.php">HOME</a>
              <a href="../jobs/findjob.php">JOBS</a>
                <a href="../newsFolder/news.html">NEWS</a>
              <a href="../events/events.php">EVENTS</a>
              <a href="formulas2.php">CALCULATORS</a>
            
          </ul>
        </div>
    

      </div>
        </div>
    </header>
    
    <table align ="center">
        <br><br>
        <tr><td><font color="#FF0000" size="+3"><i>Mass Converter</i></td></tr> 
        <tr><td><font color="#FF0000" size="+1"><br>
            <u>The Mass units available in this converter are: Milligram, Gram, Kilogram, and Tonne.</u><br><br>
            <br>How to use:<br>
            <br>First, search for the matching unit as the one you have. 
            <br>Second, enter the value in the matching field. 
            <br>Third, press the convert button next to the input you entered to see the conversion result of the other units of Mass.</td></tr>
    </table>
        <br>
        <br>
        <form name="mass">
        <table bordercolor="#6D4C41" border="2" width="600" cellspacing="0" cellpadding="0" align ="center">
            <tr>
                <td colspan="3" align="center" bgcolor="#FF0000"><font size="+2">UNITS OF MASS CONVERTER</font></td>
            </tr>
            <tr>
                
                    <td><input style="width:200" type="text" name="milli" placeholder="Enter in Milligram "></td>
                    <td align="center" colspan="2"><input  style="width:400"  type="button" name="conversion" value="convert" onclick="result()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="gramresult"><font color="#FF0000" size="+1"> g</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult"><font color="#FF0000" size="+1"> kg</font></td>
                <td width="200"><input style="width:150" type="text" name="tonresult"><font color="#FF0000" size="+1"> tonne</font></td>
            </tr> 
            
            <tr>
                
                    <td><input style="width:200" type="text" name="gram" placeholder="Enter in Gram "></td>
                    <td align="center" colspan="2"><input  style="width:400"  type="button" name="conversion2" value="convert" onclick="result2()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult"><font color="#FF0000" size="+1"> mg</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult2"><font color="#FF0000" size="+1"> kg</font></td>
                <td width="200"><input style="width:150" type="text" name="tonresult2"><font color="#FF0000" size="+1"> tonne</font></td>
            </tr>
            
            <tr>
                
                    <td><input style="width:200" type="text" name="kilo" placeholder="Enter in Kilogram "></td>
                    <td align="center" colspan="2"><input  style="width:400"  type="button" name="conversion3" value="convert" onclick="result3()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult2"><font color="#FF0000" size="+1"> mg</font></td>
                <td width="200"><input style="width:150" type="text" name="gramresult2"><font color="#FF0000" size="+1"> g</font></td>
                <td width="200"><input style="width:150" type="text" name="tonresult3"><font color="#FF0000" size="+1"> tonne</font></td>
            </tr>
            
            <tr>
                
                    <td><input style="width:200" type="text" name="ton" placeholder="Enter in Tonne "></td>
                    <td align="center" colspan="2"><input  style="width:400"  type="button" name="conversion4" value="convert" onclick="result4()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult3"><font color="#FF0000" size="+1"> mg</font></td>
                <td width="200"><input style="width:150" type="text" name="gramresult3"><font color="#FF0000" size="+1"> g</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult3"><font color="#FF0000" size="+1"> kg</font></td>
            </tr>
                
            
        </table>
        </form>
        
    

</body>
</html>
