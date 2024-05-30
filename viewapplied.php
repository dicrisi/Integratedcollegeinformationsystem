<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Applied Details </title>

   
    <style>
        body {
            background-image: url('imgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: white;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 2px solid lightblue;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
            font-size: 16px;
        }

        th {
            background-color: brown;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #444;
        }

        tr:nth-child(odd) {
            background-color: #222;
        }

        tr:hover {
            background-color: #666;
        }

        a {
            color: lightblue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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

	<form  method="post"> 
 
      <div >
	    <h2 align="center">View Applied Details</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>aid</font></th>
		
			<th bgcolor=white><font color=black size=2>    Apply ID </font></th> 
			<th bgcolor=white><font color=black size=2>  Course Name </font></th> 
			<th bgcolor=white><font color=black size=2>   Registernumber </font></th> 
			<th bgcolor=white><font color=black size=2> Student Name</font></th> 
			<th bgcolor=white><font color=black size=2>   Date   </font></th> 
			<th bgcolor=white><font color=black size=2>   Action  </font></th> 
			<th bgcolor=white><font color=black size=2>   Delete  </font></th>
		 
		   
			
	</tr>


<br>
	<?php
	
	$query = "select * from apply";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>

		<td bgcolor=white><font color=black size=2><?php echo $row['aid']; ?></font></td>
	
		<td bgcolor=white><font color=black size=2><?php echo $row['bid']; ?></font></td>
	    <td bgcolor=white><font color=black size=2><?php echo $row['cname']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['regno']; ?></font></td> 
	    <td bgcolor=white><font color=black size=2><?php echo $row['name']; ?></font></td>
		<td bgcolor=white><font color=black size=2><?php echo $row['dat']; ?></font></td> 
			<td bgcolor=white><font color=black size=2><?php echo $row['sta']; ?></font></td> 
			<td><a href="?delete=<?php echo $row['aid'];?>">Delete</a></font></td>
        
	  
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 

<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from apply where aid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewapplied.php");
	exit;
	}
?>
</body>

</html>
