<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("userheader.php");
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
	p  {
		color: white;
		font-family: Georgia, serif;
		font-size: 100%;
		font-weight: bold;
	}
</style>
<br><br>
<br>
<br>
<div class="container">
	<style>
		body {
			background-image: url('imgg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
			color:white;
		}
	</style>
	

	<form action="" method="post" enctype="multipart/form-data" name="addroom">
		<center>
			<font color="white" size="6">Apply Now!!!</font>
		</center><br><br>

		<table align="center">
			<tr>
				<td><b>Id</b></td>
				<td><input name="sid" type="text" value="<?php echo $row['sid'] ?>" readonly/></td>
			</tr>
			<tr>
				<td><b> Internship Name</b></td>
				<td><input name="iname" type="text" value="<?php echo $row['iname'] ?>" readonly/></td>
			</tr>
			
			<tr> 
				<td><b>Register Number</b></td>
				<td><input name="regno" type="text" value="<?php echo  $_SESSION['regno'] ?>" readonly /></td>
			</tr>
			<tr> 
				<td><b>Student Name</b></td>
				<td><input name="name" type="text" value="<?php echo $_SESSION['login_user']  ?>" readonly /></td>
			</tr>
			<tr> 
    <td><b>Date</b></td>
    <?php $currentDate = date('Y-m-d'); ?>
    <td><input name="dat" type="date" value="<?php echo $currentDate; ?>" required/></td>
</tr>

		</table>

		<center><input type="submit" name="submit" value="Apply" id="button1" /></center>
	</form>

	<?php
		if(isset($_POST['submit'])){
		

			$query = "INSERT INTO apply values
			(null,'".$_POST['sid']."','".$_POST['iname']."','".$_POST['regno']."','".$_POST['name']."','".$_POST['dat']."','intern')";
			if(mysql_query($query)){
				echo 'Inserted Successfully';
			} else {
				echo 'Insert Failed';
			}
			header("location:viewintern.php");
			exit;
		}
	?>
</div>
<br><br>
<br>
<br><br><br>
<br>
<br>
<?php 
	include_once("footer.php");
?>
