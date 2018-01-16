<?php

	$un=$_POST["username"];
	$pswd=$_POST["password"];
	
	$dbc=mysqli_connect('localhost','root','','languagecornertable');
	
	$query="select login_user_name and password from user where login_user_name='$un' and password='$pswd'";
	
	$result=mysqli_query($dbc,$query) or die("Error querying database");
	
	$count=mysqli_num_rows($result);
	
	if($count!="")
	{
		$query="select first_name,c,cpp,python,java from user where login_user_name='$un' and password='$pswd'";
		$result=mysqli_query($dbc,$query) or die("Error querying databasein if block");
		$row=mysqli_fetch_assoc($result);
		
		echo "1"." ".$row["first_name"]." ".(string)$row["c"]." ".(string)$row["cpp"]." ".(string)$row["python"]." ".(string)$row["java"];
	}
	else
	{
		echo "0";
	}	
	mysqli_free_result($result);
	mysqli_close($dbc);
?>