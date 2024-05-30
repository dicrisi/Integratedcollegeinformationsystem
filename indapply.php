<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("userheader.php");
	error_reporting(0);

	
?>
<?php
if(isset($_GET['select'])){
		$query2 = "select * from induction where cid='".$_GET['select']."'";
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
	<br><br>
<br>
<br>

	<form action="" method="post" enctype="multipart/form-data" name="addroom">
		<center>
			<font color="white" size="6">Apply Now!!!</font>
		</center><br><br>

		<table align="center">
			<tr>
				<td><b>Id</b></td>
				<td><input name="cid" type="text" value="<?php echo $row['cid'] ?>" readonly/></td>
			</tr>
			<tr>
				<td><b> Name Of the Program</b></td>
				<td><input name="pname" type="text" value="<?php echo $row['pname'] ?>" readonly/></td>
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
			(null,'".$_POST['cid']."','".$_POST['pname']."','".$_POST['regno']."','".$_POST['name']."','".$_POST['dat']."','induction')";
			if(mysql_query($query)){
				echo 'Inserted Successfully';
			} else {
				echo 'Insert Failed';
			}
			header("location:viewinduction.php");
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
