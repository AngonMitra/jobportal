<?php

include ("db_connect1.php");

session_start();

if (isset($_SESSION['username']));

{
	
	if(isset($_POST['usubmit']))
	
  {
	  
	  $selectskill = $_POST['selectskill'];
	  
	if (isset($_POST['selectskill']) || $_POST['selectskill'] === '1' || $_POST['selectskill'] === '2' || $_POST['selectskill'] === '3' || $_POST['selectskill'] === '4'
                                       || $_POST['selectskill'] === '5' || $_POST['selectskill'] === '10' || $_POST['selectskill'] === '11'	)
	{
		header ("location:empbrowsejob.php");
	}
		
		
  }
    
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
		     
			
			 echo $_SESSION['username'];
			 
	
     }
	
			  
			 ?> 
			 
			 <span></span></a>
		   	   
		    <ul class="d-menu">
			 <li><a href="empprofile.php" >Profile Setting</a></li>
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
  <div class="cont">
  
        <img src="emphome.png"   style="float:left; width:1100px; height:450px; margin-top:0px">

</div>  

<div style="border:2px solid #DDD; width: 1100px; height:400px;padding-left:0px;float:left; margin-top:50px;">
	   
	   <br>
	      <label style="padding-left:40px; font-size:30px; color:green;">§  BROWSE  JOBS  CATEGORY</label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► Accounting/Finance</a></label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► Customer Support/Call Centre</a></label>
		  
		 <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► Engineer/Architect</a></label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► IT/Telecommunication</a></label>
		  
		  <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► Marketing/Salse</a></label>
		  
		   <br>
		  <br>
		  <label><a href="empbrowsejob.php" style="padding-left:300px; font-size:30px;">► Data Entry/Operator/BPO</a></label>
		  
		  
	   
	   </div>
		
		
			   
		
	
		
		
	</body>
	  
	  
	  
	  
	  
	  
	  
</html>

<style>



.nbar  ul{
	list-style:none;
	margin-top:50px;
	padding-left:640px;
	
	
}

.nbar ul li{
	
	background-color: #669966;
	
	width:250px;
	height:40px;
	text-align:center;
	border:2px solid white;
	float:left;
	position:relative;
    margin:0px;
	
}
.nbar ul li a{
	
	
	color:white;
	height:30px;
	width:300px;
	font-size:20px;
	text-align:center;
	border-radius: 5px;
	
	
}
.nbar ul li:hover{
	
	background-color:rgba(52, 73, 94, 0.4);
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

.chart1{
	height:200px;
	
}

.btn-register
{
	height: 45px;
	width: 200px;
	
		   color: #fff;
		   background-color: #2ecc71;
		   border: none;
		   border-radius: 4px;
		   border-bottom: 2px solid;
		   font-size:25px;
		   
	
}





  



  
  
  
  
  
  
  
  
  
  
  
  
</style>
