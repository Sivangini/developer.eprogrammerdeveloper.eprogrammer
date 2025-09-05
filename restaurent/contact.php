<html>
	<head>
		<title>Contact Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
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
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<style>
		/*css for first iamge*/
			.heading{
             position:relative;
             text-align:left;
             color:#0d540f;
             font-weight:bold;
         }
		.centered{
		position:absolute;
		top:76%;
		left:50%;
		text-align:center;
		transform:translate(-50%,-50%);
		}
			/*CSS for form*/


/* Style inputs, select elements and textareas */
input[type=text],textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid gray;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  margin-left:10px;
  font-size:20px;
}

/* Style the submit button */
input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
  width:200px;
}

/* Style the container */
.container {
  border-radius: 5px;
  padding: 20px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 100%;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
   .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/*css for address,contact,email div */
.box1
{
	border:1px solid gray;
	background:white;
	box-shadow:5px 8px 8px 9px black;
	width:95%;
}
	
	</style>
	</head>
	<body>
		<!---include header--->
		<?php include'header.php' ?>
		<!---div for first row--->
		<div class="container-fluid p-0">
			<div class="row heading">
				<div class="col-sm-12">
					<img src="https://pbs.twimg.com/media/FJlWivkVIAIFa90?format=jpg&name=large" width="100%" height="300px"/>
					<div class="centered">
					<p style="color:white;font-size:29px;">𝓖𝓮𝓽 𝓘𝓷 𝓣𝓸𝓾𝓬𝓱</p>
					<p style="font-size:15px;color:white;"><a href="index.php" style="color:white;text-decoration:none;">Home </a>/ ContactUs</p>
					</div>
					</div>
				</div>
			</div>
			<!--div for form--->
					<div class="container">
  <form action="code/contactcode.php" method="post">
    <div class="row">
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="First Name" required>
      </div>
    </div>
	 <div class="row">
      <div class="col-75">
        <input type="text" id="fname" name="lname" placeholder="Last Name" required>
      </div>
    </div>
	   <div class="row">
      <div class="col-75">
        <input type="text" id="mobile" name="mobile" placeholder="Mobile No." required>
      </div>
    </div>
	 <div class="row">
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Email Id" required>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea id="subject" name="message" placeholder="Type Your Message Here..." style="height:150px" required></textarea>
      </div>
    </div><br/>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
 </div>
 <div class="container">
	 <div class="row">
		   <div class="col-sm-3 box1">
                              <center> <img src="image/phone.gif" style="height:50px;width:50px;"/><br/>
                               <h4 style="font-weight:bold;font-family:serif;">Mobile No.</h4>
                            <h6 style="margin-top:15px;">+𝟗𝟏 𝟕𝟎𝟖𝟏𝟖𝟑𝟐𝟎𝟖𝟐 <br> +𝟗𝟏 𝟗𝟏𝟒𝟎𝟒𝟎𝟕𝟐𝟖𝟒</H6>
							</center>
                          </div>
						  <div class="col-sm-1"></div>
		 <div class="col-sm-4 box1">
			 <center> <img src="image/way.gif" style="height:50px;width:50px;"/><br/><br/>
                               <h4 style="font-weight:bold;font-family:serif;">Address</h4>
                            <h6 style="margin-top:15px;">Near CRPF Camp,Sonahul Chakia ,Chandauli</H6>
							</center>
			 </div>
		 
						  <div class="col-sm-1"></div>
		 <div class="col-sm-3 box1">
			<center> <img src="image/message.gif" style="height:50px;width:50px;"/><br/><br/>
                               <h4 style="font-weight:bold;font-family:serif;">Email Id</h4>
                            <h6 style="margin-top:15px;">Tahir.siddiqui120@gmail.com</H6>
							</center>
			 </div>
		 </div>
	 </div>
	 <!---div for map--->
	 <br>
	 <div class="container-fluid p-0">
		 <div class="row">
			 <div class="col-sm-12">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.0652070255433!2d83.21039821448166!3d25.065778943171917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e41cd7420d313%3A0xe1ddc7728aec0ef7!2sUP67%20Restaurant%20and%20cafe!5e0!3m2!1sen!2sin!4v1672389469980!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				 </div>
			 </div>
		 </div>
		 <br>
		 <!--div for footer-->
		 <?php include'footer.php' ?>
	</body>
</html>