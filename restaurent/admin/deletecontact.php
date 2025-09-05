<?php
$contact_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","restaurant") or die("Connection failed");
		$sql = "DELETE FROM contact_tbl WHERE id={$contact_id}";
		$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
		header("Location: http://localhost/restaurent/admin/contactdata.php");
		mysqli_close($conn);



?>