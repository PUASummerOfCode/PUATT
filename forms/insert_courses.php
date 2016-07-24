<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$des=$_POST['des'];
	$req=$_POST['req'];
	$cap=$_POST['cap'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "INSERT INTO courses (id,name,des,req,cap) VALUES ('".$id."','".$name."','".$des."','".$req."','".$cap."')";
	$data=mysqli_query($conn,$query);
	echo "1";
?>