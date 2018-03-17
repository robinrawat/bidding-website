

<?php
SESSION_START();
$con=mysqli_connect('localhost','root','robinrawat');
if(!$con)
{
	echo 'Not connected';
}	
if(!mysqli_select_db($con,'auction'))
{
	echo 'Database not selected';
}
  $c1=$_SESSION['cat'];
  
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="donkeyl8.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

<div id="container">
<header id="border">
   <img src="img1.png" style="margin:-35px 5px">
    <br>
    <br>
    <br>
   <ul>
  <li><a href="index.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></li>
  <li><a href="upload_item.php"><font face="Comic sans MS">ADDITEM</font></a>
		
   </li>
     <li><a href="about_us.php"><font face="Comic sans MS">About Us</i></font></a>
 
	</li>
  
  
  <li><a href="http://localhost/HTML/DBMS%20Project/6.php"><font face="Comic sans MS">&#x260E; Contact</font></a></li>
  <li><a href="http://localhost/HTML/DBMS%20Project/index1.php"><font face="Comic sans MS">Log Out</font></a>
     
  </li>
  
  </ul>
  </div>
  <form id="search" method="get" action="http://www.google.com/search">
	  <input type="text"  name=q size=31 maxlength=255 placeholder="What u looking for?">
	  
	  <button><i class="fa fa-search"></i></button>
	  </form>
<hr></hr>	  
</header>
<article>
<center><font style="font-family:comic sans ms; color:green; font-size:30px;"><strong> Item Found sucessfully ! ! !</strong></font></center>
<hr/><p/><font style="font-family:comic sans ms; color:grey; font-size:20px;"><i class="fa fa-soundcloud" style="font-size:40px;"></i> The details are :</font><br/><br/>

<table id="tab">
<tr>
	
	<th>Image</th>
	<th>Item Name</th> 
	<th>Base Amount</th> 
	<th>Category</th>
	<th>Hishest Bid</th>
	
</tr>

<?php
$con=mysqli_connect('localhost','root','robinrawat');
mysqli_select_db($con,'auction');
$sql=("SELECT * FROM image where cat='$c1'");
$records=mysqli_query($con,$sql);

  
	
	
	while($employ=mysqli_fetch_assoc($records))
    {    
        $id=$employ['item_id'];
		$value=$employ['img'];
        $query=("select MAX(bid) AS max from bidder_table WHERE item_id=$id");
                    $result=mysqli_query($con,$query);
                    if($result === FALSE) { 
                            die(mysqli_error($con)); 
                        }
                     $row=mysqli_fetch_assoc($result);
                    $largestbid=$row['max'];
	  echo '<tr>
	  <td><a href="bid.php?idd='.$id.'">'.'<img src="images/'.$value.'" width="150" height="170">'.' '.'</img></td>
	
	  <td>'.$employ['iname'].'</td>
	  <td>'.$employ['b_amount'].'</td>
	  <td>'.$employ['cat'].'</a></td>
	  <td>'.$largestbid.'</td>
	  </tr>';
	  
        
    }
?>
</table>

<br/>
<center><a href="search.php"><input type="submit" value="Do you wana search more?"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>


</article>



<footer>

<table  align="center" id="table1">
  <tr>
    <th>CONTACT US</th>
    <th>QUICK LINKS</th>
	
  </tr>
  <tr>
    <td>&#x260E; +918390784614</br>for BIDDING RELATED</td>
    <td><a href="faq.php">FAQ</a></td>
  </tr>
  <tr>
    <td>&#x260E; +918390784615</br>for OTHER QUERY</td>
    <td><a href="terms.php">Terms & Conditions</a></td>
  </tr>
</table>
<div id="image1"><img src="img4.png"></div>
<pre>

</pre>
<hr></hr>
<p>Copyright &copy; 2017 -All rights reserved-<br/>Developed by Rishab Raina & Robin Rawat</p>
</footer>




</body>
</html>