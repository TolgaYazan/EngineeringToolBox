<html>
    <head>
    <title>Temperature Converter</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="../jobs/newcssjob.css">
    <script>
      //For the Temperature Conversion
            function displayvalue(){
                x=document.temp.celsius.value;
                x1=document.temp.fahrenresult.value=(x*1.8)+32;
                document.temp.kelvinresult.value=(x1-32)*(5/9)+273.15;
            }
            function displayvaluee(){
                y=document.temp.fahrenheit.value
                y1=document.temp.celsresult.value=(y-32)*(5/9)
                document.temp.kelvinresult2.value=y1+273.15
            }
            function displayvalueee(){
                z=document.temp.Kelvin.value
                z1=document.temp.celsresult2.value=z-273.15
                document.temp.fehrenresult2.value=(z1*(9/5))+32
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
    
    <table align ="Center">
        <br><br>
        <tr><td><font color="#FF0000" size="+3"><i> Temperature Converter</i><br><br></td></tr>  
        
        <tr><td><font color="#FF0000" size="+1">
                <u>The temperature units available in this converter are: Celsius, Fahrenheit, and Kelvin.</u><br><br>
                How to use:<br>
            <br>First, search for the matching unit as the one you have. 
            <br>Second, enter the value in the matching field. 
            <br>Third, press the convert button next to the input you entered to see the other units of temperature.</td></tr> 
        
    </table>
        
        <br><br><br>
        
    <form name="temp">
        <table bordercolor="#6D4C41" border="2" width="500" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td colspan="2" align="center" bgcolor="#FF0000"><font size="+2">TEMPERATURE CONVERTER</font></td>
            </tr>
            <tr align="center">
                
                    <td><input style="width:250" type="text" name="celsius" placeholder="Enter in Celsius "></td>
                    <td><input  style="width:250"  type="button" name="conversion" value="convert" onclick="displayvalue()"></td>
            </tr>
            <tr>
                <td><input style="width:210" type="text" name="fahrenresult"><font color="#FF0000" size="+1">&nbsp;&nbsp; F</font></td>
                <td><input style="width:210" type="text" name="kelvinresult"><font color="#FF0000" size="+1">&nbsp;&nbsp; K</font></td>
            </tr> 
                
            <tr align="center">
                <td><input style="width:250" type="text" name="fahrenheit" placeholder="Enter in Fahrenheit"></td>
                <td><input style="width:250" type="button" name="conversion2" value="convert" onclick="displayvaluee()"></td>
            </tr>
            <tr>
                <td><input style="width:210" type="text" name="celsresult"><font color="#FF0000" size="+1">&nbsp;&nbsp; C</font></td>
                <td><input style="width:210" type="text" name="kelvinresult2"><font color="#FF0000" size="+1">&nbsp;&nbsp; K</font></td>
            </tr> 
            <tr align="center">
                <td><input style="width:250" type="text" name="Kelvin" placeholder="Enter in Kelvin "></td>
                <td><input style="width:250" type="button" name="conversion3" value="convert" onclick="displayvalueee()"></td>
            </tr>
            <tr>
                <td><input style="width:210" type="text" name="celsresult2"><font color="#FF0000" size="+1">&nbsp;&nbsp; C</font></td>
                <td><input style="width:210" type="text" name="fehrenresult2"><font color="#FF0000" size="+1">&nbsp;&nbsp; F</font></td>
            </tr>
            
        </table>
        </form>
        <br>
        <br>
        <br>
    

</body>
</html>

