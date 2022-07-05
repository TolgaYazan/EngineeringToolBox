<html>
    <head>
    <title>Area Calculator</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../jobs/newcssjob.css">
    <script>
        
        var pi=3.14;
        
        function calculation(){
        // Perimeter Calculation
        shapeRadioSelection =document.myPerimeter.radio.value;
        
        if(shapeRadioSelection=="rectangle"){
            rectangleWidth=document.getElementById("rectangleWidth").value;
            rectangleHeight=document.getElementById("rectangleHeight").value;
            resultRectangle=rectangleHeight*rectangleWidth;
             document.myPerimeter.result.value=resultRectangle;
        }
        
        else if (shapeRadioSelection=="square"){
            squareEdge=document.getElementById("squareEdge").value;
            resultSquare = Math.pow(squareEdge,2);
            document.myPerimeter.result.value=resultSquare;
        }
        else if (shapeRadioSelection=="cube"){
            cubeEdge=document.getElementById("cubeEdge").value;
            resultCube = 6*(Math.pow(cubeEdge,2));
            document.myPerimeter.result.value=resultCube;
        }
         else if (shapeRadioSelection=="sphere"){
            sphereEdge=document.getElementById("sphereEdge").value;
            var tmp= Math.pow(sphereEdge,2) ;
            resultSphere = tmp*pi*4;
            document.myPerimeter.result.value=resultSphere;
        }
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
        <tr><td><font color="#FF0000" size="+3">Area Calculator<br><br></td></tr>
        
        <tr><td><font color="#FF0000" size="+1">
                <br>How to use:<br> 
                <br>First, Select the shape that you want to find the area for. 
                <br>Second, Enter the required value(s) in the field next to shape that you chose.
            <br>Finally, Press the calculate button at the last row of the table and your result will be shown at the result field.
            <br><br>If you want to calculate the area again for the same shape or a different one, please press the <b><u>Reset</u></b> button to clear the value(s) given previously.</td></tr>        
    </table>
        
        <br><br><br>
  
        
    <br><br>
    <form name ="myPerimeter"  method="POST" >
        <table  align ="center" border="1" cellpadding ="2" height ="20" width ="700" bordercolor ="##0000">
            <!--<tr ><td colspan="2" ><font color="#FF0000" size="+1"><div align="center">Area Calculator</td></tr>-->
            <td colspan="6" align="center" bgcolor="#FF0000"><font size="+2">Area Calculator</font></td>
            <tr><td colspan="2" ><font color="#FF0000" size="+1">Select Shape</td></tr>
                    <tr><td><input type ="radio" name ="radio" id ="rectangle" value ="rectangle" checked ><font color="#FF0000" size="3">Rectangle:</td><td>
                            <table>
                                <tr><td><font color="#FF0000" size="2">Width:</td><td><input type="number" size="8" name="rectangleWidth" id="rectangleWidth"  ></td></tr>
                                <tr><td><font color="#FF0000" size="2">Height:</td><td><input type="number" size="8" name="rectangleHeight" id ="rectangleHeight" ></td></tr>
                            </table>
                </td></tr>
                           
                            <tr><td><input type ="radio" name ="radio" id ="square"   value ="square" ><font color="#FF0000" size="3">Square</td><td>
                                <table>
                                    <tr><td><font color="#FF0000" size="2">Edge:</td><td><input type="number" size="8" name="squareEdge" id="squareEdge"  ></td></tr>
                                </table></td></tr>
                            <tr><td><input type ="radio" name ="radio" id ="cube"   value ="cube" ><font color="#FF0000" size="3">Cube</td><td>
                                <table cellpadding="2">
                                    <tr><td><font color="#FF0000" size="2">Edge:</td><td><input type="number" size="1" name="cubeEdge" id="cubeEdge"  ></td></tr>
                                </table></td></tr>
                            <tr><td><input type ="radio" name ="radio" id ="sphere"   value ="sphere" ><font color="#FF0000" size="3">Sphere</td><td>
                                <table cellpadding="2">
                                    <tr><td><font color="#FF0000" size="2">Radius:</td><td><input type="number" size="8" name="sphereEdge" id="sphereEdge"  ></td></tr>
                                </table></td></tr>
                            <tr><td><font color="#FF0000" size="3">&nbsp&nbspResult: &nbsp&nbsp&nbsp<input type="text" size="8" name="result"  ></td>
                            <td>&nbsp&nbsp&nbsp<input type="button" name="myButton" value="Calculate" onclick="calculation()"> 
                            &nbsp&nbsp&nbsp<input type="reset" class="button" value="Reset"></td></tr>
        </table>
           
    </form>
    

</body>
</html>
