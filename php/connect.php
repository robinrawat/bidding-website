<?php
//$_SESSION['user']=$_POST['uemail'];
$con=mysqli_connect('localhost','root','robinrawat');
if(!$con)
{
	echo 'Not connected';
}	
else{
	echo '';
}
if(!mysqli_select_db($con,'auction'))
{
	echo 'Database not selected';
}
else{
	echo'';
}

?>