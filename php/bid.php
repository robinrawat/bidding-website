<?php
            session_start();
          

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
   <img src="img1.png" style="margin:-35px 5px">
   <ul>
  <li><a href="index.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></li>
  <li><a href="search.php"><font face="Comic sans MS">Search  <i class="fa fa-search"></i></font></a>
		
   </li>
     <li><a href="about_us.php"><font face="Comic sans MS">About Us</i></font></a>
 
	</li>
  
  
  <li><a href="http://localhost/HTML/DBMS%20Project/6.php"><font face="Comic sans MS">&#x260E; Contact</font></a></li>
  <li><a href="index1.php"><font face="Comic sans MS">Log Out</font></a>
     
  </li>
  
  </ul>
  </div>
   <h1>Item for bid:</h1>
  <form id="search" method="get" action="http://www.google.com/search">
	  <input type="text"  name=q size=31 maxlength=255 placeholder="search web">
	  
	  <button><i class="fa fa-search"></i></button>
	  </form>
    <div id="leftdivv">
   
    <?php
    
        $vi=$_GET['idd'];
        $con=mysqli_connect('localhost','root','robinrawat','auction');
        $sql=("SELECT * FROM image WHERE item_id=$vi ");
        $records=mysqli_query($con,$sql);
             while($employ=mysqli_fetch_assoc($records))
            {    
                
                 
                    $value=$employ['img'];
                  echo '<tr>
                  <td><a href="#">'.'<img src="images/'.$value.'" width="150" height="170">'.' '.'</img>'.'</a></td>
                  
                  </tr>';
                  $p_name=$employ['iname'];
                 $p_price=$employ['b_amount'];
            }
    
    ?>
        
    </div>
    <div id="rightdivv">
        
            <label for="">
                NAME: <span class="current-price">
                                    <?php echo $p_name; ?>


                                </span>
                                <span class="reserve-met">
                                </span>
            </label>
        <br>
        <label for="">
                BASE PRICE: <span class="current-price">
                                    <?php echo $p_price; ?>


                                </span>
                                <span class="reserve-met">
                                </span>
            </label>
        <br>
       <form method="post">
           PLACE YOUR BID : <input  type="text" name="bid" cols='4' rows='1'>
           <input id="bid1" onclick="myfunction();" type="submit" name="insert" value="submit">
        </form>
        
        <?php
                
            $connect= mysqli_connect("localhost","root","robinrawat","auction");
            if(isset($_POST['insert']))
            {
                $bid=$_POST['bid'];
                $query="INSERT INTO bidder_table(item_id,bider_name,bid) VALUES ('$vi','$c','$bid')";
                $result= mysqli_query($connect,$query);
                if($result === FALSE) { 
                        die(mysqli_error($connect)); 
                }
                else
                {
                    echo '<script>alert("bid successful")</script>';
                }
            }
    ?>
       
    </div> 
<footer id="foot">

<table  align="center">
  <tr>
    <th>CONTACT US</th>
    <th>QUICK LINKS</th>
	
  </tr>
  <tr>
  <td></td>
    <td><a href="#"></a></td>
  </tr>
  <tr>
    <td>&#x260E; +918390784614<br>for BIDDING RELATED</td>
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
<hr><hr>
<p>Copyright &copy; 2017 -All rights reserved-<br>Developed by Rishab Raina & Robin Rawat</p>
</footer>
</body>
</html>
<script>
    function myfunction(){
        var mun=  (/^[0-9]+$/);
        var bid= document.getElementById("bid1").value;
        var baseprice="<?php echo $p_price; ?>";
        if(bid == '')
            {
                alert("please fill the field");
                header("refresh:0;url=search.php");
            }
        else if (bid.match(mun))
            { 
                alert("please enter numbers only");
                header("refresh:0;url=search.php.php");
            }
        else if(bid < baseprice)
            {
                 alert("please amount greater than baseprice");
                header("refresh:0;url=bid.php");
            }
    }
    
</script>