<?php
 session_start(); 
 
$email= $_POST["uemail"];
$pass = $_POST["pass"];


$conn = mysqli_connect("localhost","root","","group9"); // to connect database 
$sql = "SELECT * FROM db1 WHERE email='".$email."' AND pass ='".$pass."'"; // sql querry to check there is exist email and pass
   $result = mysqli_query($conn, $sql); // executue sql querry
           
   $er = mysqli_affected_rows($conn); // show ıf there is affected row
   if($result){ // if connection provided
       if($er==0){ // if there no affected row 
            header("Location:login.php"); // goes login php again
            $msg="Check your name and password";
            $_SESSION['varname'] = $msg;
            exit();
       }else{ // if there is affected row 
            header("Location:../index.php"); // goes to main page
            $_SESSION["semail"] = $email;
            $_SESSION["spass"] =$pass;
            exit();       
   }
   }
   
?>
