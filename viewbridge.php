<?php
include('userheader.php');
include('style.php');
include('config.php');

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
	  


             <h2 align="center">View Brdige courses</h2>

	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=white><font color=black size=2>id</font></th>
		
			<th bgcolor=white><font color=black size=2> Course Name</font></th> 
			<th bgcolor=white><font color=black size=2> Description</font></th> 
			<th bgcolor=white><font color=black size=2>  Duration</font></th> 
		 
		    <th bgcolor=white><font color=black size=2>Action</font></th>
			
	
			

		


			  
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
        
	  
		<td bgcolor=white><font color=black size=2><a href="apply.php?select=<?php echo $row['bid'];?>">Apply Now</a></font></td>
	

            
		
		
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 



</body>

</html>
