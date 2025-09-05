<?php
include ('db.php');

if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	$res=mysqli_query($con,"select * from admin_tbl where email='$email'");
	
	if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$verify=password_verify($password,$row['password']);
	if($verify==1){
	$_SESSION['IS_LOGIN']=true;
		header('location:admindash.php');
	die();
	}
	else{
	echo "please enter correct password";
	}
	}
	else{
	echo "Please enter correct username";
	}
	
	}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 250px;
  height:200px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center;font-size:30px;">Admin Login Here....</h2>

<form method="post">
  <div class="imgcontainer">
    <img src="image/adminlogo1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" value="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="http://localhost/restaurent/index.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
</form>

</body>
</html>