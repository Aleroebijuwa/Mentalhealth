<?php

include_once("connection.php");

session_start();

if(isset($_POST['submit'])){
    $username=$_POST["username"];
     $password=$_POST["password"];
     
     $query="SELECT * FROM signup WHERE USERNAME='$username' AND PASSWORD='$password'";
     
     $result=mysqli_query($connect,$query);
     
     if(mysqli_num_rows($result)==1){
         while($row=mysqli_fetch_array($result)){ 
                // $_SESSION['first_name']= $row["first_name"];
                //  $_SESSION['middle_name']= $row["middle_name"];
                // $_SESSION['surname']= $row["surname"];
                $_SESSION['USERNAME']= $row["USERNAME"];
                $_SESSION['PASSWORD']= $row["PASSWORD"];
                // $_SESSION['email']= $row["email"];
                // $_SESSION['gender']= $row["gender"];
                // $_SESSION['address']=$row["address"];
         
              

           
        //  echo "<script>alert('you are good to go')</script>";
    }
 
         $role="SELECT *FROM signup WHERE USERNAME='$username' AND PASSWORD='$password'";
         
         $roles=mysqli_query($connect,$role);
         
         $row=mysqli_fetch_array($roles);
         $username=$row['USERNAME'];
        //  $password=$row['Password'];
         
         if($row['USERNAME']=="$username"){
            $_SESSION['ID']=$user; 
            
             header("location:question.php?USERNAME='$user'");
         }
     }else{
         ?><script>alert('Access Denied');window.location='signin.php';</script><?php 
     }
    
}
?>


