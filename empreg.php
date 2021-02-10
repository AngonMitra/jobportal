<?php

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db('emp');

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$com_name = $_POST['com_name'];
	$con_person = $_POST['con_person'];
	$person_email = $_POST['person_email'];
	$person_num = $_POST['person_num'];
	$intype = $_POST['intype'];
    $com_add = $_POST['com_add'];
    $country = $_POST['country'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$con_num = $_POST['con_num'];
	
	if ($username=='')
	{
		echo "<script>alert ('Enter your user name')</script>";
	}
	if ($pass=='')
	{
		echo "<script>alert ('Enter your password')</script>";
	}
	if (!isset($_POST['intype']) || $_POST['intype'] === '')
	{
		echo "<script>alert ('Select Your Industry Type')</script>";
	}
	
	
	else{
		$query ="insert into empinfo (username,pass,com_name,con_person,person_email,person_num,intype,com_add,country,city,area,con_num)
		     values ('$username','$pass','$com_name','$con_person','$person_email','$person_num','$intype','$com_add','$country','$city','$area','$con_num')";
	
	if(mysql_query($query))
	{
		echo "<script>alert ('Registration complete')</script>";
		
		
	}
	
    		
	}
	
}



?>








<html>
      <head>
	       <title>Employers Registration Page</title>
		   
		   
	  </head>
	  
<body>
	     <center>
              	<h>Employers Registration!</h>
         </center>
		 
		    <div class="empreg">
			
	           <form method="post" action="empreg.php"> 
			   <br>
			   <br>
			   
			   
			    <h1>Account Information</h1>
				
				
				
			      <div style="border: 1px solid #DDD; width: 600px;">
				  <center>
                   <input type="text" name="username" placeholder="Enter User Name"><br>
				<input type="Password" name="pass" maxlength="15" placeholder="Enter Your Password">
					 <center>
				 </div>
				   
				   
				   
		         <br>
				 
				 
		 
		 
		 <h2>Company Details</h2>
		
		 		 
		 <div  style="border: 1px solid #DDD; width: 600px;">
		<center>			
				 <input type="text" name="com_name" maxlength="120" placeholder="Enter Your Company Name">
				
				 <br> 
							
	      <input type="text" name="con_person" placeholder="Enter Contact Person Name">
		  
				  <br>
	     					
			<input type="email" name="person_email" placeholder="Enter Email Address">
		  
					<br>
							
		    <input type="tel" name="person_num" maxlength="11" placeholder="Enter Mobile Number">
		 
			<center>		
		
		 </div>
		
			<br>	  
				  
	
		
		<h3>Industry Type</h3>
		
	  			 
		<div  style="border: 1px solid #DDD; width: 600px;">
				 <br>  
		       <div>
					 
					 <center>
					<select name="intype" >
					     <option  selected value>Select Company Type</option>
						 
						 <option value="Advertising Agency">Advertising Agency</option>
						 <option value="Airline">Airline</option>
						 <option value="Architecture Firm">Architecture Firm</option>
						 <option value="Banks">Banks</option>
						 <option value="BPO/ Data Entry Firm">BPO/ Data Entry Firm</option>
						 <option value="Call Center">Call Center</option>
						 <option value="Computer Hardware/ Network Companies">Computer Hardware/ Network Companies</option>
						 <option value="Departmental Store">Departmental Store</option>
						 <option value="Engineering Firm">Engineering Firm</option>
						 <option value="Govt./ Semi Govt.">Govt./ Semi Govt.</option>
						 <option value="Hospital">Hospital</option>
						 <option value="IT Enable Service">IT Enable Service</option>
						 <option value="Software Company">Software Company</option>
						 <option value="University">University</option>
					</select>
					</center>
					 </div>
                       
		    	
			  
	
				   

 
  </div>
  
  
 

		
		<h4>Primary Contact Details</h4>
		
    
	
	 <div style="border: 1px solid #DDD; width: 600px;">	
       

        <center>				
		    <input type="text" name="com_add" placeholder="Enter Company Address">
	    
		</br>
		<br>
					
		  	<!--country-->
		    <select id="country" name="country" onchange="populate(this.id,'city')">
			 <option value="-1" selected>Select Country</option>
						 <option value="Australia">Australia</option>
						 <option value="Bangladesh">Bangladesh</option>
						 <option value="India">India</option>
						 <option value="United States">United States</option>
						 <option value="United Kingdom">United Kingdom</option>
			</select>
	    
       
	    </br> 
	   				<!--city-->	
		    <select id="city" name="city" onchange="populate2(this.id,'area')">
			 <option value="-1" selected>Select City</option>
						
			</select>
	    </br>
		
						<!--area-->	
		    <select id="area" name="area">
			 <option value="-1" selected>Select Area</option>
						 
			</select>
			
  <script type="text/javascript">
			 
	   function populate(s1,s2)
			 {
				 var s1 = document.getElementById(s1);
				 var s2 = document.getElementById(s2);
				 s2.innerHTML = "";
				 
				 if(s1.value == "Australia"){
					 
					 var optionArray =["select city|Select City","sydney|Sydney","melbourne|Melbourne","brisbane|Brisbane"];
				 }
				  
				 else if(s1.value == "Bangladesh"){
					 
					  var optionArray =["select city|Select City","dhaka|Dhaka","barisal|Barisal","shylet|Shylet"];
				 }
				 
				 else if(s1.value == "India"){
					 
					  var optionArray =["select city|Select City","mumbai|Mumbai","kolkata|Kolkata","new delhi|New Delhi"];
				 }
				 
				  else if(s1.value == "United States"){
					 
					  var optionArray =["select city|Select City","new york|New York","san francisco|San Francisco","washington|Washington"];
					  
				  }
				  
				   else if(s1.value == "United Kingdom"){
					 
					  var optionArray =["select city|Select City","london|London","manchester|Manchester","liverpool|Liverpool"];
					  
				   }
				 
				 for(var option in optionArray){
					 
					 var pair = optionArray[option].split("|");
					 var newOption = document.createElement("option");
					 newOption.value = pair[0];
					 newOption.innerHTML = pair[1];
					 s2.options.add(newOption);
				 }
			 }
			 
	   function populate2(s2,s3)
			 {
				 var s2 = document.getElementById(s2);
				 var s3 = document.getElementById(s3);
				 s3.innerHTML = "";
				 
				 if(s2.value == "sydney"){
					 
					  var optionArray =["select area|Select Area","sydney opera house|Sydney Opera House","alexandria|Alexandria","newtown|Newtown"];
					 
				 }
				 
				 else if(s2.value == "melbourne"){
					 
					  var optionArray =["select area|Select Area","carlton|Carlton","docklands|Docklands","kensington|Kensington"];
					  
				 }
				 
				  else if(s2.value == "brisbane"){
					 
					  var optionArray =["select area|Select Area","bardon|Bardon","herston|Herston","ascot|Ascot"];
					  
				  }
				  
				  else if(s2.value == "dhaka"){
					 
					  var optionArray =["select area|Select Area","azimpur|Azimpur","mirpur|Mirpur","rampura|Rampura","motizil|Motizil","uttora|Uttora","dhanmondi|Dhanmondi","banani|Banani","malibag|Malibag","mogbazar|Mogbazar","gulshan|Gulshan"];                     
					  
				  }
				  
				  else if(s2.value == "barisal"){
					 
					  var optionArray =["select area|Select Area","barisal sadar|Barisal Sadar","gaurnadi|Gaurnadi","bakerganj|Bakerganj"];    
					  
				  }
				  
				   else if(s2.value == "shylet"){
					 
					  var optionArray =["select area|Select Area","golapganj|Golapganj","balaganj|Balaganj","sylhet sadar|Sylhet Sadar"];
					  
				   }
				   
				   else if(s2.value == "mumbai"){
					 
					  var optionArray =["select area|Select Area","andheri|Andheri","jogeshwari|Jogeshwari","kurla|Kurla"];
					  
				   }
				   
				   else if(s2.value == "kolkata"){
					 
					  var optionArray =["select area|Select Area","behala|Behala","chandni chowk|Chandni Chowk","hatkhola|Hatkhola"];
					  
				   }
				   
				   else if(s2.value == "new delhi"){
					 
					  var optionArray =["select area|Select Area","west delhi|West Delhi","dwarka|Dwarka","narela|Narela"];
					  
				   }
				   
				   else if(s2.value == "new york"){
					 
					  var optionArray =["select area|Select Area","manhattan|Manhattan","brooklyn|Brooklyn","the bronx|The Bronx"];
				   }
				   
				   else if(s2.value == "san francisco"){
					 
					  var optionArray =["select area|Select Area","alameda|Alameda","belmont|Belmont","clayton|Clayton"];
				   }
				   
				   else if(s2.value == "washington"){
					 
					  var optionArray =["select area|Select Area","asotin|Asotin","blaine|Blaine","chelan|Chelan"];
				   }
				   
				    else if(s2.value == "london"){
					 
					  var optionArray =["select area|Select Area","acton|Acton","balham|Balham","chelsea|Chelsea"];
					}
					
					 else if(s2.value == "manchester"){
					 
					  var optionArray =["select area|Select Area","abbey hey|Abbey Hey","blackley|Blackley","crumpsall|Crumpsall"];
					 }
					 
					  else if(s2.value == "liverpool"){
					 
					  var optionArray =["select area|Select Area","aigburth|Aigburth","belle vale|Belle Vale","childwall|Childwall"];
					  }
				 
				  for(var option in optionArray){
					 
					 var pair = optionArray[option].split("|");
					 var newOption = document.createElement("option");
					 newOption.value = pair[0];
					 newOption.innerHTML = pair[1];
					 s3.options.add(newOption);
				 }
			
			 }
	</script>
	    
		</br>
							
		    <input type="tel" name="con_num" maxlength="11" placeholder="Contact Mobile Number">
	
		</div>
		
		
		<h5>Enter The Captcha</h5>
		
		<div style="border: 1px solid #DDD; width: 600px;">	
		<center>
		 <input type="text" name="capt" id="capt" style="width:250px; background-color:#002699; color:red; padding-left:80px;" readonly>
		<input type="button" style="height:35px;width:150px;" class="btn-re"; id="refresh" value="Refresh" onclick="cap();"> 
		<input type="text" name="capentry" style="padding-left:100px;" placeholder="Enter Captcha" id="capentry">
		<center>
		</div>
		
	<script type="text/javascript">
					 
			function valid()
			        {
						 
						 var string1 = document.getElementById('capt').value;
						 var string2 = document.getElementById('capentry').value;
						 
						 if (string1 == string2){
							 alert("Captcha Match");
						 }
						 
						 else{
							 alert("Captcha do not match. Enter right captcha");
						 }
						 
					 }
					 
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
<br>


        <div>
					
			<input type="submit" name="submit" value="Create Account" class="btnemp-register">
			
			<p align="center"> Already have a account? <a href="emplogin.php">Login</a> </p>
					 	
		 </div>
		 


</form>
</div>
  
				  			   	 
  </body>
  
 </html>
 

 
 <style>
 body{ margin: 0 auto;
       background-image: url(1.png);
	   background-repeat: no-repeat;
	   background-size: cover;
}

h{
	font-size: 60px;
	color: #fff;
	
	margin-top: 50px;
}
h1,h2,h3,h4,h5
{
	font-size: 20px;
	color: #44cc00;
}


.empreg{
	   width: 700px;
	   height: 1300px;
     
	   background-color:rgba(31, 31, 20, 0.5);
	   border-radius: 5px;
	   margin: 0 auto;
	   margin-top: 30px;
	   padding-left: 100px;
	   margin-bottom: 10px;
	   
}

input[type=text], input[type=password], input[type=tel], input[type=email]
{
	height: 35px;
	width: 400px;
	font-size: 20px;
	border-radius: 4px;
	border: none;
	margin-top: 10px;
	margin-bottom: 5px;
	background-color: #fff;
	padding-left: 20px;
	
	
}



select
{
	   height: 35px;
	   width: 400px;
	   font-size: 20px;
	   padding-left: 20px;
	 border-radius: 4px;
	    border: none;
	  margin-bottom: 20px;
}

.btnemp-register, .btn-re
{
	height: 45px;
	width: 300px;
	
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