<?php


session_start();


$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('user') or die (mysql_error());

if(isset($_POST['submit']))
    {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		
		if ($username=='')
	   {
		echo "<script>alert ('Enter your user name')</script>";
	    }
		
		if ($password=='')
	   {
		echo "<script>alert ('Enter your Password')</script>";
	    }
		
		else{
			
			$query = "SELECT 'id' FROM userinfo WHERE username= '$username' AND password= '$password'";
			$row = mysql_query($query);
			
		 if(mysql_num_rows($row)>0)
		 {
			
		 $_SESSION['username']= $username;
		 
		 header("Location:userhome.php");
		 }
		 
		 else{
			  echo "<script>alert ('Incorrect Username or Password')</script>";
		 }
		}
		
		 
    }
	
	
		
	
	
   
  




?>



<html>
      <head>
	       <title>Login Page</title>
		   
	  </head>
	  
	  <body>
	  <br>
	  <br>
	  <br>
	  <center>
	      <h>User Login Here!</h>
	  </center>
	        <div class="cont">
			
			  
				<form  action="" method="post">
				
				    <div>
					 <input type="text" name="username" placeholder="Enter Username">
					 </div>
					<div>
					 <input type="Password" name="password" placeholder="Enter Password">
					 </div>
					 <br>
					 <div>
					 <input type="submit" name="submit" value="Login" class="btn-login">
					<br>
					 <a href="#"><p>Forget password?</p></a>
					 </div>
					 <br>
					 <div class="create-account">
					 <h1>Don't have a account?</h1>
					 <a href="userreg.php" class="btn">Create Account</a>
				
					 </div>
				</form>
			</div>
						
	  </body>

</html>

<style>
body{ margin: 0 auto;
       background-image: url("login.jpg");
	   background-repeat: no-repeat;
	   background-size: cover;
}
h{
	font-size: 60px;
	color: #fff;
}

.cont{
	   width: 600px;
	   height: 550px;
	   text-align: center;
	   background-color: rgba(52, 73, 94, 0.7);
	   border-radius: 5px;
	   margin: 0 auto;
	   margin-top: 50px;
}


input[type="text"],input[type="password"]
{
	height: 45px;
	width: 300px;
	font-size: 20px;
	border-radius: 4px;
	border: none;
	margin-top: 70px;
	margin-bottom: 10px;
	background-color: #fff;
	padding-left: 30px;
}
.btn-login{
	       padding: 10px 30px;
		   color: #fff;
		   background-color: #2ecc71;
		   border: none;
		   border-radius: 4px;
		   border-bottom: 2px solid;
		   font-size:25px;
		   
}
a{
	color: #fff;
}

.create-account{
	             font-size: 15px;
				 text-align: center:
				 color: #fff;
}
h1{
	font-size:25px;
	color: #2ecc71;
}
a.btn{
                      padding: 10px 60px;
                      color: #fff;
                     background-color: #00ccff;	
					  border: none;
					  border-bottom: 2px solid;
					  font-size:20px;
}	
</style>
				 
	






