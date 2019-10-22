<?php
include("connection.php");error_reporting(0);
$_GET['rn'];$_GET['sn'];$_GET['cl'];?>
<!DOCTYPE html>
<html>
<head><title>update</title>
</head> <body>
<form action="" method="GET">
Rollno<input type="test" name="rollno" value="<?php echo $_GET['rn'];?>"/><br><br>   
Name<input type="test" name="name" value="<?php echo $_GET['sn'];;?>"/><br><br>
Class<input type="test" name="class" value="<?php echo $_GET['cl'];?>"/><br><br>
<input type="submit" name="submit" value="Update"/>
</form>
<?php
if($_GET['submit']) {
$rollno=$_GET['rollno'];
$name=$_GET['name'];
$class=$_GET['class'];
$query="update student set name='$name',class='$class' where rollno='$rollno'";
$data= mysqli_query($conn,$query);
if($data){echo"<font color='green'>updated succesfully.<a href='display.php'>check update";}
else{echo"<font color='red'>button press.<a href='display.php'> check update here";}
}
else{echo"<font color='blue'>click on for update";}
?>
</body></html>