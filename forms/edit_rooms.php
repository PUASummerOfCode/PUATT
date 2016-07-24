<?php
	$id=$_POST['id'];
	$nid=$_POST['nid'];
	$type=$_POST['type'];
	$cap=$_POST['cap'];
	$ava=$_POST['ava'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "UPDATE rooms SET id='".$nid."',type='".$type."',cap='".$cap."',ava='".$ava."' WHERE id='".$id."'";
	$data=mysqli_query($conn,$query);
	echo "1";
?>