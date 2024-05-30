<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>

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


<form method="post">

    <div>

        <br>
        <br>
        <br>
        <br>

        <br>

        <h2 align="center">Students Details</h2>

        <table class="displaycontent">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
				 <th>Profile</th>
                <th>Register Number</th>
                <th>Address</th>
                <th>Department</th>
                <th>Email</th>
                <th>Mobile</th>
              
			
                <th>DOB</th>
				
                <th>Blood Group</th>
			
				  <th> Update</th>
				    <th>Delete </th>
            </tr>
            <?php
            $query = "SELECT * FROM user ";
            $result = mysql_query($query) or die(mysql_error());
            while ($row = mysql_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['password']; ?></td>
				
		<td><img src="<?php echo $row['uimg'];?>" width="50" height="50"></td>
                    <td><?php echo $row['regno']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['dat']; ?></td>
					 <td><?php echo $row['bloodgrp']; ?></td>
					 <td ><a href="update.php?select=<?php echo $row['id'];?>">Update</a></font></td>
		<td><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
                </tr>
            <?php }  ?>
        </table>
    </div>

</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from user where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:vstu.php");
	exit;
	}
?>
<br><br>

<?php
include('footer.php');
?>
