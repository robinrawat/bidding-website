<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="donkey4.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script language="javascript">
 var flag=0;
function validate()
{
validatemail();
validatepass();
 if(flag==0)
   return true;
   return false;

}
function validatemail() 
	 {     
	 flag=0;
	       var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/;
            var email = document.getElementById('usemail').value;
			
			if(email=="")
			{   
				flag=1;
				alert("Email ID must be filled.");
				document.getElementById('usemail').style.borderColor="red";
				return false;
			}
            else if (!email.match(reg)) 
          {
				flag=1;
				alert("Email id is invalid.")
				document.getElementById('usemail').style.borderColor="red";
				return false;
			}
			else
			{
				document.getElementById('usemail').style.borderColor="green";
			}
 }
 function validatepass() 
	 {
	      
		if(flag==0)
		flag=0;
		else
		flag=1;
            var email1 = document.getElementById('pwd1').value;
			var email2 = document.getElementById('pwd2').value;
			
			if(email1=="" ||email2=="")
			{   
		        flag=1;
				alert("Password must be filled.");
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
				return false;
			}
            else if (email1.length<8||email2.length<8) 
          {
				flag=1;
				alert(" Password must have atleast 8 characters")
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
				return false;
			}
			else if(email1!=email2)
			{
				flag=1;
				alert(" Passwords doesn't Match.");
				document.getElementById('pwd1').style.borderColor="red";
				document.getElementById('pwd2').style.borderColor="red";
			}
			else
			{
				
				document.getElementById('pwd1').style.borderColor="green";
				document.getElementById('pwd2').style.borderColor="green";
				
			}
 }
</script>
</head>
<body>
<center><a href="http://localhost/HTML/DBMS%20Project/index1.php"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></center>
<div id="cool"><h1>Sign Up</h1><br/><br/></div>
<form method="POST" enctype="multipart/form-data" action="login1.php">
<div id="log">
<br/>
<input type="text" id="usemail" name="usemail"  placeholder="Enter your Email"><br/><br/><br/>

<input type="password" id="pwd1" name="pwd1" placeholder="Enter your Password"><br/><br/><br/>
<input type="password" id="pwd2" name="pwd2" placeholder="Re-enter your Password"><br/><br/>
<div id="goat"><a href="login1.php"><input type="submit"  value="Submit" onclick="return validate();" ></a></div>
<br/><font style="color:#ffeb99;">If your account alredy exists then </font><div id="late"><a href="login1.php">Log In</a></div>
</div>
</form>
</body>
</html>
