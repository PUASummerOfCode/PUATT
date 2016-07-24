<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$info=$_POST['info'];
	$courses=$_POST['courses'];
	$ava=$_POST['ava'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "INSERT INTO instructor (id,name,info,courses,ava) VALUES ('".$id."','".$name."','".$info."','".$courses."','".$ava."')";
	$data=mysqli_query($conn,$query);
	echo "1";
?>