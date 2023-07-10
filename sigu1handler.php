<?php

include_once("connection.php");

session_start();
?>
<?php
include_once("connection.php");
if(isset($_POST["submit"])){

    $username=$_POST["username"];
    $password=$_POST["password"]; 
    

    $insert="SELECT * FROM signuu WHERE username='$username' AND password= '$password'"; 
    // $insert="SELECT * FROM sigup WHERE username='$username' AND password= '$password'";
    $query=mysqli_query($connect,$insert);
    if(mysqli_num_rows($query)){
        $row=mysqli_fetch_array($query);
            $_SESSION['username']= $row["username"];
            $_SESSION['password']= $row["password"];
        }
        // $inset="SELECT * FROM sigin WHERE username='$username' AND password= '$password'";

        // $roles=mysqli_query($connect,$inset);
        // $row= mysqli_fetch_array($roles);
        $count=mysqli_num_rows($query);
        $username= $row['username'];
        if($count==1 && isset($_SESSION['username']) && isset($_SESSION['password'])){ 
             header("location:question12.php");
         }else{
         ?><script>alert('Invalid Account');window.location='signin2.php';</script><?php 
     }

       
?>