<?php
include("connection.php");
error_reporting(0);
$rollno=$_GET['rn'];
$query="DELETE FROM student where rollno='$rollno'";
$data=mysqli_query($conn,$query);
if($data){echo"<script>alert('Record Deleted')</script>"; 
    ?>
<META HTTP-EQUIV="Refresh"CONTENT="0;URL=http://localhost/phpdatabaseconnection/display.php">
<?php   }
else {echo"<font color='red'>Sorrynot deleteed";}
?>