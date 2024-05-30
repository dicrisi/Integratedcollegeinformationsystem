<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
    $query2 = "select * from workshop where fid='".$_GET['select']."'";
    $result = mysql_query($query2);
    if(mysql_num_rows($result)){
        $row = mysql_fetch_assoc($result);
    }
}

?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Workshop Details</title>
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
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data" name="addroom">
            <center>
                <br>
                <br>
                <br>
                <br>
                <center><font color="black" size="8">Update Workshop Details </font></center>
                <br>
                <b> Id</b><br />
                <input name="fid" type="text" value="<?php  echo $row['fid']; ?>" readonly />
                <br />
                <b> Fest Name</b><br />
                <input name="fname" type="text"  value="<?php  echo $row['fname']; ?>"  />
                <br /> 
                <b>Fest Type</b><br />
                <input name="ftype" type="text" value="<?php  echo $row['ftype']; ?>"  /> 
                <br />
                <b> Program Duration</b><br />
                <input name="pduration" type="text" value="<?php  echo $row['pduration']; ?>"  /> 
                <br />
                <b> Location</b><br />
                <input name="location" type="text" value="<?php  echo $row['location']; ?>"  /> 
                <br />
                <b> Start date </b><br />
                <input name="sdat" type="text" value="<?php  echo $row['sdat']; ?>"  /> 
                <br />
                <b> End Date </b><br />
                <input name="edat" type="text" value="<?php  echo $row['edat']; ?>"  /> 
                <br />
                <input type="submit" name="submit" value="Update" id="button1" />
                <br>
            </center>
        </form>
    </div>

<?php
if(isset($_POST['submit'])){
    $query = "UPDATE workshop SET fname='".$_POST['fname']."', ftype='".$_POST['ftype']."', pduration='".$_POST['pduration']."', location='".$_POST['location']."', sdat='".$_POST['sdat']."', edat='".$_POST['edat']."' WHERE fid= '".$_GET['select']."'";
    if(mysql_query($query)){
        echo 'UPDATE SUCCESSFULLY';
    }
    else{
        echo 'NOT UPDATE';
    }
    header("location:workshop.php");
    exit;
}
?>

<br>
<br>
<br>
<br>
<br>
<?php 
	include_once("footer.php");
?>
</body>
</html>
