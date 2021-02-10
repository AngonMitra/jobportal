<?php

require ("db_connect.php");



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
	
	  <img src="homelogo.png"   style="float:left; margin:0px; width:250px; height:150px;"><br>
	 
     <h1><center><font  size="25px" style="float:left; padding-left:20px;color:#ff0000;"> Welcome to <b style="color:green;"><i>Career Builder</i></b> Job Site</font></center></h1> 
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
	

	
	
	
	<div style="border: 0px solid #DDD; width: 1100px; height:450px;padding-left:10px; margin-top:0px;">
	
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
		<div style="border: 2px solid #DDD; width: 685px; height:450px;padding-left:95px;float:right; margin-top:0px;">
		<br>
		<br>
		
	    <h1 style="padding-left:220px;">Uploaded Your Resume</h1>
	
	
	<br>
		
		
		
    <form action="resumeupload.php" method="post" enctype="multipart/form-data" >
                <input type="file" name="file" style="padding-left:20px;"/>
              <input type="submit" name="submit" value="upload" />
      </form>
		
	<br>	
<?php

$con=mysql_connect("localhost","root",""); 
    $db=mysql_select_db('user');

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
 {

   $username = $_SESSION['username'];
  $allowedExts = array("pdf", "doc", "docx");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
&& ($_FILES["file"]["size"] < 2000000000)
&& in_array($extension, $allowedExts))
  {
     if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
  
		
		    if (file_exists("resume/" . $_FILES["file"]["name"])) {
                                        echo $_FILES["file"]["name"] . " already exists. ";
                                    }
	 
	 else{
       	$re ="resume/" .$_FILES["file"]["name"];
		
			$resume =$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],$re);
      
	  echo "Your Resume Uploaded Successfully";
      $sql = "insert into upload_resume (resume,username) values ('$resume','$username') ";
      		$run= mysql_query($sql);
    }
 }
 }
 
 else
  {
  echo "Invalid file";
  }

 }
 
?>	
	<br>	
	<br>
	
<?php 
 $username = $_SESSION['username'];
$sql="SELECT * FROM upload_resume WHERE username='$username'";
$res=mysql_query($sql);
if($res){
while($row=mysql_fetch_array($res))
{?>
		
		
<br/>
<br/>
<table cellpadding="5" cellspacing="3" style="border:1px solid #808080;" width="500px">
<tr>
<td class="blaaa"><b>Your Resume</b></td><td class="blaaa"><a href="resume/<?php echo $row['resume']; ?>" target="_blank">View Here</a></td></tr>
		
		<?php
}
}
?>
		
		
		
		
	
		
		
		
		
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