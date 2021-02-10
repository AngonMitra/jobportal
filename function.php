<?php


require ("db_connect.php");

function getUsersData($username)

{
    $array = array();
 
 
   $q = mysql_query("SELECT * FROM usercv WHERE username='$username'");
 

if(mysql_num_rows($q)>0)
{

while($r=mysql_fetch_assoc($q))
		
  {	    $array['id'] = $r['id'];
		$array['fname'] = $r['fname'];
		$array['email'] = $r['email'];
		$array['number'] = $r['number'];
		$array['address'] = $r['address'];
		$array['edlevel'] = $r['edlevel'];
		$array['result'] = $r['result'];
		$array['department'] = $r['department'];
		$array['pyear'] = $r['pyear'];
		$array['inname'] = $r['inname'];
		$array['grade'] = $r['grade'];
		$array['career'] = $r['career'];
		$array['caricular'] = $r['caricular'];
		$array['selectskill'] = $r['selectskill'];
		$array['salary'] = $r['salary'];
		$array['skilldes'] = $r['skilldes'];
		$array['fathername'] = $r['fathername'];
		$array['birthdate'] = $r['birthdate'];
		$array['gen'] = $r['gen'];
		$array['marital'] = $r['marital'];
		$array['nationality'] = $r['nationality'];
		$array['religion'] = $r['religion'];
		$array['paddress'] = $r['paddress'];
		$array['location'] = $r['location'];
		
	
		
	}
return $array; 
	

}	
else{
      header("Location:nocv.php");


}	

 
	






}



















?>