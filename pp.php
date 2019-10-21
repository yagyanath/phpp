<?php
 include("connection.php");
 error_reporting(0);  ?>
 <!DOCTYPE html> <html>
<head><title>Document</title>
<link rel="stylesheet" href="style.css">
</head> <body> <h1>welcome</h1> 
<form action="display.php"method="post" enctype="multipart/form-data">
Rollno<input type="text" name="rollno" value=""/>  <br><br>   
Name <input type="text" name="name" value=""/><br><br>
Class <input type="text" name="class" value=""/> <br><br>
<input type="file" name="uploadfile" value=""/><br><br>
<input type="submit" name="submit" value="Submit"/>
 <?php
 if($_POST['submit'] ) {
    $rn=$_POST['rollno'];
    $sn=$_POST['name'];
    $cl=$_POST['class'];
    $filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="student/".$filename; echo$folder;  
move_uploaded_file($tempname,$folder);
    if($rn!="" &&$sn!=""&&$cl!=""&&$filename!=""){
        $query="INSERT INTO student values('$rn','$sn','$cl','$folder')";
        $data=mysqli_query($conn,$query);
        if($data){
            echo "data insetred";}    }
     else{echo"<br> All fields required";}
 }
  ?>
</form></body> </html>