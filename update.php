<?php
require_once("connection.php"); 
if(isset($_POST['update'])){
	

	$user_id=$_REQUEST["id"];
   $password=$_POST['password'];

	

	$update="UPDATE sigin SET password='$password' WHERE id='$user_id'";
	$query=mysqli_query($connect,$update);

	if($query){
	        echo "<script>alert('Password change successful!')"
	 }else{
		 echo "<script type='text/javascript'>alert('Password change Unsuccessful')</script>";
	 }
	 
}
?>

