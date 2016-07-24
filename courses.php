<html>
<head>
	<title>Courses</title>
	<?php include('style.php');
	include('js.php'); ?>
</head>
<body>
	<?php include('nav_head.php'); ?>
	<table class="table table-striped table-bordered table-hover table-condensed">
		<caption>Course</caption>
		<thead>
			<tr>
				<th>Cousre Id</th>
				<th>Cousre Name</th>
				<th>Cousre Description</th>
				<th>Cousre Requirements</th>
				<th>Cousre Capacity</th>
				<th></th>
			</tr>
		</thead>
		<?php
			$conn=mysqli_connect("localhost","root","","timeTable");
			$query = "SELECT * FROM courses";
			$data=mysqli_query($conn,$query);
			$i=+1;
			foreach ($data as $key) {
				echo "<tr>
						<td>".$key['id']."</td>
						<td>".$key['name']."</td>
						<td>".$key['des']."</td>
						<td>".$key['req']."</td>
						<td>".$key['cap']."</td>
						<td><button class='btn-danger btn-lg btn_del'>Delete</button></td>
					</tr>";
					$i++;
			}
		?>
	</table>
	<br><br>
	<table class="table table-striped table-bordered table-hover table-condensed">
		<caption>Insert Course</caption>
		<thead>
			<tr>
				<th>Cousre Id</th>
				<th>Cousre Name</th>
				<th>Cousre Description</th>
				<th>Cousre Requirements</th>
				<th>Cousre Capacity</th>
				<th></th>
			</tr>
		</thead>
		<tr>
			<td><input type="text" id="id_in"></td>
			<td><input type="text" id="name_in"></td>
			<td><input type="text" id="des_in"></td>
			<td><input type="text" id="req_in"></td>
			<td><input type="text" id="cap_in"></td>
			<td>
				<button class="btn-success btn-lg" id="btn_in">Insert</button>
			</td>
		</tr>
	</table>
	<br><br>
	<table class="table table-striped table-bordered table-hover table-condensed">
		<caption>EDIT Course</caption>
		<thead>
			<tr>
				<th>Cousre Id</th>
				<th>New Cousre Id</th>
				<th>Cousre Name</th>
				<th>Cousre Description</th>
				<th>Cousre Requirements</th>
				<th>Cousre Capacity</th>
				<th></th>
			</tr>
		</thead>
		<tr>
			<td><input type="text" id="id_edit"></td>
			<td><input type="text" id="nid_edit"></td>
			<td><input type="text" id="name_edit"></td>
			<td><input type="text" id="des_edit"></td>
			<td><input type="text" id="req_edit"></td>
			<td><input type="text" id="cap_edit"></td>
			<td>
				<button class="btn-primary btn-lg" id="btn_edit">Edit</button>
			</td>
		</tr>
	</table>
</body>
</html>