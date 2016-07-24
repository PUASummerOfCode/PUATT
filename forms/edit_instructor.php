<?php
	$id=$_POST['id'];
	$nid=$_POST['nid'];
	$name=$_POST['name'];
	$info=$_POST['info'];
	$courses=$_POST['courses'];
	$ava=$_POST['ava'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "UPDATE instructor SET id='".$nid."',name='".$name."',info='".$info."',courses='".$courses."',ava='".$ava."' WHERE id='".$id."'";
	$data=mysqli_query($conn,$query);
	echo "1";
?>