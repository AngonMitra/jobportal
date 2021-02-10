<?php

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db('user');

if (isset($_POST['usubmit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gen = $_POST['gen'];
	$selectskill = $_POST['selectskill'];
	$email = $_POST['email'];
	$cncode = $_POST['cncode'];
	$number = $_POST['number'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$capt = $_POST['capt'];
	$capentry = $_POST['capentry'];
	
	
	
	if ($fname=='')
	{
		echo "<script>alert ('Enter your first name')</script>";
	}
	if ($lname=='')
	{
		echo "<script>alert ('Enter your last name')</script>";
	}
	if (!isset($_POST['gen']) || $_POST['gen'] === '')
	{
		echo "<script>alert ('Select Your Gender')</script>";
	}
	if (!isset($_POST['selectskill']) || $_POST['selectskill'] === '')
	{
		echo "<script>alert ('Select Your Skill')</script>";
	}
	if ($email=='')
	{
		echo "<script>alert ('Enter your Email Address')</script>";
	}
	if (!isset($_POST['cncode']) || $_POST['cncode'] === '')
	{
		echo "<script>alert ('Select Your Country Code')</script>";
	}
	if ($number=='')
	{
		echo "<script>alert ('Enter your Mobile Number')</script>";
	}
	if ($username=='')
	{
		echo "<script>alert ('Enter your  Username')</script>";
	}
	if ($password=='')
	{
		echo "<script>alert ('Enter your Password')</script>";
	}
	
    if ($capentry!==$capt)
	{
		
		echo "<script>alert ('Captcha Do not Match')</script>";
		
	}
	
	
	else{
		
		$query ="insert into userinfo (fname,lname,gen,selectskill,email,cncode,number,username,password)
		     values ('$fname','$lname','$gen','$selectskill','$email','$cncode','$number','$username','$password')";
			 
		
			
	
	if(mysql_query($query))
	{
		echo "<script>alert ('Registration complete')</script>";
	
	}
  }
		
		
}
	

?>


<html>
      <head>
	       <title>User Registration Page</title>
		  
		   
	  </head>
	  
  <body>
	     <center>
              	<h>Register Now !</h>
         </center>
		 
      <div class="reg">
	  
           	 <form method="post" action="userreg.php"> 
			 
			      
	                 <div>				
					 <input type="text" name="fname" placeholder="Enter First Name">&nbsp;&nbsp;
					 <input type="text" name="lname" placeholder="Enter Last Name">
					
					 </div>
					 
					 <br>
					 
					 <div>
					 
					 
					<select name="gen">
					     <option  selected value>Select Your Gender</option>
						 <option value="Male">Male</option>
						 <option value="Female">Female</option>
						 <option value="Others">Others</option>
					</select>
					 </div>
					 
					 <br>
					<div>
					 					
					 <select name="selectskill">
					     <option  selected value>Select Your Skill</option>
						 <option value="1">Accounting/Finance</option>
					
						 <option value="3">Engineer/Architect</option>
						 <option value="4">IT/Telecommunication</option>
						 <option value="5">Marketing/Salse</option>
						
						 
						
						 <option value="10">Data Entry/Operator/BPO</option>
						 <option value="11">Customer Support/Call Centre</option>
					    
						
					 </select>
					 </div>
					 <br>
					  <div>					 
					  <input type="email" name="email" placeholder="Enter Email Address">					
					  </div>
					  <br>
					  <div>
					
  					 <select name="cncode">
					          <option  selected value>Select Country </option>
							   <option value="88">Bangladesh(88)</option>
							   <option value="1">Canada(1)</option>
							   <option value="86">China(86)</option>
							   <option value="33">France(33)</option>
							   <option value="39">Italy(39)</option>
							   <option value="91">India(91)</option>
							   <option value="81">Japan(81)</option>
							   <option value="92">Pakistan(92)</option>
							   <option value="1">United States(1)</option>
							   <option value="44">United Kingdom(44)</option>
					 </select>&nbsp;&nbsp;
					 
					 
					  <input type="tel" name="number" value maxlength="13" placeholder="Enter Mobile Number" id="txtMobile"
					                onkeypress="return isNumberKey(event)">
						
					  </div>
					  
				
					  
					  
					  <div>
					
					 <input type="text" name="username" maxlength="15" placeholder="Enter Your User Name">
					
					 </div>
					 
					 <br>
					 <div>
					
					 <input type="Password" name="password" maxlength="15" placeholder="Enter Your Password">
					
					 </div>
					 
					 
					 
					 
					 <div>
					 <input type="text" name="capt" id="capt" style="width:150px; background-color:#002699; color:red"; readonly>
					<input type="button" style="height:35px;width:95px"; class="btn-re"; id="refresh" value="Refresh" onclick="cap();"> 
					
					<br>
					
					<input type="text" name="capentry" id="capentry" placeholder="Enter The Captcha" >
					 
					 </div>
					 
			 <script type="text/javascript">
					 
					
						 
					 
					 
					 function cap()
					 {
						 var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
						 
						 var a = alpha[Math.floor(Math.random()*26)];
						 var b = alpha[Math.floor(Math.random()*26)];
						 var c = alpha[Math.floor(Math.random()*26)];
						 var d = alpha[Math.floor(Math.random()*26)];
						 var e = alpha[Math.floor(Math.random()*26)];
						 var f = alpha[Math.floor(Math.random()*26)];
						 
						 var captcha = a+b+c+d+e+f;
						 
						 document.getElementById("capt").value=captcha;
					 
					 }
					 
					 </script>
					 
					 
					 
					 
					 
					 <br>
					 
					 <div>
					
					 
					 <input type="submit" name="usubmit" id="usubmit" value="Create Account" class="btn-register">
					 	
					
					 	
					 </div>
					 
					 <p align="center"> Already have a account? <a href="userlogin.php">Login</a> </p>
					 
					<br>					
			  </form>
	
	     </div>					  				 
	  
   </body>
   
</html> 


<style>
body{ margin: 0 auto;
       background-image: url("reg.jpg");
	   background-repeat: no-repeat;
	   background-size: cover;
	   
}

h{
	font-size: 60px;
	color: #fff;
	margin: 0 auto;
	margin-top: 50px;
}

.reg{
	   width: 600px;
	   height: 700px;
       
	   background-color:rgba(52, 73, 94, 0.7);
	   border-radius: 5px;
	   margin: 0 auto;
	   margin-top: 30px;
	   margin-bottom: 10px;
	   padding-left: 100px
}

input[type=text]
{
	height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border: none;
	margin-top: 40px;
	margin-bottom: 0px;
	background-color: #fff;
	padding-left: 20px;
	
}

input[type=radio]
{
	margin: 30px 30px 30px;
    font-size: 50px;
	
		
}

select
{
	   height: 35px;
	   width:250px;
	   font-size: 20px;
	   padding-left: 20px;
	 border-radius: 4px;
	    border: none;
	  margin-bottom: 0px;
}

input[type=email]
{
	height: 35px;
	   width:250px;
	   font-size: 20px;
	   padding-left: 20px;
	 border-radius: 4px;
	    border: none;
		margin-bottom: 0px;
}

input[type=tel]
{
	height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border: none;
	padding-left: 20px;

}


input[type=password] 
{
	height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border: none;
	 padding-left: 20px;
}
.btn-register, .btn-re
{
	height: 45px;
	width: 250px;
	
		   color: #fff;
		   background-color: #2ecc71;
		   border: none;
		   border-radius: 4px;
		   border-bottom: 2px solid;
		   font-size:25px;
		   
	
}
p
{
         font-size: 20px;
         		 
}
	
</style>
