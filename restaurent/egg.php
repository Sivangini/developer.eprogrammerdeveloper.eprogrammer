<html>
	<head>
		<title>Menu Page</title>
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
			.a
		{
		 font-size:15px;
		 color:black;
		}
			.b
		{
		 font-size:25px;
		 color:maroon;
		 text-align:center;
		}
		.image_zoom:hover img
		{
		transform:scale(1.1);
		}
		</style>
	</head>
	<body>
		<!---div for header--->
		<?php include'header.php' ?>
		<!---first row for pizza--->
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 image_zoom">
					<img  src="https://www.whiskaffair.com/wp-content/uploads/2020/04/Kerala-Style-Egg-Curry-2-2.jpg" height="250px" width="100%"/><br>
					<h4 style="text-align:center;font-family:serif;">Egg Curry</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;70</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;110</font><br/>
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://recipesofhome.com/wp-content/uploads/2020/05/egg-biryani-recipe.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Egg Biryani</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;50</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;90</font><br/>
					
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://latashaskitchen.com/wp-content/uploads/2018/06/SS_761506594_Egg-masala-500k.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Egg Matar Masala</h4>
					<hr>
				<font class="a">Half :-</font><font class="b"> &#8377;80</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;120</font><br/>
					</div>
			
				</div>
			</div>
			<!---div of footer-->
			<?php include 'footer.php'?>
	</body>
</html>