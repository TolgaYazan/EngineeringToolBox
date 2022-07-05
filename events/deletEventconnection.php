<?php
session_start();
    $conn1 = mysqli_connect("localhost","root","","group9");
     
$deletedReport=$_POST['deletedreport'];

   $deleteEventEmail = $_SESSION["semail"];
$deleteEventPass = $_SESSION["spass"];
if(strlen($deleteEventEmail)==0 && strlen($deleteEventPass)==0){
     header("Location:deleteEvent.php");
            exit();
}      

   if(strlen($deletedReport)==0 ){ 
    header("Location:deleteEvent.php");
            exit();
}
       else{ 
   $sql = "DELETE FROM `dbevent` WHERE id='".$deletedReport."' AND Sender='".$deleteEventEmail."' AND SenderPassword ='".$deleteEventPass."'";                
   $resultCheck = mysqli_query($conn1,$sql);
   $Check = mysqli_affected_rows($conn1);  
                
    if($resultCheck){
       if($Check==0){
            header("Location:deleteEvent.php");
            exit();
       }else{
            header("Location:Events.php");
            
   }
   }
       }
       ?>