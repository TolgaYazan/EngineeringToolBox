<?php
session_start();
    $conn1 = mysqli_connect("localhost","root","","group9");// connec to database 
     
$deletedReport=$_POST['deletedreport'];

 $deleteLoginEmail = $_SESSION["semail"];
$deleteLoginPass = $_SESSION["spass"];
if(strlen($deleteLoginEmail)==0 && strlen($deleteLoginPass)==0){
     header("Location:deletejob.php");
            exit();
}

   if(strlen($deletedReport)==0 ){ // ıf user  write nothing ı refresh the page
    header("Location:deletejob.php");
            exit();
}
       else{ 
   $sql = "DELETE FROM `dbjob` WHERE id='".$deletedReport."' AND Sender='".$deleteLoginEmail."' AND SenderPassword ='".$deleteLoginPass."'"; // sql querry to delte a row        
   $resultCheck = mysqli_query($conn1,$sql);
   $Check = mysqli_affected_rows($conn1);  
                
    if($resultCheck){
       if($Check==0){// if user didnt succed refresh the page again
            header("Location:deletejob.php");
            exit();
       }else{  // ıf user succed return the job page
            header("Location:findjob.php");
            
   }
   }
       }
?>