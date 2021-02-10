<?php

include ("db_connect.php");

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
	<div style="border: 2px solid #DDD; width: 1100px; height:450px;padding-left:5px; margin-top:0px;">
	
	<div style="border: 2px solid #DDD; width: 300px; height:450px;padding-left:10px;float:left; margin-top:0px;">
	     
	  <div class="side-dropdown">
	
	 
         
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
		 <br>
		   
		
		   <br>
		   <li class="label">MY ACTIVITIES</li>
		   
		   <br>
		   
		   <li>
		   <a href="userjobapply.php" class="re">Online Application</a></li>
		   
	   
	  </ul>
	  
	    </div>
		
		</div>
		
		<label style="padding-left:220px; font-size:50px; color:green;"> Your Applied Job</label>
		<br>
		<br>
		<br>
		<br>
		<div class="box-body table-responsive no-padding" >
                  <table id="example2" class="table table-hover" style="padding-left:20px; width:750px;">
                    <thead>
                      <th style="font-size:30px;" >Job Title</th>
                      <th style="padding-left:50px; font-size:30px;">Company Name</th>
					  <th style="font-size:30px;" >Deadline</th>
                    </thead>
					<br>
                    <tbody>
<?php

include ("db_connect.php");

   $uname = $_SESSION['username'];
   
   $q = "select * from applyjob where uname='$uname'";
   $row = mysql_query($q);
   
   if($row)
   {
   while($r=mysql_fetch_assoc($row))
		
  {	



?>

     <tr>
	
	   <td style="font-size:20px; padding-left:20px;"><?php echo  $r['jobtitle']; ?></td>
	   <td style="font-size:20px;padding-left:80px;"><?php echo  $r['comtype']; ?></td>
	    <td style="font-size:20px;padding-left:40px;"><?php echo  $r['deadline']; ?></td>
		</tr>
	<?php
  }
  
   }
   
   ?>

	</tbody>
	</table>
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
 th, td {
    border: 1px solid green;
}


</style>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		