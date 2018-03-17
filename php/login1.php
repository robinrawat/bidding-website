
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="monkey.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>

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
            var email = document.getElementById('uemail').value;
			
			if(email=="")
			{   flag=1;
				alert("Email ID must be filled.");
				document.getElementById('uemail').style.borderColor="red";
				return false;
			}
            else if (!email.match(reg)) 
          {
				flag=1;
				alert("Email id is invalid.")
				document.getElementById('uemail').style.borderColor="red";
				return false;
			}
			
 }
 function validatepass() 
	 {
		 if(flag==0)
		flag=0;
		else
		flag=1;
	      
            var email = document.getElementById('pwd').value;
			
			if(email=="")
			{   flag=1;
				alert("Password must be filled.");
				document.getElementById('pwd').style.borderColor="red";
				return false;
			}
            else if (email.length<8) 
          {
				flag=1;
				alert(" Password must have atleast 8 characters")
				document.getElementById('pwd').style.borderColor="red";
				return false;
			}
			
 }
</script>
</head>
<body>
<center><a href="#"><font face="Comic sans MS"><i class="fa fa-home" style="font-size:40px;"></i></font></a></center>
<div id="cool"><h1>Sign in</h1><br/><br/></div>
<form method="POST" enctype="multipart/form-data" action="login2.php">
<div id="log">
<br/><br/><br/><br/>
<input type="text" id="uemail" name="uemail" placeholder="Enter Email"><br/><br/><br/>

<input type="password" id="pwd" name="pwd" placeholder="Enter Password"><br/><br/>
<div id="goat"><a href="index.php"><input type="submit" action="index.php" value="Log In" onclick="return validate();" ></a></div>
<br/><br/><font style="color:#ffeb99;">If you are a new user </font><div id="late"><a href="signup.php">Sign Up</a></div>
</div>
</form>
</body>
</html>
