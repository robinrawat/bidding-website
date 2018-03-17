<?php
SESSION_START();
$_SESSION['cat']=$_POST['catog'];
$con=mysqli_connect('localhost','root','robinrawat');
if(!$con)
{
	echo 'Not connected';
}	
if(!mysqli_select_db($con,'auction'))
{
	echo 'Database not selected';
}
  $c1=$_POST['catog'];
  
  


$sql=("SELECT * FROM image where cat='$c1'");
$records=mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($records);


if($rowcount==0)
{   

    echo '<script>alert("sorry")</script>';
    header("refresh:0;url=search.php");
}
else
{
		header("location:9hul.php");
}
	
	

?>
