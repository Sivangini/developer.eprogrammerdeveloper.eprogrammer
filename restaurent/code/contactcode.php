<?php
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['mobile'];
	$d=$_POST['email'];
	$e=$_POST['message'];
	$f=date("d/m/y");
	$conn=mysqli_connect("localhost","root","","restaurant");
	$ins="insert into contact_tbl(fname,lname,mobile,email,message,date) values('$a','$b','$c','$d','$e','$f')";
	if(mysqli_query($conn,$ins))
	{
		echo "<script>alert('Data is saved successfully')
		window.location.href='http://localhost/restaurent/contact.php';
		</script>";
	}
	
	else
	{
		echo "<script>alert('Data is not saved')</script>";
	}

?>