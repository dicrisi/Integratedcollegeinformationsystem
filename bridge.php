<?php
include('adminheader.php');
include('style.php');
include('config.php');

?>

<?php

if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `bridgecourse` VALUES (null,'".$_POST['cname']."','".$_POST['description']."', '".$_POST['duration']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:bridge.php");
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

    <h2>Add  Bridge Course</h2>

    <form method="post" action="">
        <table>
		 <tr>
                <td><b>id</b></td>
                <td><input type="text" name="bid" required></td>
            </tr>
            <tr>
                <td><b>Course Name</b></td>
                <td><input type="text" name="cname" required></td>
            </tr>
			 <tr>
                <td><b>Description </b></td>
                <td><input type="text" name="description" required></td>
            </tr>
            <tr>
                <td><b>Duration  </b></td>
                <td><input type="text" name="duration" required></td>
            </tr>
       
        </table>

    <input type="submit" name="submit" value="submit">

        <br>
        <a href="adminhome.php" style="color: black;">Back</a>
    </form>



	<form  method="post"> 
 
      <div >
	  


             <h2 align="center">View Brdige courses</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>id</font></th>
		
			<th bgcolor=white><font color=black size=2> Course Name</font></th> 
			<th bgcolor=white><font color=black size=2> Description</font></th> 
			<th bgcolor=white><font color=black size=2>  Duration</font></th> 
		 
		    <th bgcolor=white><font color=black size=2>Update</font></th>
			 <th bgcolor=white><font color=black size=2>Delete</font></th>
	
			

		


			  
	</tr>


<br>
	<?php
	
	$query = "select * from bridgecourse";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['bid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['cname']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['description']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['duration']; ?></font></td> 
        
	  
		<td bgcolor=white><font color=black size=2><a href="updated.php?select=<?php echo $row['bid'];?>">Update</a></font></td>
		<td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['bid'];?>">Delete</a></font></td>

            
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 


<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from bridgecourse where bid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:bridge.php");
	exit;
	}
?>

    <?php
   include('footer.php');
    ?>

</body>

</html>
