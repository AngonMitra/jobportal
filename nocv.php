<?php

session_start();
if (isset($_SESSION['username']));

{


?>




<!DOCTYPE html>
<html>


<head>

<title>Curriculum Vitae view</title>

</head>

<body>

   <div>
	
	  <img src="homelogo.png"   style="float:left; margin:0px; width:400px; height:150px;"><br>
	 
     <h1><center><font  size="25px" style="float:left; padding-left:60px;color:green;"> Welcome to Career Builder Job Site</font></center></h1> 
    </div>
<br>
  <br>
  <br>

		    
	<!-- pro -->
	<div class="nbar">	
	 <form method="post" >
	 
	 
	  
	
	<ul>
		
	
		
		   <li class="dropdown">
		   
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		   	 <?php
		     
			
			 echo $_SESSION["username"];
			 
	
     }
	
			  
			 ?>
	
 
			 
			 <span></span></a>
			 
			 <br>
		   	   
		    <ul class="d-menu">
			  <li><a href="http://localhost/my/home.php" >Logout</a></li>
		    </ul>
		
		  </li>
		  
		  <li style="width:100px;"><a href="#" >About</a></li>
		   <li style="width:100px;"><a href="#" >Contact us</a></li>
		   
		   
       </ul>
	    </form> 
	  
	  </div>
	  
	  <br>
	<br>
	<br>
	
	<div style="border: 2px solid #DDD; width: 1355px; height:450px;padding-left:10px; margin-top:0px;">
	
	
	
	
	
	   <div style="border: 2px solid #DDD; width: 355px; height:450px;padding-left:10px;float:left; margin-top:0px;">
	   
	  
	     
	  <div class="side-dropdown">
	
	 
         
		   <br> 
	  <br>
	
	  <ul>
	    <li>
	        <a href ="userhome.php" class="active">Home</a>
		</li>
			
			<br>
			<br>
			<li class="label">RESUME</li>
			
			<br>
		<li>
		   <a href="ucvview.php" class="re">View Resume</a></li><br>
		<li>
		   <a href="usercv.php" class="re">Create Resume</a></li><br>
		<li>
		   <a href="resumeupload.php" class="re">Upload Resume</a></li><br>
		 <li>
		   <a href="#" class="re">Delete Resume</a></li><br>
		   
		
		   <br>
		   <li class="label">MY ACTIVITIES</li>
		   
		   <br>
		   
		   <li>
		   <a href="#" class="re">Online Application</a></li>
		   
	   
	  </ul>
	  
	    </div>
		</div>
		
		
		<div style="border: 2px solid #DDD; width: 880px; height:450px;padding-left:95px;float:right; margin-top:0px;">
		<br>
		<br>
		<br>
		<br>
		<br>
		
	    <h1 style="padding-left:50px;">You Don't Create Any CV.At First Create CV.</h1>
	
		</div>
	
		
	</div>
	
	
</body>

</html>


<style>


.nbar   ul{
	list-style:none;
	margin-top:70px;
	padding-left:1000px;
	
	
}
.nbar ul li{
	
	background-color: #00aaff;
	
	width:150px;
	height:40px;
	text-align:center;
	border:2px solid white;
	float:left;
	position:relative;
    margin:0px;
	
}
.nbar ul li:hover{
	
	background-color:rgba(52, 73, 94, 0.4);
}

.nbar ul li a{
	
	
	color:white;
	height:30px;
	width:300px;
	font-size:20px;
	text-align:center;
	border-radius: 5px;
	
	
}

.nbar ul ul{
	
	position:absolute;
	display:none;
	padding-left:0px;
	margin-top:20px;
	

}
.nbar ul li:hover >ul{
	
	display:block;
	
	
}

.side-dropdown ul{
	
	list-style:none;
	margin-top:0px;
	padding-left:0px;
	
}
.side-dropdown ul li a.active{
	
	color:green;
	height:30px;
	width:100px;
	font-size:20px;
	margin-top:0px;
	border-radius: 5px;
}
.side-dropdown ul li.label{
	
	color:green;
	height:30px;
	width:350px;
	font-size:20px;
	
	border-radius: 5px;

}
.side-dropdown ul li a.re{
	
	color:black;
	height:30px;
	width:300px;
	font-size:20px;
	margin:25px;
	
	border-radius: 5px;
	
}
.side-dropdown ul li:hover{
	
	background-color:rgba(52, 73, 94, 0.4);
	height:35px;
}


</style>