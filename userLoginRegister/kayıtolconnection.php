<?php
 session_start(); 
 
$un=$_POST['uname'];
$surname = $_POST['usname'];
$email = $_POST['uemail'];        
$pass1 = $_POST['upass1'];
$pass2=$_POST['upass2'];

if($pass1!=$pass2){ // if pass 1 and pass2 are not equal goes kayıtolpage again
    header("Location:kayıtol.php");
            exit();
}else if(strlen($email)==0){ // ıf user dont give email kayıtolpage load again
     header("Location:kayıtol.php");
            exit();
}
else{
   
    $conn = mysqli_connect("localhost","root","","group9"); // to connet to database 
    
    $sqlCheck =  "SELECT * FROM db1 WHERE email='".$email."'"; // this code loot ıf there is exist email
   
    
    $resultCheck = mysqli_query($conn,$sqlCheck);
              
   $erCheck = mysqli_affected_rows($conn); // if there is affected row 
   if($resultCheck){
       if($erCheck==0){
             $sql = "INSERT INTO  db1 (name, surname, email, pass)  VALUES ('$un','$surname','$email','$pass1')";
             $result = mysqli_query($conn, $sql);
             $er= mysqli_affected_rows($conn); // i insert sql queey executed return 1 mean sql queey succed
             if($result){
                 if($er==0){ // if er equal 0 mean there no data inserted to db1 table
                     header("Location:kayıtol.php"); // return kayıolpho again
                 }else{ // if er is not equal there is data inserted to db1 table
                     header("Location:../index.php"); // opean the main page
                     $_SESSION["semail"] = $email;
                        $_SESSION["spass"] =$pass1;
                 }
             }
       }else{      
              header("Location:kayıtol.php"); // refresh hte kayıolpage again
            exit();       
   }
   }
 }  
?>





