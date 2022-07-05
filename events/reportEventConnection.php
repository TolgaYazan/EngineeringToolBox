<?php
session_start();
    $conn1 = mysqli_connect("localhost","root","","group9");
     
$city=$_POST['city'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$name= $_POST['name'];
$adress= $_POST['adress'];  
$Description = $_POST['description'];
$organizer=$_POST['organizer'];
$telephoneNumber = $_POST['telephoneNumber'];

$loginemailevent = $_SESSION["semail"];
$loginpassevent = $_SESSION["spass"];

    $sqlCheckAdmin = "Select  * From db1 Where email='".$loginemailevent."' AND pass ='".$loginpassevent."'";
    $resultCheckAdmin = mysqli_query($conn1,$sqlCheckAdmin); 
    $row= mysqli_fetch_array($resultCheckAdmin);
    $rowAdmin=$row["Admin"];
    
    if ($rowAdmin==0){
         header("Location:reportEvent.php"); exit();
        
    }
    else{

   if(strlen($city)==0 && strlen($description)==0){ 
    header("Location:reportEvent.php");
            exit();
}
       else{ 
   $sql = "INSERT INTO  dbevent (City,Date, Hour,Name, Adress,Description, Organizer ,TelephoneNumber,Sender,SenderPassword) VALUES ('$city','$date','$hour','$name','$adress','$Description','$organizer','$telephoneNumber','$loginemailevent','$loginpassevent')";                 
   $resultCheck = mysqli_query($conn1,$sql);
   $Check = mysqli_affected_rows($conn1);  
                
    if($resultCheck){
       if($Check==0){
            header("Location:reportEvent.php");
            exit();
       }else{
            header("Location:Events.php");
            
   }
   }
       }
    }
?>