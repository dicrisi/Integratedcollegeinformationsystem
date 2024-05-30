<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
	$query2 = "select * from intern where sid='".$_GET['select']."'";
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
p {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
  font-weight: bold;
}
</style>

<div class="container">
	<form action="" method="post" enctype="multipart/form-data" name="addroom">
		<center>
			<style>
				body {
					background-image: url('imgg.jpg');
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-size: 100% 100%;
					color:white;
				}
			</style>
			<br>
			<br>
			<br>
			<br>
			<center><font color="black" size="8">Update Internship Program Details </font></center>
			</br>
			<b> Id</b><br />
			<input name="sid" type="text" value="<?php echo $row['sid']; ?>" readonly />
			<br />
			<b>   Internship Name</b><br />
			<input name="iname" type="text"  value="<?php echo $row['iname']; ?>"  />
			<br /> 
			<b> Internship Title</b><br />
			<input name="ititle" type="text" value="<?php echo $row['ititle']; ?>"  /> 
			<br />
			<b> Internship Duration</b><br />
			<input name="pduration" type="text" value="<?php echo $row['pduration']; ?>"  /> 
			<br />
			<b> Time</b><br />
			<input name="time" type="text" value="<?php echo $row['time']; ?>"  /> 
			<br />
			<b> Date </b><br />
			<input name="dat" type="date" value="<?php echo $row['dat']; ?>"  /> 
			<br />
			<br />
			<b> Fields </b><br />
			<input name="field" type="text" value="<?php echo $row['field']; ?>"  /> 
			<br />
			<input type="submit" name="submit" value="Update" id="button1" />
			<br>
		</center>
	</form>
</div>

<?php
if(isset($_POST['submit'])){
	$query = "update intern set iname='".$_POST['iname']."', ititle='".$_POST['ititle']."', pduration='".$_POST['pduration']."', time='".$_POST['time']."', dat='".$_POST['dat']."', field='".$_POST['field']."' where sid='".$_GET['select']."'";
	
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';
	} else {
		echo 'NOT UPDATE';
	}
	header("location:intern.php");
	exit;
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
