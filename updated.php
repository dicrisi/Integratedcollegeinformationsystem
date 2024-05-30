<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
$query2 = "select * from bridgecourse where bid='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}

?>	


<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

 <style>
  body {
            background-image: url('imgg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
			color:white;
 }
        
</style>
<br>
<br>
<br>
<br>
<center><font color="black" size="8">Update Bridge Course Details </font></center>
</br>

<b> Id</b><br />
 <input name="bid" type="text" value="<?php  echo $row['bid']; ?>" readonly />
 <br />

<b>  Course Name</b><br />
 <input name="cname" type="text"  value="<?php  echo $row['cname']; ?>"  />
 <br /> 
<b>Description</b><br />
 <input name="description" type="text" value="<?php  echo $row['description']; ?>"  /> 
 <br />
 <b>Duration</b><br />
 <input name="duration" type="text" value="<?php  echo $row['duration']; ?>"  /> 
 <br />

 

  <input type="submit" name="submit" value="Update" id="button1" />
  <br>


 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){
$query = "update bridgecourse set   cname='".$_POST['cname']."', description='".$_POST['description']."', duration='".$_POST['duration']."'  where bid= '".$_GET['select']."'";
	echo $query;
      
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:bridge.php");
	exit;
//}
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