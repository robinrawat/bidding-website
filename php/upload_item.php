<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="donkeys8.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script language="javascript">
  var flag=0;
function validate()
{
	
	
    validatemname();
	validatecatog();
   validateamount();
   
   
 
   
  
   if(flag==0)
   return true;
   return false;
}
		
			function validatemname()
	{
		
		flag=0;
		var mname=document.getElementById('mname').value;
		
		
		
		var character=/^[a-z0-9A-Z\s]+$/; 
		
		if (mname=="")
    		{
				flag=1;
     			alert(" Item Name must be filled.");
				document.getElementById('mname').style.borderColor="red";
     		        return false;
		}
		
        else if(!mname.match(character))
                
		{       flag=1;
			alert(" Item Name only contains alphanumeric");
			document.getElementById('mname').style.borderColor="red";
     		        return false;
		}
		
		else{document.getElementById('mname').style.borderColor="green";}	
        }
	

	function validateamount()
	{
		if(flag==0)
		flag=0;
		else
		flag=1;
		var mobile=document.getElementById('bal').value;
		if (mobile=="")
    		{    flag=1;
     			alert("Amount must be filled.");
				document.getElementById('bal').style.borderColor="red";
     		        return false;
		}
		
        else if (mobile.indexOf(" ")!=-1)
    		{  
			    flag=1;
     			alert("Amount has no spaces");
				document.getElementById('bal').style.borderColor="red";
     		        return false;
		}
		else if(isNaN(mobile))
		{
		    flag=1;
			alert("Amount only contains numbers");
				document.getElementById('bal').style.borderColor="red";
     		        return false;
        }
		else{document.getElementById('bal').style.borderColor="green";
	}	
	}

    
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(170);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	function validatecatog()
	{
		if(flag==0)
		flag=0;
		else
		flag=1;
	
		var e2 = document.getElementById("catog");
		
		
      
		var strUser2 = e2.options[e2.selectedIndex].value;
		
		if(strUser2==0)
		{   
			flag=1;
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
  <li><a href="search.php"><font face="Comic sans MS">search</font></a>
		
   </li>
     <li><a href="about_us.php"><font face="Comic sans MS">About Us</i></font></a>
 
	</li>
  
  
  <li><a href="contact.php"><font face="Comic sans MS">&#x260E; Contact</font></a></li>
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
<form align="center" method="POST" enctype="multipart/form-data" action="upload_link.php">
<h1><font color="Blue">New Customer Account</font></h1><hr></hr></br>
<div id="personal">Personal Details</div>
  
  <div id="photo1"><img id="blah" name="blah" src="#" alt="Upload photo"></div>
   <div id="choose1"><input type="file" id="ph" name="image"  onchange="readURL(this);"/></div>
   
  <br/>
  
  Item Name :&nbsp; 
   
  <input type="text" id="mname" name="mname" placeholder="Item name"/>
  
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
 Amount :&nbsp;<input type="text" id="bal" name="bal" placeholder="&#x20B9;">
  <br/>
  
  
 <br/><br/>
  <input type="submit" value="Submit" onclick="return validate();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Clear">
 </form>

</article>
<footer>

<table  align="center">
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
<p>Copyright &copy; 2017 -All rights reserved-<br/>Developed by ROBIN AND RISHAB</p>
</footer>




</body>
</html>