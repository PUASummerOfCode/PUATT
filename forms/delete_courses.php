<?php
	$id=$_POST['id'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "DELETE FROM courses WHERE id='".$id."'";
	$data=mysqli_query($conn,$query);
	echo "1";
?>