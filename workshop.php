<?php
include('adminheader.php');
include('style.php');
include('config.php');

?>

<?php

if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `workshop` VALUES (null,'".$_POST['fname']."','".$_POST['ftype']."', '".$_POST['pduration']."','".$_POST['location']."','".$_POST['sdat']."','".$_POST['edat']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:workshop.php");
//	exit;
 
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Bridge Course </title>

   
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

    <h2>Add  Workshop Details</h2>

    <form method="post" action="">
        <table>
		 <tr>
                <td><b>Fid</b></td>
                <td><input type="text" name="fid" required></td>
            </tr>
            <tr>
                <td><b>Fest Name </b></td>
                <td><input type="text" name="fname" required></td>
            </tr>
			 <tr>
                <td><b>  Fest Type </b></td>
                <td><input type="text" name="ftype" required></td>
            </tr>
            <tr>
                <td><b> Fest Duration </b></td>
                <td><input type="text" name="pduration" required></td>
            </tr>
        <tr>
                <td><b>  Location </b></td>
                <td><input type="text" name="location" required></td>
            </tr>
			<tr>
                <td><b>Start Date </b></td>
                <td><input type="date" name="sdat" required></td>
            </tr>
			<tr>
                <td><b>End Date </b></td>
                <td><input type="date" name="edat" required></td>
            </tr>
        </table>

    <input type="submit" name="submit" value="submit">

        <br>
        <a href="adminhome.php" style="color: black;">Back</a>
    </form>



	<form  method="post"> 
 
      <div >
	  


             <h2 align="center">View Workshop Programme</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>fid</font></th>
		
			<th bgcolor=white><font color=black size=2>   Fest Name </font></th> 
			<th bgcolor=white><font color=black size=2>  Fest Type</font></th> 
			<th bgcolor=white><font color=black size=2>  Fest Duration </font></th> 
				<th bgcolor=white><font color=black size=2> Location</font></th> 
			<th bgcolor=white><font color=black size=2>   Start Date   </font></th> 
			<th bgcolor=white><font color=black size=2>   End Date   </font></th> 
		 
		    <th bgcolor=white><font color=black size=2>Update</font></th>
			 <th bgcolor=white><font color=black size=2>Delete</font></th>
	
			

		


			  
	</tr>


<br>
	<?php
	
	$query = "select * from workshop";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['fid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['fname']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['ftype']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['pduration']; ?></font></td> 
			    <td bgcolor=white><font color=black size=2><?php echo $row['location']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['sdat']; ?></font></td> 
			<td bgcolor=white><font color=black size=2><?php echo $row['edat']; ?></font></td> 
        
	  
		<td bgcolor=white><font color=black size=2><a href="updation.php?select=<?php echo $row['fid'];?>">Update</a></font></td>
		<td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['fid'];?>">Delete</a></font></td>

            
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 


<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from workshop where fid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:workshop.php");
	exit;
	}
?>

    <?php
   include('footer.php');
    ?>

</body>

</html>
