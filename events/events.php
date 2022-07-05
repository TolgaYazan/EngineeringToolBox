<?php

$conn= mysqli_connect("localhost","root","","group9");

$sql = "SELECT * FROM dbevent";

$result = mysqli_query($conn,$sql);
$er = mysqli_affected_rows($conn);

?>

<html>
    <head>
    <title>Events</title>       
     <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="newcssevent.css">
    </head>
    
    <body bgcolor ="#FFFFFF">
        <div class="wrapper80">

    <header>
      <div class="navbar">
        <div class="leftside-navbar">
          <img src="../images/redlogo.png" class="logo" />
          <ul>
              
              <a href="../index.php">HOME</a>
              <a href="../jobs/findjob.php">JOBS</a>
              <a href="../newsFolder/news.html">NEWS</a>
              <a href="">EVENTS</a>
            <a href="../formulas/formulas2.php">CALCULATORS</a>
         
            

          </ul>
        </div>

        <ul class="login-register">
          <button class="navbar_btn" onclick="location.href='reportEvent.php'">Report</button>
          <button class="navbar_btn" onclick="location.href='deleteEvent.php'">Delete</button>
        </ul>

      </div>
        </div>
    </header>
        
    <table align ="center">
        <br><br>
        <tr><td><font color="#FF0000" size="+3"><div align="center"><b><i>Engineering Toolbox Events</i></b></td></tr>        
    </table>
        <br><br>
    <div align="center">
       
            <tbody >
                <?php
                while($row = mysqli_fetch_array($result)){
                    $id=$row["id"];
                    $City=$row["City"];
                    $Date=$row["Date"];
                    $Hour=$row["Hour"];
                    $Name =$row["Name"]  ;    
                    $Adress=$row["Adress"];
                    $Description=$row["Description"]; 
                    $Organnizer=$row["Organizer"];
                    $Telephonenumber =$row["TelephoneNumber"];
                    $Sender =$row["Sender"];
                    
echo('
  <div class="wrapper80">
                            
     <section id="event">                          
       <hr class ="event-border">          
             <div class="jobs-image" align="left">
              <img alt="" width="230" height="190" src="../images/anons.jpg" > 
              
            </div>
            <div class="event-city-name" align="left" > '.$City.'</div>
              <div class="event-date-name" align="left" > '.$Date.'</div>
                   <div class="event-hour-name" align="left" > '.$Hour.'</div>
                        <div class="event-name-name" align="left" > '.$Name.'</div>
                           <div class="event-description-name" align="left" > '.$Description.'</div>
                               <div class="event-adress-name" align="left" >Adress: '.$Adress.'</div>
                                   <div class="event-organizer-name" align="left" > Organizer :'.$Organnizer.'</div>
                                   <div class="event-id-name" align="left" > Id : '.$id.'</div>
                                       <div class="event-sender-name" align="left" > Sender : '.$Sender.'</div>
                         
                           </div> 
                        
                            </section>
                            </div>
                        ');   
                }
                
                ?>
            
        <br><br><br>    
        
   <!--     <table align="center" cellpadding ="10">
            <tr><td><font color="#FF0000" size="3">Report A Event:</td><td><input  type="button" size ="15" onclick="location.href='reportEvent.php'" value="Report" /></td>
            <td><font color="#FF0000" size="3">Delete A Event:</td><td><input  type="button" size ="15" onclick="location.href='deleteEvent.php'" value="Delete" /></td>
           
        </table>-->
        
    </div>    
         
    </body>
     
</html>
