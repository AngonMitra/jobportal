<?php

include ("db_connect1.php");

session_start();

if (isset($_SESSION['username']));

{
	
	$uname = $_SESSION['username'];


if (isset($_POST['jobsubmit']))
{
	
	$jobtype = $_POST['jobtype'];
	$intype = $_POST['intype'];
	$jobtitle = $_POST['jobtitle'];
	$vacancies = $_POST['vacancies'];
	$jobnature = $_POST['jobnature'];
	$jobdeg = $_POST['jobdeg'];
	$comtype = $_POST['comtype'];
	$jobdescription = $_POST['jobdescription'];
	$edrequirement = $_POST['edrequirement'];
	$experience = $_POST['experience'];
	$jobrequirement = $_POST['jobrequirement'];
	$salary = $_POST['salary'];
	$joblocation = $_POST['joblocation'];
	$gen = $_POST['gen'];
	$age = $_POST['age'];
	$deadline = $_POST['deadline'];
	
	if ($jobtype=='')
	{
		echo "<script>alert ('Select Job Category')</script>";
	}
	if ($intype=='')
	{
		echo "<script>alert ('Select Your Company Type')</script>";
	}
	if ($jobtitle=='')
	{
		echo "<script>alert ('Enter your Job Title')</script>";
	}
	if ($vacancies=='')
	{
		echo "<script>alert ('Enter Number of vacancies')</script>";
	}
	if ($jobnature=='')
	{
		echo "<script>alert ('Select Your Job Nature')</script>";
	}
	if ($jobdeg=='')
	{
		echo "<script>alert ('Enter your Job Designation')</script>";
	}
	if ($comtype=='')
	{
		echo "<script>alert ('Select Your Company Type')</script>";
	}
	if ($jobdescription=='')
	{
		echo "<script>alert ('Enter your Job Description')</script>";
	}
	if ($edrequirement=='')
	{
		echo "<script>alert ('Enter your Educational Requirements')</script>";
	}
	if ($experience=='')
	{
		echo "<script>alert ('Enter your Experience Requirements')</script>";
	}
	if ($jobrequirement=='')
	{
		echo "<script>alert ('Enter your Job Requirements')</script>";
	}
	if ($salary=='')
	{
		echo "<script>alert ('Enter Salary')</script>";
	}
	if ($joblocation=='')
	{
		echo "<script>alert ('Enter your Job location')</script>";
	}
	if ($gen=='')
	{
		echo "<script>alert ('Select Gender')</script>";
	}
	if ($age=='')
	{
		echo "<script>alert ('Select Age Requirements')</script>";
	}
	if ($deadline=='')
	{
		echo "<script>alert ('Enter your Application Deadline')</script>";
	}
	
	else{
		
		$query ="insert into jobpost (jobtype,intype,jobtitle,vacancies,jobnature,jobdeg,comtype,jobdescription,edrequirement,experience,jobrequirement,salary,joblocation,gen,age,deadline,uname)
		          
				  values ('$jobtype','$intype','$jobtitle','$vacancies','$jobnature','$jobdeg','$comtype','$jobdescription','$edrequirement','$experience','$jobrequirement','$salary','$joblocation','$gen','$age','$deadline','$uname')";
	
  if(mysql_query($query))
	{
		echo "<script>alert ('Your Job is Posted Successfully')</script>";
	
	}	
	}	
}
    
?>


<!DOCTYPE html>
<html>


<head>

 <script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


<title>Curriculum Vitae view</title>

</head>

<body>

  <div>
	
	  <img src="homelogo.png"   style="float:left; margin:0px; width:250px; height:150px;"><br>
	 
     <h1><center><font  size="25px" style="float:left; padding-left:20px;color:#ff0000;"> Welcome to <b style="color:green;"><i>Career Builder</i></b> Job Site</font></center></h1> 
    </div>
<br>
  <br>
  <br>

		    
	<!-- pro -->
	<form method="post" action="postjob.php">
	<div class="nbar">	
	 
	 
	 
	  
	
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
	  
	  
	  </div>
	  
	 
	  
	  <br>
	<br>
	<br>
	
	
	<div style="border: 2px solid #DDD; width: 350px; height:400px;padding-left:10px;float:left; margin-top:0px;">
	     
	  <div class="side-dropdown">
	
	 
         
		   <br> 
	  
	
	  <ul>
	    <li>
	        <a href ="emphome.php" class="active">Home</a>
		</li>
			
			
			
			
			<br>
		<li>
		  <a href="postjob.php" class="btn" style="width:200px;">Post Job</a></li><br>
		
		
		 <br> 
		 <li>
		   <a href="view_postedjob.php" class="btn" style="width:200px;">View Posted Jobs</a></li><br>
		   <br>
		
		 <li>
		   <a href="deletejob.php" class="btn" style="width:200px;">Delete Job</a></li><br>
		   
		 
		<br>
		   <br>
		   <li class="label">MY ACTIVITIES</li>
		   
		   <br>
		   
		   <li>
		   <a href="empapplyjob.php" class="btn">Apply Application</a></li>
		   
	   
	  </ul>
	  
	    </div>
		
		
		
		</div>
		
		<div style="border: 2px solid #DDD; width: 750px; height:2020px;padding-left:0px;float:left; margin-top:0px;">
		
		  	<br>
		
		
		  <center>
		       <label style="padding-left:0px; font-size:50px; color:green;">§ Post Your Job</label>
		  </center>
		
		<br>
		  <br>
		  
		 <div style="border: 1px solid #DDD; width: 750px; height:340px;padding-left:0px;float:left; margin-top:0px;">
		 
		
		 <br>
		 <br>
		  <select name="jobtype">
					     <option  selected value>Select Job Category</option>
						 <option value="1">Accounting/Finance</option>
					
						 <option value="3">Engineer/Architect</option>
						 <option value="4">IT/Telecommunication</option>
						 <option value="5">Marketing/Salse</option>
						
						 
						
						 <option value="10">Data Entry/Operator/BPO</option>
						 <option value="11">Customer Support/Call Centre</option>
					    
						
		  </select>
		  
		  <select name="intype" >
					     <option  selected value>Select Company Type</option>
						 
						 <option value="Advertising Agency">Advertising Agency</option>
						 <option value="Airline">Airline</option>
						 <option value="Architecture Firm">Architecture Firm</option>
						 <option value="Banks">Banks</option>
						 <option value="BPO/ Data Entry Firm">BPO/ Data Entry Firm</option>
						 <option value="Call Center">Call Center</option>
						 
						 <option value="Departmental Store">Departmental Store</option>
						 <option value="Engineering Firm">Engineering Firm</option>
						 <option value="Govt./ Semi Govt.">Govt./ Semi Govt.</option>
						 <option value="Hospital">Hospital</option>
						 <option value="IT Enable Service">IT Enable Service</option>
						 <option value="Software Company">Software Company</option>
						 <option value="University">University</option>
		  </select>
					
		<br>
		
		<input style="padding-left:20px;" type="text" name="jobtitle" placeholder="Enter Your Job Title">			
					 
		<input style="padding-left:20px;" type="tel" name="vacancies" placeholder="Enter No. of Vacancies">	
		
		<br>
		
		<select name="jobnature">
					     <option  selected value>Select Job Nature</option>
						 <option value="Parttime">Parttime</option>
						 <option value="Full Time">Full Time</option>
						  <option value="Parttime & Fulltime">Parttime & Fulltime</option>
						
					</select>
		
		<input style="padding-left:20px;" type="text" name="jobdeg" placeholder="Job Designation">

         <br>
		 
		 <input style="padding-left:20px;" type="text" name="comtype" placeholder="Company Name">

		
		</div>
		
		 <div style="border: 1px solid #DDD; width: 750px; height:580px;padding-left:0px;float:left; margin-top:0px;">
		
		 <br>
		  <label style="padding-left:0px; font-size:30px; color:;">§ Job Description / Responsibility :</label>
		 <br>
		   <div  style="padding-left:100px;">
		   <br>
			   <textarea name="jobdescription"   style="height:100px; width:530px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>

         <br>
		  <label style="padding-left:0px; font-size:30px; color:;">§ Educational Requirements:</label>
		 <br>
		   <div name="edrequirement" style="padding-left:100px;">
		   <br>
			   <textarea name="edrequirement"   style="height:100px; width:530px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>			  
		 
		 </div>
		 
		  <div style="border: 1px solid #DDD; width: 750px; height:580px;padding-left:0px;float:left; margin-top:0px;">
		
		 <br>
		  <label style="padding-left:0px; font-size:30px; color:;">§ Experience Requirements :</label>
		 <br>
		   <div name="experience" style="padding-left:100px;">
		   <br>
			   <textarea name="experience"   style="height:100px; width:530px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>

         <br>
		  <label style="padding-left:0px; font-size:30px; color:;">§ Job Requirements:</label>
		 <br>
		   <div name="jobrequirement" style="padding-left:100px;">
		   <br>
			   <textarea name="jobrequirement"  style="height:100px; width:530px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>			  
		 
		 </div>
		 
	<div style="border: 1px solid #DDD; width: 750px; height:380px;padding-left:0px;float:left; margin-top:0px;">
	
	<input style="padding-left:20px;" type="tel" name="salary" placeholder="Salary Range">	
	
	<input style="padding-left:20px;" type="text" name="joblocation" placeholder="Job Location">
	
	<br>

	
	
	<select name="gen">
					     <option  selected value>Select  Gender</option>
						 <option value="Male">Male</option>
						 <option value="Female">Female</option>
						  <option value="Male & Female">Male & Female</option>
						
					</select>
					
					
	<input style="padding-left:20px;" type="text" name="age" placeholder="Age Requirements">
	
	<br>
	<br>
	<div style="padding-left:120px;">
	<label style="font-size:25px; ">Application Deadline:</label>
	
	
	<input style="padding-left:20px;" type="date" name="deadline" placeholder="Application Deadline">
	</div>
	<br>
	<br>
	 <center>
		 <input type="submit" name="jobsubmit" id="jobsubmit" value="Post Job" class="btn-register">
           </center> 
	
	
	
	</div>
		
		  
   
	 </div>
	  </form>
	  
	  
 
	  
	 
	  
	  
	</body>
	
</html>
	  
	
<style>



.nbar  ul{
	list-style:none;
	margin-top:50px;
	padding-left:650px;
	
	
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
a.btn{
               padding: 10px 80px;
              font-color: #fff;
                    
		 border-radius:4px;
					
		 font-size:20px;
		width:400px;
}
select
{
	   height: 40px;
	   width:300px;
	   font-size: 20px;
	   padding-left: 15px;
	 border-radius: 4px;
	   border-radius:4px solid red;
	 margin-top: 0px;
	 margin-left:40px;
	  background-color: #fff;
	  border-radius: 4px;
}	
input[type=text],input[type=tel],input[type=date]  
{
	height: 35px;
	width: 275px;
	font-size: 20px;
	border-radius: 4px;
	border-radius:4px solid red;
	margin-top: 40px;
	margin-bottom: 0px;
	background-color: #fff;
	padding-left: 20px;
	margin-left:40px;
	
}
.btn-register
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











</style>	
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  