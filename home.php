<?php


if(isset($_POST['usubmit']))
	
  {
	  
	  $selectskill = $_POST['selectskill'];
	  
	if (isset($_POST['selectskill']) || $_POST['selectskill'] === '1' || $_POST['selectskill'] === '2' || $_POST['selectskill'] === '3' || $_POST['selectskill'] === '4'
                                       || $_POST['selectskill'] === '5' || $_POST['selectskill'] === '10' || $_POST['selectskill'] === '11'	)
	{
		header ("location:nosebrowsejob.php");
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
	 <form method="post" action="home.php">
	 
	
		
	  <div style="float:left;">
	  
	  	 <select name="selectskill" style="padding: 10px 40px;border:2px solid green;    background-color:white; float:left; margin-top:0px; font-size:20px; ">
					     <option  selected value>Select Jobs Category</option>
						 <option value="1">Accounting/Finance</option>
					
						 <option value="3">Engineer/Architect</option>
						 <option value="4">IT/Telecommunication</option>
						 <option value="5">Marketing/Salse</option>
						
						 
						
						 <option value="10">Data Entry/Operator/BPO</option>
						 <option value="11">Customer Support/Call Centre</option>
					    
						
					 </select>
					 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="usubmit" id="usubmit" value="Search" class="btn-register">
		</div>		
					 
				
	
		<ul>
		
	
		
		   <li><a href="#" role="button;">Sign in or Create Account</a>
		   	   
		   
		   
		 <br>
		 
		
		 
		   <ul>
		      <li style="height:200px;">
			     <div class="chart1" style="height:100px; border:2px solid white;">
				 <br>
				   <div style="font-size:25px;">User</div><br>
				   <div>
				   <a href="userlogin.php" style="padding: 5px 10px;border-radius: 4px;background-color: #2ecc71;">Sign in</a>
				   <a href="userreg.php" style="padding: 5px 10px;border-radius: 4px;background-color: #2ecc71;">Create Account</a>
				   </div>
				   </div>
				     <div class="chart1" style="height:100px;">
				   <br>
				   
				   <div style="font-size:25px;">Employers</div><br>
				   <div>
				  <a href="emplogin.php" style="padding: 5px 10px;border-radius: 4px;background-color: #2ecc71;">Sign in</a>
				   <a href="empreg.php" role="button" style="padding: 5px 10px;border-radius: 4px;background-color: #2ecc71;">Create Account</a>
				   </div>
				</div>
		       </li>
		    </ul>
		
		  </li>
		  
		  <li style="width:100px;"><a href="#" >About</a></li>
		   <li style="width:100px;"><a href="#" >Contact us</a></li>
		   
		   
       </ul>
	   
	   </form>
	</div>

  <div class="cont">
  
        <img src="stm.jpg"   style="float:left; width:1100px; height:350px; margin-top:0px">

</div>
<br>
<br>
<br>
  
<div style="border:2px solid #DDD; width: 1100px; height:400px;padding-left:0px;float:left; margin-top:30px;">
	   
	   <br>
	      <label style="padding-left:40px; font-size:30px; color:green;">§  BROWSE  JOBS  CATEGORY</label>
		  
		  <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► Accounting/Finance</a></label>
		  
		  <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► Customer Support/Call Centre</a></label>
		  
		 <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► Engineer/Architect</a></label>
		  
		  <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► IT/Telecommunication</a></label>
		  
		  <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► Marketing/Salse</a></label>
		  
		   <br>
		  <br>
		  <label><a href="nosebrowsejob.php" style="padding-left:300px; font-size:30px;">► Data Entry/Operator/BPO</a></label>
		  
		  
	   
	   </div>
		
			   
		
	
		
		
	</body>
	  
	  
	  
	  
	  
	  
	  
</html>

<style>

body{

	
	background-size: cover;

}

.nbar  ul{
	list-style:none;
	margin-top:70px;
	padding-left:640px;
	border-radius: 5px;
	
}

.nbar ul li{
	
	background-color: #669966;
	
	width:250px;
	height:40px;
	text-align:center;
	border:2px solid white;
	float:left;
	
    margin:0px;
	
}
.nbar ul li a{
	
	
	color:white;
	height:30px;
	width:300px;
	font-size:20px;
	text-align:center;
	border-radius: 5px;
	position:relative;
	
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
	height: 50px;
	width: 200px;
	
		   color: #fff;
		   background-color: #2ecc71;
		   border: none;
		   border-radius: 4px;
		   border-bottom: 2px solid;
		   font-size:25px;
		   
	
}


  



  
  
  
  
  
  
  
  
  
  
  
  
</style>