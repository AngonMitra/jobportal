<?php

include ("db_connect1.php");

session_start();

if (isset($_SESSION['username']));

{
    
?>



<!DOCTYPE html>

<html>
      
<head>
	       
	<title>Home Page</title>
		   
</head>
	    
	<body>
	
	<div>
	
	  <img src="homelogo.png"   style="float:left; margin:0px; width:250px; height:150px;"><br>
	 
     <h1><center><font  size="25px" style="float:left; padding-left:20px;color:#ff0000;"> Welcome to <b style="color:green;"><i>Career Builder</i></b> Job Site</font></center></h1> 
    </div>
<br>
  <br>
  <br>

		    
	 
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
			  <li><a href="home.php" >Logout</a></li>
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
	<div style="border: 2px solid #DDD; width: 1100px; height:450px;padding-left:5px; margin-top:0px;">
	
	<div style="border: 2px solid #DDD; width: 350px; height:450px;padding-left:10px;float:left; margin-top:0px;">
	     
	  <div class="side-dropdown">
	
	 
         
		   <br> 
	  
	
	  <ul>
	    <li>
	        <a href ="emphome.php" class="active">Home</a>
		</li>
			
			
			
			
			<br>
		<li>
		  <a href="postjob.php" class="btn" style="width:300px;">Post Job</a></li><br>
		
		
		 <br> 
		 <li>
		   <a href="view_postedjob.php" class="btn" style="width:300px;">View Posted Jobs</a></li><br>
		   <br>
		
		 <li>
		   <a href="empapplyjob.php" class="btn" style="width:200px;">Delete Job</a></li><br>
		   
		 
		<br>
		   <br>
		   <li class="label">MY ACTIVITIES</li>
		   
		   <br>
		   
		   <li>
		   <a href="empapplyjob.php" class="btn">Apply Application</a></li>
		   
	   
	  </ul>
	  
	    </div>
		 
     </div>
	 
	   <div style="border: 2px solid #DDD; width: 700px; height:450px;padding-left:25px;float:right; margin-top:0px;">
	   
	   <br>
	      <label style="padding-left:40px; font-size:30px; color:green;">§  BROWSE  JOBS  CATEGORY</label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► Accounting/Finance</a></label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► Customer Support/Call Centre</a></label>
		  
		   <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► Engineer/Architect</a></label>
		  
		   <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► IT/Telecommunication</a></label>
		  
		   <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► Marketing/Salse</a></label>
		  
		   <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:200px; font-size:30px;">► Data Entry/Operator/BPO</a></label>
		  
		
	   
	   </div>
	  
	  
	</div>
	  	  
	  </body>
	  
</html>


<style>

.nbar   ul{
	list-style:none;
	margin-top:50px;
	padding-left:750px;
	
	
}
.nbar ul li{
	
	background-color: #669966;
	
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


a.re{
                      padding: 10px 60px;
                     font-color: #fff;
                    margin-top:5px;
					  border: none;
					  border-radius: 2px solid;
					  font-size:20px;
}
a.btn{
                      padding: 10px 80px;
                     font-color: #fff;
                    
					  border-radius:4px;
					
					  font-size:20px;
					  width:400px;
}	








</style>










