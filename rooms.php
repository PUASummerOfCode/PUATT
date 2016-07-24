<html>
<head>
	<title>Courses</title>
	<?php include('style.php');
	include('js.php'); ?>
</head>
<body>
	<div class="container">
		<?php include('nav_head.php'); ?>
		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#courses">Courses</a></li>
		    <li><a data-toggle="tab" href="#insert">Insert Courses</a></li>
		    <li><a data-toggle="tab" href="#edit">Edit Courses</a></li>
		</ul>
		<div class="tab-content">
			<div id="courses" class="tab-pane fade in active">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>Rooms</caption>
					<thead>
						<tr>
							<th>Room Id</th>
							<th>Room type</th>
							<th>Room capacity</th>
							<th>Room availability</th>
							<th></th>
						</tr>
					</thead>
					<?php
						$conn=mysqli_connect("localhost","root","","timeTable");
						$query = "SELECT * FROM rooms";
						$data=mysqli_query($conn,$query);
						foreach ($data as $key) {
							echo "<tr>
									<td>".$key['id']."</td>
									<td>".$key['type']."</td>
									<td>".$key['cap']."</td>
									<td>".$key['ava']."</td>
									<td><button class='btn-danger btn-lg btn_del_rooms'>Delete</button></td>
								</tr>";
						}
					?>
				</table>
			</div>
			<br><br>
			<div id="insert" class="tab-pane fade">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>Insert Room</caption>
					<thead>
						<tr>
							<th>Room Id</th>
							<th>Room type</th>
							<th>Room capacity</th>
							<th>Room availability</th>
							<th></th>
						</tr>
					</thead>
					<tr>
						<td><input type="text" id="id_in"></td>
						<td><input type="text" id="type_in"></td>
						<td><input type="text" id="cap_in"></td>
						<td><input type="text" id="ava_in"></td>
						<td>
							<button class="btn-success btn-lg" id="btn_in_rooms">Insert</button>
						</td>
					</tr>
				</table>
			</div>
			<br><br>
			<div id="edit" class="tab-pane fade">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>EDIT Course</caption>
					<thead>
						<tr>
							<th>Room Id</th>
							<th>New Room Id</th>
							<th>Room type</th>
							<th>Room capacity</th>
							<th>Room availability</th>
							<th></th>
						</tr>
					</thead>
					<tr>
						<td><input type="text" id="id_edit"></td>
						<td><input type="text" id="nid_edit"></td>
						<td><input type="text" id="type_edit"></td>
						<td><input type="text" id="cap_edit"></td>
						<td><input type="text" id="ava_edit"></td>
						<td>
							<button class="btn-primary btn-lg" id="btn_edit_rooms">Edit</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>