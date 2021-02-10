<?php

session_start();
require ("function.php");



if (isset($_SESSION['username']));

{
	
	
	$usersData = getUsersData($_SESSION['username']);
    


?>


<!DOCTYPE html>
<html>


<head>

<title>Curriculum Vitae view</title>

</head>

<body>

   <div>
	
	  <img src="homelogo.png"   style="float:left; margin:0px; width:300px; height:150px;"><br>
	 
     <h1><center><font  size="25px" style="float:left; padding-left:20px;color:#ff0000;"> Welcome to <b style="color:green;"><i>Career Builder</i></b> Job Site</font></center></h1> 
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
		     
			
			 echo $_SESSION['username'];
			 
	

	
	  
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
	
	<div style="border: 0px solid #DDD; width: 1355px; height:450px;padding-left:10px; margin-top:0px;">
	   <div style="border: 2px solid #DDD; width: 300px; height:450px;padding-left:10px;float:left; margin-top:0px;">
	     
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
	
		   
		
		   <br>
		   <li class="label">MY ACTIVITIES</li>
		   
		   <br>
		   
		   <li>
		   <a href="userjobapply.php" class="re">Online Application</a></li>
		   
	   
	  </ul>
	  
	    </div>
		</div>
		
		<div style="border: 2px solid #DDD; width: 750px; height:1500px;padding-left:30px;float:left; margin-top:0px;">
		
		
		<br>
		

		 
		<label style="padding-left:250px; font-size:50px; color:green;"> Your Resume</label>
		 
	
	<div style="border: 4px solid #DDD; width: 700px; height:1350px;padding-left:0px;float:left; margin-top:0px;">
     <br>
	 
	 <?php

$con=mysql_connect("localhost","root",""); 
    $db=mysql_select_db('user');
 
    
     
    if(isset($_POST['upload'])){
		
		 $username = $_SESSION['username'];
		$target_dir = "images/";
		    if (!file_exists($target_dir)) {
                                        mkdir($target_dir);
                                    }
	 
	 $target_file = $target_dir.basename($_FILES["file"]["name"]);
	 
	
		$image =$_FILES["file"]["name"];
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
		
				
			 $sql = "insert into image (img,username) values('$image','$username')";
			$run= mysql_query($sql);
           
				 
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

	

?>

 <script type="text/javascript">
	  
	  function updatepicture(pic){
		  
		  document.getElementById("image").setAttribute("src",pic);
	  }
	  
		</script>
	 
	  <?php 
	  require ("db_connect.php");
	   $username =  $_SESSION['username'];
                                               $userProfileImage = '';
                                        $sql = mysql_query("SELECT * FROM image WHERE username ='$username' ");
										
                                        if($sql) {
											
									while($row=mysql_fetch_array($sql))
										
{?>
                                 
		<img src="images/<?php echo $row['img']; ?>"  alt="User Image"  style="max-height:120px; max-width:120px; min-height:120px; min-width:120px; float:right; padding-right:15px;"id="image">
		<?php
										}
										}						
	?>
		 <iframe name="iframe" style=" display:none;"></iframe>
		   
			
			 
		
		 

 <label style="padding-left:130px; font-size:35px;"><span>Curriculum Vitae of  &nbsp;<?php echo  $usersData['fname']; ?></span></label>
		<br>
         	
<label style="padding-left:200px; font-size:20px;"> <span>Mobile No:  <?php echo  $usersData['number']; ?></span></label><br>
<label style="padding-left:180px; font-size:20px;"> <span>Email:  <?php echo  $usersData['email']; ?></span></label>
     <br>
<br>
<br>	 

     <div style="border: 2px solid #DDD; width: 700px; height:0px;padding-left:0px; margin-top:0px;">		

     </div>	
	 
	  <label style="padding-left:0px; font-size:25px; color:;"> Career Objective :</label>
	  <br>
	  <br>
	 <div style="height:100px; width:800px; padding-left:20px;font-size:20px;">
	  
	  <?php echo  $usersData['career']; ?>
			   
		</div>	 
			   
			   <div style="border: 1px solid #DDD; width: 700px; height:0px;padding-left:0px; margin-top:0px;">		

     </div>	
			  
			  
			   
	 <label style="padding-left:0px; font-size:25px; color:;"> Accademic Details :</label>
	 
	 
      <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Education Lavel: <label name="edlevel" style="padding-left:20px;"><?php echo  $usersData['edlevel']; ?></label></label>
	  
	  <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Institute: <label name="inname" style="padding-left:85px;"><?php echo  $usersData['inname']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Department: <label name="department"style="padding-left:55px;"><?php echo  $usersData['department']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Passing Year: <label name="pyear"style="padding-left:45px;"><?php echo  $usersData['pyear']; ?></label></label>
	  
	    <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Result: <label name="result"style="padding-left:95px;"><?php echo  $usersData['result']; ?></label></label>
	     <br>
		 <div style="border: 1px solid #DDD; width: 700px; height:0px;padding-left:0px; margin-top:10px;">		

     </div>	
	 
	   <label style="padding-left:0px; font-size:25px;">Specialization:</label>
	   
	     <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Skill: <label name="selectskill"style="padding-left:115px;"><?php echo  $usersData['selectskill']; ?></label></label>
	  
	    <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Acceptint Salary: <label name="salary"style="padding-left:15px;"><?php echo  $usersData['salary']; ?></label></label><br>
	  <br>
	  
	   <label style="padding-left:0px; font-size:25px;">Description: </label>
	   
	   <br>
	   <div style="height:100px; width:800px; padding-left:20px;font-size:20px;">
	  
<?php echo  $usersData['skilldes']; ?>
			   
		</div>	 
			   
			  <br>
	   <label style="padding-left:0px; font-size:25px;">Extra Carricular Activities: </label>
	   <br>
	      <div style="height:100px; width:700px; padding-left:20px;font-size:20px;">
	  
<?php echo  $usersData['caricular']; ?>
			   
		</div>	 
			   
	<div style="border: 1px solid #DDD; width: 700px; height:0px;padding-left:0px; margin-top:0px;">		

     </div>	
	 
	  <label style="padding-left:0px; font-size:25px;">Personal Details: </label>
	
	  <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Name: <label name="fname"style="padding-left:70px;"><?php echo  $usersData['fname']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Father Name: <label name="fathername"style="padding-left:10px;"><?php echo  $usersData['fathername']; ?></label></label>
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Date of Birth: <label name="birthdate"style="padding-left:10px;"><?php echo  $usersData['birthdate']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Rerigion: <label name="religion"style="padding-left:45px;"><?php echo  $usersData['religion']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Gender: <label name="gen"style="padding-left:50px;"><?php echo  $usersData['gen']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Nationality: <label name="nationality"style="padding-left:15px;"><?php echo  $usersData['nationality']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Parmanent Address: <label name="paddress"style="padding-left:15px;"><?php echo  $usersData['paddress']; ?></label></label>
	  
	    <br>
	  <br>
	  <label style="padding-left:0px; font-size:20px;">Marital Status: <label name="marital"style="padding-left:15px;"><?php echo  $usersData['marital']; ?></label></label>
	   <br>
	  <br>
<label style="padding-left:0px; font-size:20px;">Current Location: <label name="location"style="padding-left:15px;"><?php echo  $usersData['location'];} ?></label></label>
		  
</div>
		
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


</style>
		
		
		
		
		
		
		
		
		