<?php
include('userheader.php');
include('style.php');
include('config.php');
error_reporting(0);
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
		 
		    <th bgcolor=white><font color=black size=2>Action</font></th>
			
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
        
	  
		<td bgcolor=white><font color=black size=2><a href="intapply.php?select=<?php echo $row['sid'];?>">Apply Now</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
</div>

</form> 

</body>

</html>
