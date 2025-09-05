<html>
	<head>
		<style>
			/*css for scroll to top*/
			#myBtn {
			display: none; /* Hidden by default */
			position: fixed; /* Fixed/sticky position */
			bottom: 30px; /* Place the button at the bottom of the page */
			right: 40px; /* Place the button 30px from the right */
			z-index: 99; /* Make sure it does not overlap */
			border: none; /* Remove borders */
			outline: none; /* Remove outline */
			background-color: green; /* Set a background color */
			color: white; /* Text color */
			cursor: pointer; /* Add a mouse pointer on hover */
			padding: 15px; /* Some padding */
			border-radius: 50%; /* Rounded corners */
			font-size: 18px; /* Increase font size */
			
			
			}
			
			#myBtn:hover {
			background-color: gray; /* Add a dark-grey background on hover */
			}
			
			/*css for navbar*/
			
					ul ul{
    display:none;
}
ul li{
    list-style:none;
}
ul li:hover>ul{
    display:block;
    color:white;
}
		</style>
	</head>
	<body>
		<!---Code for scroll to top--->
		
		<div onclick="topFunction()" id="myBtn" title="Go to top">
			<!---<i class="fa-solid fa-arrow-up-long"></i>--->
			<img src="image/up.png" height="30px" width="30px"/>
		</div>
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-sm-3">
					<image src="image/logo3.png" height="85px" width="200px"/>
				</div>
				<DIV CLASS="col-sm-2"></div>
				<DIV CLASS="col-sm-4" style="color:green;font-size:20px;margin-top:10px;"><i class="fa fa-phone-square" aria-hidden="true"></i>+𝟗𝟏 𝟕𝟎𝟖𝟏𝟖𝟑𝟐𝟎𝟖𝟐<br/>
				<i class="fa fa-phone-square" aria-hidden="true"></i>+𝟗𝟏 𝟗𝟏𝟒𝟎𝟒𝟎𝟕𝟐𝟖𝟒</div>
				<div class="col-sm-1"></div>
				<DIV CLASS="col-sm-2" style="margin-top:10px;">
<a href="feedback.php"><div class="btn btn-success">TAP FOR FEEDBACK</div></a>				
				</div>
			</div>
		</div>
		<div class="container-fluid p-0 sticky-top">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-success">
						<a class="navbar-brand" style="text-decoration:underline;color:white;">
							ᏬᎮ 67
						</a> &ensp;&ensp;&ensp;
					
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">𝙃𝙊𝙈𝙀&emsp;</a>
								</li>
								
								<li class="nav-item  active">
									<a class="nav-link" href="about.php">𝘼𝘽𝙊𝙐𝙏  ᏬᎮ 67&emsp;</a>
								</li>
								<li class="nav-item  active">
									<a class="nav-link" href="contact.php">𝘾𝙊𝙉𝙏𝘼𝘾𝙏 𝙐𝙎&emsp;</a>
								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										𝙈𝙀𝙉𝙐
									</a>
									<ul class="dropdown-menu">
										
										<li><a class="dropdown-item" href="tea.php">Baverages</a></li>
										
										<li class="nav-item dropdown active"><a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Food</a>
											<ul class="dropdown-menu right">
												
												<li><a class="dropdown-item" href="chicken.php">Chicken</a></li>
												<li><a class="dropdown-item" href="dal.php">Dal & Roti</a></li>
												<li><a class="dropdown-item" href="egg.php">Egg</a></li>
												<li><a class="dropdown-item" href="paneer.php">Paneer</a></li>	
												<li><a class="dropdown-item" href="rice.php">Rice</a></li>
											</ul>
										</li>
										<li class="nav-item dropdown active"><a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Junk Food</a>
											<ul class="dropdown-menu right">
												<li><a class="dropdown-item" href="burger.php">Burger</a></li>
												<li><a class="dropdown-item" href="noodle.php">Noodles</a></li>
												<li><a class="dropdown-item" href="patties.php">Patties</a></li>
												<li><a class="dropdown-item" href="pizza.php">Pizza</a></li>
												<li><a class="dropdown-item" href="roll.php">Roll</a></li>
												<li><a class="dropdown-item" href="sandwich.php">Sandwich</a></li>
											</ul>
										</li>
										
										
										
										
									</ul>
								</li>
							</ul>
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Search Page" aria-label="Search">
								<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search </button>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<script>
			// Get the button:
			let mybutton = document.getElementById("myBtn");
			
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};
			
			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					mybutton.style.display = "block";
					} else {
					mybutton.style.display = "none";
				}
			}
			
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0; // For Safari
				document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
			}
			
		</script>
	</body>
</html>