<?php
$con=mysqli_connect('localhost','root','robinrawat');
if(!$con)
{
	echo 'Not connected';
}	
if(!mysqli_select_db($con,'Auction'))
{
	echo 'Database not selected';
}

	
  
	$c1=$_POST['usemail'];	
  $c2=$_POST['pwd1'];
  $c3=substr($c1, 0, strpos($c1, '@'));
  
  
 $sql1=("INSERT INTO login(username,email,password) VALUES ('$c3','$c1','$c2')");
 
mysqli_query($con,$sql1);




?>