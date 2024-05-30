<?php
include('adminheader.php');
include('style.php');
include('config.php');

?>

<?php

if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `induction` VALUES (null,'".$_POST['pname']."','".$_POST['obj']."', '".$_POST['pduration']."','".$_POST['schedule']."','".$_POST['time']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:induction.php");
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

    <h2>Add  Induction Program</h2>

    <form method="post" action="">
        <table>
		 <tr>
                <td><b>id</b></td>
                <td><input type="text" name="cid" required></td>
            </tr>
            <tr>
                <td><b>Name OF the Program </b></td>
                <td><input type="text" name="pname" required></td>
            </tr>
			 <tr>
                <td><b> Program Objective </b></td>
                <td><input type="text" name="obj" required></td>
            </tr>
            <tr>
                <td><b> Program Duration  </b></td>
                <td><input type="text" name="pduration" required></td>
            </tr>
        <tr>
                <td><b> Program Schedule  </b></td>
                <td><input type="text" name="schedule" required></td>
            </tr>
			<tr>
                <td><b> Time Frame   </b></td>
                <td><input type="text" name="time" required></td>
            </tr>
        </table>

    <input type="submit" name="submit" value="submit">

        <br>
        <a href="adminhome.php" style="color: black;">Back</a>
    </form>



	<form  method="post"> 
 
      <div >
	  


             <h2 align="center">View Induction Programme</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>cid</font></th>
		
			<th bgcolor=white><font color=black size=2>  Name OF the Program</font></th> 
			<th bgcolor=white><font color=black size=2> Program Objective</font></th> 
			<th bgcolor=white><font color=black size=2>  Program Duration </font></th> 
				<th bgcolor=white><font color=black size=2>Program Schedule</font></th> 
			<th bgcolor=white><font color=black size=2>  Time Frame   </font></th> 
		 
		    <th bgcolor=white><font color=black size=2>Update</font></th>
			 <th bgcolor=white><font color=black size=2>Delete</font></th>
	
			

		


			  
	</tr>


<br>
	<?php
	
	$query = "select * from induction";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['cid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['pname']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['obj']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['pduration']; ?></font></td> 
			    <td bgcolor=white><font color=black size=2><?php echo $row['schedule']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['time']; ?></font></td> 
        
	  
		<td bgcolor=white><font color=black size=2><a href="updat.php?select=<?php echo $row['cid'];?>">Update</a></font></td>
		<td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['cid'];?>">Delete</a></font></td>

            
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 


<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from induction where cid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:induction.php");
	exit;
	}
?>

    <?php
   include('footer.php');
    ?>

</body>

</html>
