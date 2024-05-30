<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
?>

<?php

if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `intern` VALUES (null,'".$_POST['iname']."','".$_POST['ititle']."', '".$_POST['pduration']."','".$_POST['time']."','".$_POST['dat']."','".$_POST['field']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:intern.php");
//	exit;
 
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  internship Course </title>

   
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
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
        }

        label, input {
            display: inline-block;
            margin-bottom: 10px;
        }

        label {
            width: 120px; 
            text-align: right;
            margin-right: 10px;
        }

    </style>
</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <h2>Add  Internship Details</h2>

    <form method="post" action="">
        <table>
		 <tr>
                <td><b>id</b></td>
                <td><input type="text" name="sid" required></td>
            </tr>
            <tr>
                <td><b>Internship Name </b></td>
                <td><input type="text" name="iname" required></td>
            </tr>
			 <tr>
                <td><b>   Internship Title </b></td>
                <td><input type="text" name="ititle" required></td>
            </tr>
            <tr>
                <td><b> Internship Duration </b></td>
                <td><input type="text" name="pduration" required></td>
            </tr>
        <tr>
                <td><b>  Time </b></td>
                <td><input type="text" name="time" required></td>
            </tr>
			<tr>
                <td><b> Date </b></td>
                <td><input type="date" name="dat" required></td>
            </tr>
			<tr>
                <td><b>Fields  </b></td>
                <td><input type="text" name="field" required></td>
            </tr>
        </table>

    <input type="submit" name="submit" value="submit">

        <br>
        <a href="adminhome.php" style="color: black;">Back</a>
    </form>



	<form  method="post"> 
 
      <div >
	  


             <h2 align="center">View Internship Programme</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>sid</font></th>
		
			<th bgcolor=white><font color=black size=2>   Internship Name </font></th> 
			<th bgcolor=white><font color=black size=2>  Internship Title </font></th> 
			<th bgcolor=white><font color=black size=2>  Internship Duration </font></th> 
				<th bgcolor=white><font color=black size=2> Time</font></th> 
			<th bgcolor=white><font color=black size=2>   Date   </font></th> 
			<th bgcolor=white><font color=black size=2>   Fields  </font></th> 
		 
		    <th bgcolor=white><font color=black size=2>Update</font></th>
			 <th bgcolor=white><font color=black size=2>Delete</font></th>
	
			

		


			  
	</tr>


<br>
	<?php
	
	$query = "select * from intern";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['sid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['iname']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['ititle']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['pduration']; ?></font></td> 
			    <td bgcolor=white><font color=black size=2><?php echo $row['time']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['dat']; ?></font></td> 
			<td bgcolor=white><font color=black size=2><?php echo $row['field']; ?></font></td> 
        
	  
		<td bgcolor=white><font color=black size=2><a href="intupd.php?select=<?php echo $row['sid'];?>">Update</a></font></td>
		<td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['sid'];?>">Delete</a></font></td>

            
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 


<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from intern where sid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:intern.php");
	exit;
	}
?>

    <?php
   include('footer.php');
    ?>

</body>

</html>
\