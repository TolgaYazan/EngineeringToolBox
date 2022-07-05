<?php

$conn= mysqli_connect("localhost","root","","group9");// connect to databae

$sql="SELECT * FROM dbjob";
    if(isset($_GET['qualification'])){
       $Selectedqualification =  $_GET['qualification'];
       if($Selectedqualification=="Computer Engineering"){
         $sql = "SELECT * FROM dbjob Where Qualification='".$Selectedqualification."'";
            }
       else if($Selectedqualification=="Civil Engineering"){
        $sql = "SELECT * FROM dbjob Where Qualification='".$Selectedqualification."'";
                    }
       else if($Selectedqualification=="Electrical Engineering"){
            $sql = "SELECT * FROM dbjob Where Qualification='".$Selectedqualification."'";
            }
        else if($Selectedqualification=="Mechanical Engineering"){
                $sql = "SELECT * FROM dbjob Where Qualification='".$Selectedqualification."'";
            }
        else if($Selectedqualification=="ALL"){
            $sql = "SELECT * FROM dbjob";
            }
        
    }
    else {
     $sql = "SELECT * FROM dbjob";
    }
   
 
 // sql querry to fecth data from dbjob

$result = mysqli_query($conn,$sql);
$er = mysqli_affected_rows($conn);

?>

<html>
    <head>
    <title>Job Opportunities</title>       
     <meta charset="UTF-8">
      <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
       <link rel="stylesheet" href="newcssjob.css">
    
    </head>
    
    <body bgcolor ="#FFFFFF">
        
        <div class="wrapper80">

    <header>
      <div class="navbar">
        <div class="leftside-navbar">
          <img src="../images/redlogo.png" class="logo" />
          <ul>
              
              <a href="../index.php">HOME</a>
              <a href="">JOBS</a>
              <a href="../newsFolder/news.html">NEWS</a>
              <a href="../events/events.php">EVENTS</a>
            <a href="../formulas/formulas2.php">CALCULATORS</a>
            
           

          </ul>
        </div>

        <ul class="login-register">
          <button class="navbar_btn" onclick="location.href='reportjob.php'">Report</button>
          <button class="navbar_btn" onclick="location.href='deletejob.php'">Delete</button>
        </ul>

      </div>
        </div>
    </header>
        
        
        
    <table align ="center">
        <br><br>
        <tr><td><font color="#FF0000" size="+3"><div align="center"><b><i>Engineering Toolbox Job Opportunities</i></b></td></tr>        
    </table>
        <br><br>
        <form action =" " name ="findjobform" method="GET">
        <table  align = "center" border="0" cellspacing="4" cellpadding="5" bordercolor="#00000" width ="400">
           <tr><td><font color="#FF0000" size="+1"><i>Select Qualification:</i></td>
                      <td><select name="qualification" id="qualification">  
                                                            <option value="ALL">ALL</option>
                                                           <option value="Computer Engineering">Computer Engineering</option>
                                                           <option value="Civil Engineering">Civil Engineering</option>
                                                           <option value="Electrical Engineering">Electrical Engineering</option>
                                                           <option value="Mechanical Engineering">Mechanical Engineering</option>
                          </select></td><td><button type="submit" name="submit">SEARCH</button></td></tr>   
         
        </table>
        </form>
            <br>
        
        <div align="center">
      
           
            <tbody width ="500">
                <?php
                while($row = mysqli_fetch_array($result)){ // While there is data fetch the data
                    $id=$row["id"]; // put my variable by table colums name
                    $Company=$row["Company"];
                    $Qualification=$row["Qualification"];
                    $City=$row["City"];
                    $Adress=$row["Adress"];
                    $Telephonenumber =$row["TelephoneNumber"];
                    $Worktype=$row["WorkType"];
                     $Sender=$row["Sender"];
                
                echo('
                         <div class="wrapper80">
                            
     <section id="jobs">
                          
                    <hr class ="job-border">
           
             <div class="jobs-image" align="left">
              <img alt="" width="230" height="190" src="../images/jobimage.png" > 
              
            </div>
            <div class="job-company-name" align="left" > '.$Company.'</div>
              <div class="job-qualification-name" align="left" > '.$Qualification.'</div>
                   <div class="job-city-name" align="left" > '.$City.'</div>
                       <div class="job-adress-name" align="left" > '.$Adress.'</div>
                           <div class="job-telephone-number" align="left" > '.$Telephonenumber.'</div>
                               <div class="job-worktype-name" align="left" > '.$Worktype.'</div>
                                   <div class="id-name" align="left" > Id : '.$id.'</div>
                                       <div class="sender-name" align="left" > Sender : '.$Sender.'</div>
                               
           
                            

                           </div> 
                        
                            </section>
                        ');
                }
                
                ?>
           
        <br><br><br>    
        
    <!--    <table align="center" cellpadding ="10">
            <tr><td><font color="#FF0000" size="3">Report A Job:</td><td><input  type="button" size ="15" onclick="location.href=''" value="Report" /></td>
            <td><font color="#FF0000" size="3">Delete A Job:</td><td><input  type="button" size ="15" onclick="location.href='deletejob.php'" value="Delete" /></td>          
        </table>-->
        
        
        
          
        
    </div>  
        
        
    </body>
    
    
    
    
    
    
    
    
</html>