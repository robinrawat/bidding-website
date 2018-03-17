<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="donkeys8.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script language="javascript">
   

		
function validatecatog()
	{
		
		
	
		var e2 = document.getElementById("catog");
		
		
      
		var strUser2 = e2.options[e2.selectedIndex].value;
		
		if(strUser2==0)
		{   
			
			alert("Please select catagory");
			
			document.getElementById('catog').style.borderColor="red";
			
			return false;
		}
		else
		{
			
			document.getElementById('catog').style.borderColor="green";
		
		}
	}

	

</script>
</head>
<body>

<div id="container">
<header id="border">
   <img src="img1.png" style="margin:-35px 5px">
   <ul>
       <br>
       <br>
  <li><a href="index.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></li>
       
  <li><a href="upload_item.php"><font face="Comic sans MS">ADDITEM</font></a>
		
   </li>
     <li><a href="about_us.php"><font face="Comic sans MS">About Us</i></font></a>
 
	</li>
  
  
  <li><a href="contact.php"><font face="Comic sans MS">&#x260E; Contact Us</font></a></li>
  <li><a href="index1.php"><font face="Comic sans MS">Log Out</font></a>
     
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
<form align="center" method="POST" enctype="multipart/form-data" action="9hul_new.php">
   <h1><font color="Blue">item detail</font></h1><hr></hr></br>
   <div id="personal">Enter Required Details</div>
   <br/>
  catagory<select id="catog" name="catog"> 
    <option value="0">-select-</option>
   <option>cars</option>
   <option>books</option>
   <option>phones</option>
   <option>bikes</option>
   <option>rings</option>
   <option>guitars</option>
   <option>shoes</option>
   <option>sports</option>
   <option></option>
   </select>
   <br/>
 
  <input type="submit" value="Submit" onclick="return validatecatog();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Clear">
 </form>
 </form>

</article>
<footer>

<table  align="center">
  <tr>
    <th>CONTACT US</th>
    <th>QUICK LINKS</th>
	
  </tr>
  <tr>
    <td>&#x260E; +918390784614</br>for BIDDING PROBLEMS</td>
    <td><a href="faq.php">FAQ</a></td>
  </tr>
  <tr>
    <td>&#x260E; +918390784615</br>for ANY QUERY</td>
    <td><a href="faq.php">Terms & Conditions</a></td>
  </tr>
</table>
<div id="image1"><img src="img4.png"></div>
<pre>

</pre>
<hr></hr>
<p>Copyright &copy; 2017 -All rights reserved-<br/>Developed by RISHAB AND ROBIN</p>
</footer>




</body>
</html>