<?php
    session_start();
    $conn1 = mysqli_connect("localhost","root","","group9"); // connect to dabase
     
$company=$_POST['company'];
$qualification = $_POST['qualification'];
$city= $_POST['city'];
$adress= $_POST['adress'];  
$telephoneNumber = $_POST['telephoneNumber'];
$worktype=$_POST['worktype'];
        
$loginemail = $_SESSION["semail"];
$loginpass = $_SESSION["spass"];

    $sqlCheckAdmin = "Select  * From db1 Where email='".$loginemail."' AND pass ='".$loginpass."'";
    $resultCheckAdmin = mysqli_query($conn1,$sqlCheckAdmin); 
    $row= mysqli_fetch_array($resultCheckAdmin);
    $rowAdmin=$row["Admin"];
    
    if ($rowAdmin==0){
         header("Location:reportjob.php"); exit();
        
    }
    else{
   if(strlen($company)==0 && strlen($qualification)==0){ 
    header("Location:reportjob.php"); // if user gives to nothin to company and qualificiton ı open the repost job again
            exit();
}
       else{ 
   $sql = "INSERT INTO  dbjob (Company,Qualification ,City, Adress,TelephoneNumber,WorkType,Sender,SenderPassword) VALUES ('$company','$qualification','$city','$adress','$telephoneNumber','$worktype','$loginemail','$loginpass ')";                 
   $resultCheck = mysqli_query($conn1,$sql); // execute the querry
   $Check = mysqli_affected_rows($conn1);
   // this show affected row 
                
    if($resultCheck){
       if($Check==0){
            header("Location:reportjob.php"); // ıf user didnt succed ı refresh the page again  
            exit();
       }else{
            header("Location:findjob.php");// if user succed open the findjob page
            
   }
   }
       }
    }
?>

