<?php
	$id=$_POST['id'];
	$nid=$_POST['nid'];
	$name=$_POST['name'];
	$des=$_POST['des'];
	$req=$_POST['req'];
	$cap=$_POST['cap'];
	$conn=mysqli_connect("localhost","root","","timeTable");
	$query = "UPDATE courses SET id='".$nid."',name='".$name."',des='".$des."',req='".$req."',cap='".$cap."' WHERE id='".$id."'";
	$data=mysqli_query($conn,$query);
	echo "1";
?>