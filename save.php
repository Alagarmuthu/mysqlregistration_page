<?php
  

  if (isset($_POST['submit']))
	{

	$Regno=$_POST['regno'];
	$Name=$_POST['name'];
	$Gender=$_POST['gen'];
	$City=$_POST['city'];
	$Email=$_POST['email'];
	$Phno=$_POST['phno'];
	$Addr=$_POST['addr'];
     
      $con=mysqli_connect("localhost","root","","regprj");
     
	$query="insert into sample values('$Regno','$Name','$Gender','$City','$Email','$Phno','$Addr')";
	
	
		
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"added success";
	}
	else 
	{
		echo "not added";
	}
	
}

?>