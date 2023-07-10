<?php
include_once("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $date=$_POST["date"];
    $gender=$_POST["Gender"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"]; 
$insert="INSERT INTO signup (NAME, DATE, GENDER, EMAIL, USERNAME, PASSWORD)  VALUES ('$name','$date','$gender','$email','$username','$password')";
$query=mysqli_query($connect,$insert);

    if($query){
        echo"<script>alert('Sign up successful');
        window.location='signin.php';</script>";  
        }else{ 
            echo"<script>alert('invalid username or password'); 
            window.location='signup.php';</script>";
        }
}
?>