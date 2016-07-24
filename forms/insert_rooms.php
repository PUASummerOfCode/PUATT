<?php
	$id=$_POST['id'];
	$type=$_POST['type'];
	$cap=$_POST['cap'];
	$ava=$_POST['ava'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "INSERT INTO rooms (id,type,cap,ava) VALUES ('".$id."','".$type."','".$cap."','".$ava."')";
	$data=mysqli_query($conn,$query);
	echo "1";
?>