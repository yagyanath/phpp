<?php
include("connection.php");
$query="INSERT INTO student values('7','Amarjeet','Elex')";
$data=mysqli_query($conn,$query);
if($data){ }
else{
die("connection fail".mysqli.connect_error());
}
?>