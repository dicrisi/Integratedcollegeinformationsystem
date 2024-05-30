<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
$query2 = "select * from induction where cid='".$_GET['select']."'";
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
<center><font color="black" size="8">Update Induction Program Details </font></center>
</br>

<b> Id</b><br />
 <input name="cid" type="text" value="<?php  echo $row['cid']; ?>" readonly />
 <br />

<b>   Name Of the program</b><br />
 <input name="pname" type="text"  value="<?php  echo $row['pname']; ?>"  />
 <br /> 
<b>program objective</b><br />
 <input name="obj" type="text" value="<?php  echo $row['obj']; ?>"  /> 
 <br />
 <b> Program Duration</b><br />
 <input name="pduration" type="text" value="<?php  echo $row['pduration']; ?>"  /> 
 <br />
 <b> Program Schedule</b><br />
 <input name="schedule" type="text" value="<?php  echo $row['schedule']; ?>"  /> 
 <br />
  <b> TimeFrame </b><br />
 <input name="time" type="text" value="<?php  echo $row['time']; ?>"  /> 
 <br />
 

  <input type="submit" name="submit" value="Update" id="button1" />
  <br>


 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){
$query = "update induction set   pname='".$_POST['pname']."', obj='".$_POST['obj']."', pduration='".$_POST['pduration']."' , schedule='".$_POST['schedule']."', time='".$_POST['time']."'   where cid= '".$_GET['select']."'";
	echo $query;
      
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:induction.php");
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