<?php
$feedback_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","restaurant") or die("Connection failed");
		$sql = "DELETE FROM feedback_tbl WHERE id={$feedback_id}";
		$result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
		header("Location: http://localhost/restaurent/admin/feedbackdata.php");
		mysqli_close($conn);
?>