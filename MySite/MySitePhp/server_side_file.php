<?php
			
				
	$fn=$_POST["firstname"];
	$ln=$_POST["lastname"];
	$mbn=$_POST["mobile_no"];	
	$eml=$_POST["email"];
	$crs_c=$_POST["c"];
	$crs_cpp=$_POST["cpp"];
	$crs_python=$_POST["python"];
	$crs_java=$_POST["java"];
	$un=$_POST['username'];				
	$pswd=$_POST['password'];
	
	$dbc=mysqli_connect('localhost','root','','languagecornertable') or die('Error connecting to mysql server');
				
	$query="INSERT INTO user(first_name,last_name,mobile_no,email,c,cpp,python,java,login_user_name,password) VALUES('$fn','$ln','$mbn','$eml','$crs_c','$crs_cpp','$crs_python','$crs_java','$un','$pswd')";
				
	$result=mysqli_query($dbc,$query) or die ('Error querying database.');							
				
	mysqli_close($dbc);
				
	echo "Hello ".$fn." ".$ln." ! your registration done successfully !!";
				
			
?>
									
		