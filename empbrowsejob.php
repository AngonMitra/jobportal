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
  
   <form method="post" >
  <div class="nbar">	
	
	 
	
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
		
	
		
		   <li class="dropdown">
		   
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			 <?php
		     
			
			 echo $_SESSION["username"];
			 
	

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
	   
	   
	</div> 
	
	<br>
	<div style="border: 2px solid #DDD; width: 950px; height:1000px;padding-left:0px; float:center;margin-left:100px; margin-top:50px;">
	
	<div class="box-body table-responsive no-padding" >
	 <table id="example2" class="table table-hover" style="padding-left:100px; width:900px; margin-top:0px;">
	  <tbody>
	  
	  
<?php

include ("db_connect1.php");

  
   
   $q = "select * from jobpost where 1";
   $row = mysql_query($q);
   
   if($row)
   {
   while($r=mysql_fetch_assoc($row))
		
  {	



?>
  
	  
	  
	  
	  
	  
	 <tr>
	 <td>
	  <div style="padding-left:20px;">
	  <br>
	    <label style="font-size:20px;"><b style="font-size:20px;"><i>Company Name : </i></b><?php echo  $r['comtype']; ?></label>
		<br>
		<br>
		 <label style="font-size:20px;"><b style="font-size:20px;"><i>Job Title :  </i></b><?php echo  $r['jobtitle']; ?></label>
		 <br>
		 <br>
   <label style="font-size:20px;"><b style="font-size:20px;"><i>Educational Requirements : </i></b><?php echo  $r['edrequirement']; ?></label>
		 
		
		 <label style="float:right; padding-right:100px; font-size:20px;"><b style="font-size:20px;"><i>Experience : </i></b><?php echo  $r['experience']; ?></label>
		 
		  <br>
		 <br>
		 <label style="font-size:20px;"><b style="font-size:20px;"><i>Gender Requirements : </i></b><?php echo  $r['gen']; ?></label>
		 
		  <br>
		 <br>
		 <label style="font-size:20px;"><b style="font-size:20px;"><i>Salary Range : </i></b><?php echo  $r['salary']; ?></label>
		
  <label style="float:right; padding-right:100px; font-size:20px;"><b style="font-size:20px;"><i>Deadline : </i></b><?php echo  $r['deadline']; ?></label>
 
 

  <br>
  <br>
  </td>
 <br>
	   
	
<?php

  }
   }

?>

		
	  </div>
	  </tr>
	 </tbody>
	
	 
	  </table>
	  <br>
	  </div>
	  
	  <br>
	  <br>
	 
	 

	
	
	
	</div>
	
	
	
	
	
	</form>
  
  
</body>

</html>
  
  
 <style>



.nbar  ul{
	list-style:none;
	margin-top:70px;
	padding-left:600px;
	
	
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

.btn-register
{
	height: 35px;
	width: 100px;
	
		   color: #fff;
		   background-color: #2ecc71;
		   border: none;
		   border-radius: 4px;
		   border-bottom: 2px solid;
		   font-size:20px;
		   float:right;
	
}

 td {
    border: 2px solid green;
	
}


</style> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
