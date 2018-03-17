<?php
SESSION_START();
$_SESSION['user']=$_POST['uemail'];
require 'connect.php';
	
    
	$c1=$_POST['uemail'];	
  $c2=$_POST['pwd'];
  

  
 $sql1=("SELECT * FROM login where email='$c1 'and password='$c2'");
$result=mysqli_query($con,$sql1);
 $row=mysqli_fetch_array($result);
 if($row['email']==$c1 && $row['password']==$c2)
{
	header("location:index.php"); 
}
else
{
	
  echo '<script>';
  echo'alert("Invalid User")';
 echo'</script>';
 header("refresh:0; url=login1.php");
 }
?>