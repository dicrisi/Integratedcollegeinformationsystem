<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
$query2 = "select * from user where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}

?>	


<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

 <style>
  body {
            background-image: url('imgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        
</style>
<br>
<br>
<br>
<br>
<center><font color="black" size="8">Update Student Details </font></center>
</br>

<b> Id</b><br />
 <input name="id" type="text" value="<?php  echo $row['id']; ?>" readonly />
 <br />

<b> Name</b><br />
 <input name="name" type="text"  value="<?php  echo $row['name']; ?>" />
 <br /> 
<b>Password</b><br />
 <input name="password" type="text" value="<?php  echo $row['password']; ?>" /> 
 <br />

 <b>  Profile</b><br />
 <input name="uimg" type="text" value="<?php  echo $row['uimg']; ?>" />
 <br />
<b>RegisterNumber </b><br />
 <input name="regno" type="text" value="<?php  echo $row['regno']; ?>" />
 <br />
 <b>  Address</b><br />
 <input name="address" type="text" value="<?php  echo $row['address']; ?>" />
 <br />

<b>Department </b><br />
 <input name="dept" type="text"  value="<?php  echo $row['dept']; ?>" />
 <br /> 
<b>EmailId </b><br />
 <input name="email" type="text" value="<?php  echo $row['email']; ?>" /> 
 <br />
<b>Mobile </b><br />
 <input name="mobile" type="text" value="<?php  echo $row['mobile']; ?>" />
 <br />

<b>DOB </b><br />
 <input name="dat" type="date" value="<?php  echo $row['dat']; ?>" /> 
 <br />
 
<b>BloodGroup </b><br />
 <input name="bloodgrp" type="text" value="<?php  echo $row['bloodgrp']; ?>" />
 <br />

  <input type="submit" name="submit" value="Update" id="button1" />
  <br>


 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){
$query = "update user set  name='".$_POST['name']."', password='".$_POST['password']."', uimg='".$_POST['uimg']."', regno='".$_POST['regno']."' , address='".$_POST['address']."', dept='".$_POST['dept']."', email='".$_POST['email']."', mobile='".$_POST['mobile']."',dat='".$_POST['dat']."',bloodgrp='".$_POST['bloodgrp']."' where id= '".$_GET['select']."'";
	echo $query;
      
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:vstu.php");
	exit;
//}
 }

 
?>

<br>
<br>
<br>
<br>
<br>

<?php 
	include_once("footer.php");
	?>