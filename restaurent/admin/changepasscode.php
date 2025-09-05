<?php
	include 'db.php';
	#$email=$_SESSION['IS_LOGIN'];
	$a=$_POST['opass'];
	$b=$_POST['npass'];
	$c=$_POST['cpass'];
	$sel="select * from admin_tbl where email='$email'";
	$p=mysqli_query($con,$sel);
	$k=mysqli_fetch_array($p,MYSQLI_BOTH);
    
	$a=password_hash($a,PASSWORD_DEFAULT);
	$b=password_hash($b,PASSWORD_DEFAULT);
	$c=password_hash($c,PASSWORD_DEFAULT);
	echo $a .'<br>';
	echo $b .'<br>';
	echo $c .'<br>';
/*	if($k['3']==$a)
	{
		if($b==$c)
		{
			$up="update admin_tbl set password='$b' where email='$email'";
			if(mysqli_query($con,$up))
			{
				header("location:adminlogin.php");
			}
			else
			{
				echo "<script>alert('password not change')</script>";
			}
		}
		else
		{
			echo "<script>alert('new and confirm pass not same')</script>";
		}
		
	}
	else
	{
	echo "<script>alert('Old password not match')</script>";
		}*/
		
?>