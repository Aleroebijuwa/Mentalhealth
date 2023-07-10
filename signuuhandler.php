<?php
include_once("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $date=$_POST["date"];
    $gender=$_POST["Gender"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"]; 
$insert="INSERT INTO signuu (NAME, DATE, GENDER, EMAIL, USERNAME, PASSWORD)  VALUES ('$name','$date','$gender','$email','$username','$password')";
$query=mysqli_query($connect,$insert);

    if($query){
        echo"<script>alert('Sign up successful');
        window.location='sigu1.php';</script>";  
        }else{ 
            echo"<script>alert('invalid username or password'); 
            window.location='siguu.php';</script>";
        }
}
?>