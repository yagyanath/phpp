<style>td{ padding:10px; } </style>
<?php
include("connection.php"); error_reporting(0);
$query="SELECT *from student";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total !=0){  ?>
<table> <tr> 
<th>Rollno </th>
<th>Image </th>
<th>Name </th>
<th>Class </th>
<th colspan= "2">Operations </th></tr>   
<?php
while($result= mysqli_fetch_assoc($data)){
echo"<tr>
<td>".$result['rollno']."</td>
<td><a href='$result[picsource]'><img src='".$result['picsource']." 'height='100' width='100'/></a></td>
<td>".$result['name']."</td>
<td>".$result['class']."</td>
<td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
<td><a href='delete.php?rn=$result[rollno]' onclick= 'return checkdelete()'>Delete</a></td>
</tr>" ;  } }
else{echo"<br>no records";}
?> </table>
<script>
function checkdelete(){
return confirm('Are you want to detelte');  }
</script>