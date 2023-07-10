<?php 
$host="localhost";
$database_user="root";
$password="";
$database_name="mentalhealth";
$connect=mysqli_connect($host,$database_user,$password,$database_name) or die
 ("Error:" .mysqli_connect_error()); 

?>