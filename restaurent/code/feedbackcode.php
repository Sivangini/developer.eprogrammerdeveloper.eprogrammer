<?php
	$a=$_POST['name'];
	$b=$_POST['review'];
	$c=date("d/m/y");
	$conn=mysqli_connect("localhost","root","","restaurant");
	$ins="insert into feedback_tbl(name,review,date) values('$a','$b','$c')";
	if(mysqli_query($conn,$ins))
	{
		echo "<script>alert('Data is saved successfully')
		window.location.href='http://localhost/restaurent/index.php';
		</script>";
	}
	
	else
	{
		echo "<script>alert('Data is not saved')</script>";
	}

?>