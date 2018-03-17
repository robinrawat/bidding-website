<?php

require 'connect.php';
session_start();
$c1=$_SESSION['user'];


                 $img = $_FILES['image']['name'];
				 $img_tmp=$_FILES['image']['tmp_name'];
				 move_uploaded_file($img_tmp,"images/$img");
				 
				  
  
  $c2=$_POST['mname'];
  
  $c3=$_POST['bal'];
  $c4=$_POST['catog'];
 
  
 $sql1=("INSERT INTO image(img,iname,b_amount,cat,username) VALUES ('$img','$c2','$c3','$c4','$c1')");

  
mysqli_query($con,$sql1);



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="donkeys8.css"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>
<body>

<article>
<center><font style="font-family:comic sans ms; color:green; font-size:30px;"><strong>Your data has been saved sucessfully ! ! !</strong></font></center>
<hr/><p/><font style="font-family:comic sans ms; color:grey; font-size:20px;"><i class="fa fa-soundcloud" style="font-size:40px;"></i> You just entered :</font><br/><br/>
<?php
$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');

echo $img;
?>
<center><img src="images/<?php echo $img?>" width="150" height="170"></img></center>
Item Name:
<?php
$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');

echo $c2;
?>
Base Amount:
<?php
$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');

echo $c3
?>
catagories:
<?php
$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');

echo $c4;
?>

</article>
<footer>
    <div id="container">
<header id="border">
   <img src="img1.png" style="margin:-35px 5px">
   <ul>
       <br>
       <br>
  <li><a href="index.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></li>
  <li><a href="search.php"><font face="Comic sans MS">search</font></a>
		
   </li>
     <li><a href="upload_item.php"><font face="Comic sans MS">add item</i></font></a>
 
	</li>
  
  
  <li><a href="contact.php"><font face="Comic sans MS">&#x260E; Contact</font></a></li>
  <li><a href="index1.php"><font face="Comic sans MS">Log Out</font></a>
     
  </li>
  
  </ul>
  </div>
    
</footer>
</body>
</html>


