<html>
    <head>
    <title>Length Converter</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="../jobs/newcssjob.css">
    <script>
            //For the Length Converter 
            function show(){
                x=document.length.milli.value;
                cm=document.length.centiresult.value=x/10
                m=document.length.meterresult.value=cm/100
                km=document.length.kiloresult.value=m/1000
                mile=document.length.mileresult.value=km/1.6093440001
                ft=document.length.feetresult.value=mile*5280
                inch=document.length.inchresult.value=ft*12
            }
            function show2(){
                x=document.length.centi.value;
                mm=document.length.milliresult.value=x*10
                m=document.length.meterresult2.value=mm/1000
                km=document.length.kiloresult2.value=m/1000
                mile=document.length.mileresult2.value=km/1.6093440001
                ft=document.length.feetresult2.value=mile*5280
                inch=document.length.inchresult2.value=ft*12
            }
            function show3(){
                x=document.length.meter.value;
                mm=document.length.milliresult2.value=x*1000
                cm=document.length.centiresult2.value=mm/10
                km=document.length.kiloresult3.value=cm/100000
                mile=document.length.mileresult3.value=km/1.6093440001
                ft=document.length.feetresult3.value=mile*5280
                inch=document.length.inchresult3.value=ft*12
            }
            function show4(){
                x=document.length.kilo.value;
                mm=document.length.milliresult3.value=x*1000000
                cm=document.length.centiresult3.value=mm/10
                m=document.length.meterresult3.value=cm/100
                mile=document.length.mileresult4.value=m/1609.3440001
                ft=document.length.feetresult4.value=mile*5280
                inch=document.length.inchresult4.value=ft*12
            }
            function show5(){
                x=document.length.mile.value;
                km=document.length.kiloresult4.value=x*1.6093440001
                ft=document.length.feetresult5.value=km*3280.84
                inch=document.length.inchresult5.value=ft*12
                m=document.length.meterresult4.value=inch/39.37
                cm=document.length.centiresult4.value=m*100
                mm=document.length.milliresult4.value=cm*10
            }
            function show6(){
                x=document.length.feet.value;
                inch=document.length.inchresult6.value=x*12
                mile=document.length.mileresult5.value=inch/63360
                km=document.length.kiloresult5.value=mile*1.6093440001
                m=document.length.meterresult5.value=km*1000
                cm=document.length.centiresult5.value=m*100
                mm=document.length.milliresult5.value=cm*10
            }
            function show7(){
                x=document.length.inch.value;
                ft=document.length.feetresult6.value=x/12
                mile=document.length.mileresult6.value=ft/5280
                km=document.length.kiloresult6.value=mile*1.6093440001
                m=document.length.meterresult6.value=km*1000
                cm=document.length.centiresult6.value=m*100
                mm=document.length.milliresult6.value=cm*10
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
        <tr><td><font color="#FF0000" size="+3"><i>Length Converter</i></td></tr>  
        <tr><td><font color="#FF0000" size="+1">
            <br>
            <u>The Length units available in this converter are: Millimeter, Centimeter, Meter, Kilometer, Mile, Feet, and Inch.</u><br><br>
            <br>How to use:<br>
            <br>First, search for the matching unit as the one you have. 
            <br>Second, enter the value in the matching field. 
            <br>Third, press the convert button next to the input you entered to see the conversion result of the other units of Length.</td></tr>
    </table>
        
        <br><br><br>
        
        <form name="length">
        <table bordercolor="#6D4C41" border="2" width="1200" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td colspan="6" align="center" bgcolor="#FF0000"><font size="+2">LENGTH CONVERTER</font></td>
            </tr>
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="milli" placeholder="Enter in Millimeter "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion" value="convert" onclick="show()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="centiresult"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult"><font color="#FF0000" size="+1"> ft</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="centi" placeholder="Enter in Centimeter "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion2" value="convert" onclick="show2()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult2"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult2"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult2"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult2"><font color="#FF0000" size="+1"> ft</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult2"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="meter" placeholder="Enter in Meter "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion3" value="convert" onclick="show3()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult2"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="centiresult2"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult3"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult3"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult3"><font color="#FF0000" size="+1"> ft</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult3"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="kilo" placeholder="Enter in Kilometer "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion4" value="convert" onclick="show4()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult3"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="centiresult3"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult3"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult4"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult4"><font color="#FF0000" size="+1"> ft</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult4"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="mile" placeholder="Enter in Mile "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion5" value="convert" onclick="show5()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult4"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="centiresult4"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult4"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult4"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult5"><font color="#FF0000" size="+1"> ft</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult5"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="feet" placeholder="Enter in Feet "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion6" value="convert" onclick="show6()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult5"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="centiresult5"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult5"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult5"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult5"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="inchresult6"><font color="#FF0000" size="+1"> inch</font></td>
            </tr>
            
            <tr>
                
                    <td colspan="2"><input style="width:405" type="text" name="inch" placeholder="Enter in Inch "></td>
                    <td align="center" colspan="4"><input  style="width:392"  type="button" name="conversion7" value="convert" onclick="show7()"></td>
                  
            </tr>
            <tr>
                <td width="200"><input style="width:150" type="text" name="milliresult6"><font color="#FF0000" size="+1"> mm</font></td>
                <td width="200"><input style="width:150" type="text" name="centiresult6"><font color="#FF0000" size="+1"> cm</font></td>
                <td width="200"><input style="width:150" type="text" name="meterresult6"><font color="#FF0000" size="+1"> m</font></td>
                <td width="200"><input style="width:150" type="text" name="kiloresult6"><font color="#FF0000" size="+1"> km</font></td>
                <td width="200"><input style="width:150" type="text" name="mileresult6"><font color="#FF0000" size="+1"> mile</font></td>
                <td width="200"><input style="width:150" type="text" name="feetresult6"><font color="#FF0000" size="+1"> feet</font></td>
            </tr>
                
            
        </table>
        </form> 
        <br>
        <br>
        <br>
        <br>
        
    
    

</body>
</html>


