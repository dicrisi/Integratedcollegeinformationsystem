<?php
include('header.php');
include('style.php');
include('config.php');


 if(isset($_POST['login']))
	  {
	$query ="select * from  user where name='".$_POST['name']."' and password ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
	$_SESSION['id'] = $row['id'];
		$_SESSION['login_user'] = $row['name'];
		$_SESSION['password'] = $row['password'];
			$_SESSION['uimg'] = $row['uimg'];
			$_SESSION['regno'] = $row['regno'];
			$_SESSION['address'] = $row['address'];
		$_SESSION['dept'] = $row['dept'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['mobile'] = $row['mobile'];
		$_SESSION['dat'] = $row['dat'];
		$_SESSION['bloodgrp'] = $row['bloodgrp'];

	

		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 } 
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
<style>
 <style>
        body {
            background-image: url('imgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
			color:white;
        }

        h2 {
            text-align: center;
			color:white;
        }

        form {
            text-align: center;
            margin-top: 50px;
			color:white;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
</style>
</head>
<br>
<br>
<br>
<br>



<body>
    <h2>User Login</h2>

    <form method="post" action="">
        <label for="name"><b>User name</b></label>
        <input type="name" placeholder="Enter Username" name="name" required>

        <br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <br>

        <input type="submit" name="login" value="Login" style="color: #000000" />
		<br>

		
		<br>
		<input type="button" value=" New Register" onclick="location.href='register.php'" style="color: #000000;" />
		

    </form>
<br>
<br><br>

<br>
<br>
<br>
<br>


    <?php
    include('footer.php');
    ?>

</body>

</html>
