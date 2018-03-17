<?php
SESSION_START();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="donkeybanks.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div style="background-color:grey"><font style=" color:white; font-family:comic sans ms;  margin-left:50%;">Welcome&nbsp;&nbsp;&nbsp;
<?php

$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');
$c=$_SESSION['user'];

$sql=("SELECT *   FROM login where email='".$c."';");
$records=mysqli_query($con,$sql);
$employ=mysqli_fetch_assoc($records);
echo '<font style="background-color:blue;">';
echo "\t".$employ['username'];
echo '</font>'
?>
</font></div>
<div id="container" style="margin-top:20px;height:20px;">
<header id="border">
   <div id="logo"><a herf="#">GEU AUCTION</a></div>
   <ul>
  <li><a href="index.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></li>
  <li><a href="search.php"><font face="Comic sans MS">Search  <i class="fa fa-search"></i></font></a>
		
   </li>
     <li><a href="about_us.php"><font face="Comic sans MS">About Us</i></font></a>
 
	</li>
  
  
  <li><a href="contact.php"><font face="Comic sans MS">&#x260E; Contact Us</font></a></li>
  <li><a href="index1.php"><font face="Comic sans MS">Log Out</font></a>
     
  </li>
  
  </ul>
  </div>
  
  <form id="search" method="get" action="http://www.google.com/search">
	  <input type="text"  name=q size=31 maxlength=255 placeholder="search web">
	  
	  <button><i class="fa fa-search"></i></button>
	  </form>
<hr></hr>	  
</header>
<article>


<div id="box1"style="margin-top:50px;"><a href="upload_item.php">upload item</a></div>
<div id="box2"><a href="#"></a></div>
<div id="box5"><a href="#"></a></div>
<div id="box3"><a href="#"></a></div>
<div id="box4"><a href="#"></a></div>
<div id="box5"><a href="#"></a></div>


<div id="box6" style="margin-top:-610px; height:2000px;">
    <h1>ITEM ON AUCTION</h1>
		<?php
            //$_SESSION['user']=$_POST['uemail'];
            $con=mysqli_connect('localhost','root','robinrawat','auction');
            $sql=("SELECT * FROM image ");
            $records=mysqli_query($con,$sql);
             while($employ=mysqli_fetch_assoc($records))
            {    
                 $id=$employ['item_id'];
                 
                    $value=$employ['img'];
                 $p_name=$employ['iname'];
                 $base_price=$employ['b_amount'];
                   
                  echo '<tr>
                  <td><a href="bid.php?idd='.$id.'">'.'<img src="images/'.$value.'" width="150" height="170" padding:"1px" border:"1px">'.' '.'</img>'.'</a></td>
                  </tr>';
                   
                 echo  "     <br>";
                  $query=("select MAX(bid) AS max from bidder_table WHERE item_id=$id");
                    $result=mysqli_query($con,$query);
                    if($result === FALSE) { 
                            die(mysqli_error($con)); 
                        }
                     $row=mysqli_fetch_assoc($result);
                    $largestbid=$row['max'];
                 echo "<div id='rightdiv' style='margin-bottom:50px;'>";
        
                echo   " <label >";
                echo   "     NAME: $p_name";
                 echo  " </label>";
                 echo  "<br>";
                echo "<label >";
                echo    "    BASE PRICE: $base_price"; 
                 echo   "</label>";
                echo "<br>";
                 
                echo "<label >";
                echo   "  HIGHEST BID: $largestbid";
                echo " </label>";
                 echo  "<br>";
                 
            echo "</div>";
            }
        ?>

    </div>
</article>
<br>
<br>
    <br>

<footer  style="margin-top:2000px;">

<table  align="center">
  <tr>
    <th>CONTACT US</th>
    <th>QUICK LINKS</th>
	
  </tr>
  <tr>
  <td></td>
 
  </tr>
  <tr>
    <td>&#x260E; +918390784614</br>for BIDDING PROBLEM</td>
    <td><a href="faq.php">FAQ</a></td>
  </tr>
  <tr>
    <td>&#x260E; +918390784615<br>for OTHER QUERY</td>
    <td><a href="terms.php">Terms & Conditions</a></td>
  </tr>
</table>
<div id="image1"><img src="img4.png"></div>
<pre>

</pre>
<hr></hr>
<p>Copyright &copy; 2017 -All rights reserved-<br/>Developed by ROBIN AND RISHAB</p>
</footer>




</body>
</html>