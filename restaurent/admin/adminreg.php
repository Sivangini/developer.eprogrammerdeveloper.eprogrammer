<?php
	include ('db.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if(mysqli_num_rows(mysqli_query($con,"select * from admin_tbl where email='$email'"))>0){
	echo "<script>alert('Email Already Exist')</script>";
	}
	else{
	$password=password_hash($password,PASSWORD_DEFAULT);
	mysqli_query($con,"insert into admin_tbl(name,email,password) values('$name','$email','$password')");
		echo "<script>alert('Thank You Admin')
		window.location.href='http://localhost/restaurent/admin/adminlogin.php';
		</script>";
	}
	
}
?>
<html>
	<head>
	<title>Admin Registration</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<!--Font awesome css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!---Styling-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Creepster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		
		
<style>
body{
background-color:#3ea99f;
}
</style>
</head>	
<body>
	            <h1 align="center" class="mt-4">Hey Admin Register Here...</h1>
    <div class="container-fluid">
        <div class="row">

    <div class="col-sm-2 mt-5"></div>
            <div class="col-sm-4 bg-light  mt-5 shadow">
                <img src="https://avatars.mds.yandex.net/i?id=9773d3d6d29f544d791979ed633f012d-5333638-images-thumbs&n=13" style="height:100%;width:100%;" />
            </div>
            <div class="col-sm-4 bg-light  mt-5 shadow">
                <form method="post">
				   <div class="row mt-3">
                            <div class="col-sm-2">
                                <i class="bi-solid bi-envelope"></i> Name
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control admin" aria-describedby="emailHelp" name="name" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-2">
                                <i class="bi-solid bi-envelope"></i> Email
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control admin" aria-describedby="emailHelp" name="email" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-2">
                                Password
                            </div>
                            <div class="col-sm-10">
                                <input type="password" class="form-control admin" name="password" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <input type="checkbox">
                                I am not robot
                            </div>
                        </div>
						<br/><br/>
                        <div class="row m-1">

                            <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
                        
                        </div>
                </form>
				  <a href="adminlogin.php"><button class="btn btn-primary">Login</button></a>
            </div>
            <div class="col-sm-2  mt-5"></div>

        </div>
    </div>
</body>

	