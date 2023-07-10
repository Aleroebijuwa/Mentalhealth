<?php
require_once("connection.php");
$user_id=$_GET["id"];
$query="SELECT * FROM register WHERE id='$user_id'";
$que=mysqli_query($connect,$query);
if(mysqli_num_rows($que)>=1){
	while($row=mysqli_fetch_array($que)){
	$user=$row["id"];
	$name=$row["name"];
    $email=$row["email"];
    // $password=$row["password"]; 
    $countries=$row["countries"];
	
	
	}
	?>
	<div class="darken">
<form method="post" action="update.php?id=<?php echo "$user" ?>" enctype="multipart/form-data">

<table>
<tr>
<td><input type="hidden" name="upload" value="<?=$user_id;?>" required="required"></td>
</tr>
<tr>
<td style="color:white;"><b>name:</b></td>
<td><input type="text" name="name" value="<?=$name?>" placeholder="ENTER STUDENT'S SURNAME"  class="text" required="required"></td>
</tr>

<tr>
<td style="color:white;"><b>email:</b></td>
<td><input type="text" name="email" value="<?=$email?>" placeholder="ENTER STUDENT'S NAME"  class="text" required="required"></td>
</tr>

<tr>
<td style="color:white;"><b>countries:</b></td>
<td><select name="countries" value="<?=$countries?>"  class="text" required="required">
<option value="Nigeria">nigeria</option> 
<option value="italy">italy</option>
<option value="japan">japan</option> 
<!-- <option value="Male">Male</option>
<option value="Female">Female</option> -->
</select>
</td>
</tr>
    <form method="post" action="update.php?id=<?php echo "$user" ?>" enctype="multipart/form-data">

<table>
    <h1>Change password</h1>
<tr>
<td><input type="hidden" name="upload" value="<?=$user_id;?>" required="required"></td>
</tr>
<tr>
<td style="color:white;"><b>Password:</b></td>
<td><input type="text" name="password" value="<?=$password?>" placeholder="ENTER PASSWORD"  
class="text" required="required"></td>
</tr>
<tr>
<td><input type="submit" name="update" value="ENTER"></td>
</tr>
    
    
</form>