<?php

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db('user');





isset($_POST['usubmit'])
{
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$edlevel = $_POST['edlevel'];
	$result = $_POST['result'];
	$department = $_POST['department'];
	$pyear = $_POST['pyear'];
	$inname = $_POST['inname'];
	$grade = $_POST['grade'];
	$career = $_POST['career'];
	$caricular = $_POST['caricular'];
	$selectskill = $_POST['selectskill'];
	$salary = $_POST['salary'];
	$skilldes = $_POST['skilldes'];
	$fathername = $_POST['fathername'];
	$birthdate = $_POST['birthdate'];
	$gen = $_POST['gen'];
	$marital = $_POST['marital'];
	$nationality = $_POST['nationality'];
	$religion = $_POST['religion'];
	$paddress = $_POST['paddress'];
	$location = $_POST['location'];
	
	
	$target = "images/".basename($_FILES['image']['name']);
	$image =$_FILES['image']['name'];
	
	
	if ($fname=='')
	{
		echo "<script>alert ('Enter your first name')</script>";
	}
	if ($lname=='')
	{
		echo "<script>alert ('Enter your last name')</script>";
	}
	
	if ($email=='')
	{
		echo "<script>alert ('Enter your Email')</script>";
	}
	if ($number=='')
	{
		echo "<script>alert ('Enter your Number')</script>";
	}
	if ($address=='')
	{
		echo "<script>alert ('Enter your Address')</script>";
	}

	if (!isset($_POST['edlevel']) || $_POST['edlevel'] === '')
	{
		echo "<script>alert ('Select Your Education level')</script>";
	}
	if (!isset($_POST['result']) || $_POST['result'] === '')
	{
		echo "<script>alert ('Select Your Result')</script>";
	}
	if ($department=='')
	{
		echo "<script>alert ('Enter your Department Name')</script>";
	}
	if ($pyear=='')
	{
		echo "<script>alert ('Enter your Passing Year')</script>";
	}
	if ($inname=='')
	{
		echo "<script>alert ('Enter your Institute Name')</script>";
	}
	if ($grade=='')
	{
		echo "<script>alert ('Enter your Grade')</script>";
	}
	
	if ($career=='')
	{
		echo "<script>alert ('Enter your Career Objective')</script>";
	}
	if ($caricular=='')
	{
		echo "<script>alert ('Enter your Caricular Activities')</script>";
	}
	if (!isset($_POST['selectskill']) || $_POST['selectskill'] === '')
	{
		echo "<script>alert ('Select Your Skill')</script>";
	}
	if (!isset($_POST['salary']) || $_POST['salary'] === '')
	{
		echo "<script>alert ('Select Your Accepting Salary')</script>";
	}
	if ($skilldes=='')
	{
		echo "<script>alert ('Enter your Skill Description')</script>";
	}
	if ($fathername=='')
	{
		echo "<script>alert ('Enter your Father Name')</script>";
	}
	if ($birthdate=='')
	{
		echo "<script>alert ('Enter your Date of Birth')</script>";
	}
	if (!isset($_POST['gen']) || $_POST['gen'] === '')
	{
		echo "<script>alert ('Select Your Gender')</script>";
	}
	if (!isset($_POST['marital']) || $_POST['marital'] === '')
	{
		echo "<script>alert ('Select Your Marital Status')</script>";
	}
	if ($nationality=='')
	{
		echo "<script>alert ('Enter your Nationality')</script>";
	}
	
	if (!isset($_POST['religion']) || $_POST['religion'] === '')
	{
		echo "<script>alert ('Select Your Religion')</script>";
	}
	if ($paddress=='')
	{
		echo "<script>alert ('Enter your Parmanent Address')</script>";
	}
	if ($location=='')
	{
		echo "<script>alert ('Enter your Current Location')</script>";
	}
	if ($image=='')
	{
		echo "<script>alert ('Enter your first name')</script>";
	}
	
	isset($_POST['upload']){
		
		$target = "images/".basename($_FILES['image']['name']);
	    $image =$_FILES['image']['name'];
	

		
		$query ="insert into usercv (fname,lname,email,number,address,edlevel,result,department,pyear,inname,grade,career,caricular,selectskill,salary,skilldes,fathername,birthdate,gen,marital,nationality,religion,paddress,location,img)                                        
	              values ('$fname','$lname','$email','$number','$address','$edlevel','$result','$department','$pyear','$inname','$grade','$career','$caricular','$selectskill','$salary','$skilldes','$fathername','$birthdate','$gen','$marital','$nationality','$religion','$paddress','$location','$image')";           
	
	  $run= mysql_query($query);
	 if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		 
		 $query ="update  usercv set img=['$image'] where $_SESSION['username']=['$fname'] "
				 
		?>
        <script type="text/javascript">
	parent.document.getElementById("messege").innerHTML="";
	parent.document.getElementById("image").value="";
	window.parent.updatepicture("<?php echo 'images/'.$image;?>");
	</script>
			
				 
	<?php
	 }
   else{
		 // upload failed
		 ?>
		 
		 <script type="text/javascript">
	   parent.document.getElementById("messege").innerHTML="";
		</script>
		
		<?php
	 }
	 
	}
	
	
	
	
	}
	

include ("db_connect.php");

session_start();
if (isset($_SESSION['username']));

{


    
?>


<!DOCTYPE html>
<html>


<head>

<title>Curriculum Vitae</title>

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
	    
	  
	  </div>
	  
	  <br>
	<br>
	<br>
	
     	<div style="border: 0px solid #DDD; width: 1355px; height:450px;padding-left:10px; margin-top:0px;">
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
		   <a href="#" class="re">Edit Resume</a></li><br>
		<li>
		   <a href="#" class="re">Upload Resume</a></li><br>
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
		
		
		<div style="border: 2px solid #DDD; width: 880px; height:2180px;padding-left:95px;float:right; margin-top:0px;">
		<br>
		
		
		  <center>
		       <label style="padding-left:0px; font-size:50px; color:green;">ยง Create Resume</label>
		  </center>
		  
		  <br>
		  <br>
		  
		 <div style="border: 1px solid #DDD; width: 880px; height:570px;padding-left:95px;float:right; margin-top:0px;">
		 
		 <br>
		 
			<p id="messege">Upload Formal Picture</p>
			
			
		
			
			
			
			
			
			 <img   style="max-height:120px; max-width:120px; min-height:120px; min-width:120px;"id="image"/>
			 
			<iframe name="iframe" style=" display:none;"></iframe>
		   
			
			<form method="post" action="usercv.php" enctype="multipart/form-data" target="iframe">
			<br>
			<input type="file" id="file" name="image"/>
			<input type="submit" id="submit" name="upload"   value="Upload Image"/>
		</form>
		
	
		


            
		
					 
		
		
			<form method="post" action="usercv.php">
			
			
		 
		   	 <input type="text" name="fname" placeholder="Enter First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;&nbsp;&nbsp;&nbsp;
			 <input type="text" name="lname" placeholder="Enter Last Name"><br>
		

      			
	      <input type="email" name="email" placeholder="Enter Email Address"><br>
     		  <input type="tel" name="number" value maxlength="13" placeholder="Enter Mobile Number">	<br>		  
				  
		 
		  <input type="text" name="address" placeholder="Enter Your Address">
		  <br>
		  
		  </div>
		  
		  <div style="border: 1px solid #DDD; width: 965px; height:300px;padding-left:10px;float:right; margin-top:20px;">
		    
			<br>
			 <label style="padding-left:0px; font-size:30px; color:;">ยง Academic Summary :</label>
			
			<br>
			<br>
			<br>
			 <select name="edlevel">
					          <option  selected value> Your Education Level </option>
							   <option value="Secondary">Secondary</option>
							   <option value="Higher Secondary">Higher Secondary</option>
							   <option value="Diploma">Diploma</option>
							   <option value="Bachelor/Honors">Bachelor/Honors</option>
							   <option value="Masters">Masters</option>
							   
							 
			</select>
				<select name="result">
					          <option  selected value>Select Your Result </option>
							   <option value="First Division/Class">First Division/Class</option>
							   <option value="Second Division/Class">Second Division/Class</option>
							   <option value="Third Division/Class">Third Division/Class</option>
							   <option value="Grade">Grade</option>
							   <option value="Appeared">Appeared</option>
							   <option value="Enrolled">Enrolled</option>
							   <option value="Running">Running</option>
							   
							 
				</select>
			
				<br>
				<div style="padding-left: 80px;">
				<input style="padding-left:20px;" type="text" name="department" placeholder=" Department Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="padding-left:20px;" type="text" name="pyear" placeholder=" Passing Year"><br>
				
				<input style="padding-left:20px;" type="text" name="inname" placeholder="Institute Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
				
				<input style="padding-left:20px;" type="text" name="grade" placeholder="Grade"><br>
				</div>	
				
				
                 <div style="border: 1px solid #DDD; width: 965px; height:400px;padding-left:10px;float:right; margin-top:10px;">
		    
			<br>
			 <label style="padding-left:0px; font-size:30px; color:;">ยง Career Objective :</label>
			 <br>
			 <br>
			   
			   <div name="career" style="padding-left:80px;">
			   <textarea name="career" style="height:100px; width:630px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>
			  <br>
			  
			   <label style="padding-left:0px; font-size:30px; color:;">ยง Extra Caricular Activities :</label>
			   <br>
			   <br>
			    <div name="caricular" style="padding-left:80px;">
			   <textarea name="caricular" style="height:100px; width:630px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>
			 
			 </div>
			 
			 <div style="border: 1px solid #DDD; width: 965px; height:300px;padding-left:10px;float:right; margin-top:0px;">
			 <br>
			 <label style="padding-left:0px; font-size:30px; color:;">ยง Specialization :</label>
			 <br>
			 <br>
			  
			  <select name="selectskill">
					     <option  selected value>Select Your Skill</option>
						 <option value="Accounting/Finance">Accounting/Finance</option>
						 <option value="Education/Traning">Education/Traning</option>
						 <option value="Engineer/Architect">Engineer/Architect</option>
						 <option value="IT/Telecommunication">IT/Telecommunication</option>
						 <option value="Marketing/Salse">Marketing/Salse</option>
						 <option value="Media/Advertisement/Event Mgt.">Media/Advertisement/Event Mgt.</option>
						 <option value="Medical/Pharma">Medical/Pharma</option>
						 <option value="NGO/Development">NGO/Development</option>
						 <option value="Secretary/Receptionist">Secretary/Receptionist</option>
						 <option value="Data Entry/Operator/BPO">Data Entry/Operator/BPO</option>
						 <option value="Customer Support/Call Centre">Customer Support/Call Centre</option>
					     <option value="Design/Creative">Design/Creative</option>
						 <option value="Law/Legal">Law/Legal</option>
					 </select>
					 
			<select name="salary">
					     <option  selected value>Accepting Salary</option>
						 <option value="5000-10000">5000-10000</option>
						 <option value="10000-15000">10000-15000</option>
						 <option value="15000-20000">15000-20000</option>
						 <option value="20000-25000">20000-25000</option>
						 <option value="25000-30000">25000-30000</option>
						 
					</select>
					 
					 
					 <br>
					  <br>
			 <label style="padding-left:0px; font-size:30px; color:;">ยง Description :</label>
			 <br>
			 <br>
			
				
             <div name="skilldes" style="padding-left:80px;">
			   <textarea name="skilldes" style="height:100px; width:630px; padding-left:0px; font-size:20px;">
			   
			   </textarea>
			   
			  </div>				
			 
			 </div>
			 
	<div style="border: 1px solid #DDD; width: 965px; height:470px;padding-left:10px;float:right; margin-top:0px;">
			 <br>
			 <label style="padding-left:0px; font-size:30px; color:;">ยง Personal Details :</label>
			 <br>
			 <br>
			 <div style="padding-left: 80px;">
			 <input style="padding-left:20px;" type="text" name="fathername" placeholder="Enter your Father Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="padding-left:20px;" type="text" name="birthdate" placeholder="Date of Birth">
			 </div>
			 <br>
			 <br>
			 	<select name="gen">
					     <option  selected value>Select Your Gender</option>
						 <option value="Male">Male</option>
						 <option value="Female">Female</option>
						 <option value="Others">Others</option>
					</select>
					
					<select name="marital">
					     <option  selected value>Select Marital Status</option>
						 <option value="Married">Married</option>
						 <option value="Unmarried">Unmarried</option>
						
					</select>
					<br>
					
					 <div style="padding-left: 80px;">
				<input style="padding-left:20px;" type="text" name="nationality" placeholder="Nationality">
				
				
				 <select name="religion">
					     <option  selected value>Select Your Religion</option>
						 <option value="Muslim">Muslim</option>
						 <option value="Hindu">Hindu</option>
						 <option value="Others">Others</option>
					</select>
                 </div>
               
          <div style="padding-left: 80px;">
			<input style="padding-left:20px;" type="text" name="paddress" placeholder="Parmanent Address">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input style="padding-left:20px;" type="text" name="location" placeholder="Current Location">			
         </div>
		 <br>
		 <br>
		 
		 <center>
		 <input type="submit" name="usubmit" id="usubmit" value="Submit" class="btn-register">
           </center>    				 
					 
			
		  </div>
		  
		  
     </div>
	 
	
	 
	 </div>
	 </div>

</form> 
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


input[type=text] 
{
	height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border-radius:4px solid red;
	margin-top: 40px;
	margin-bottom: 0px;
	background-color: #fff;
	padding-left: 20px;
	
}

input[type=email]
{
height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border-radius:4px solid red;
	margin-top: 40px;
	margin-bottom: 0px;
	background-color: #fff;
	padding-left: 20px;
	
		
}

input[type=tel]
{
	
height: 35px;
	width: 250px;
	font-size: 20px;
	border-radius: 4px;
	border-radius:4px solid red;
	margin-top: 40px;
	margin-bottom: 0px;
	background-color: #fff;
	padding-left: 20px;
	

}

select
{
	   height: 35px;
	   width:250px;
	   font-size: 20px;
	   padding-left: 15px;
	 border-radius: 4px;
	   border-radius:4px solid red;
	 margin-top: 0px;
	 margin-left:80px;
	  background-color: #fff;
	  border-radius: 4px;
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
