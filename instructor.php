<html>
<head>
	<title>instructors</title>
	<?php include('style.php');
	include('js.php'); ?>
</head>
<body>
	<div class="container">
		<?php include('nav_head.php'); ?>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#courses">instructors</a></li>
				<li><a data-toggle="tab" href="#insert">Insert instructor</a></li>
				<li><a data-toggle="tab" href="#edit">Edit instructor</a></li>
			</ul>
		<div class="tab-content">
			<div id="courses" class="tab-pane fade in active">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>instructors</caption>
					<thead>
						<tr>
							<th>instructor Id</th>
							<th>instructor Name</th>
							<th>instructor info</th>
							<th>instructor courses</th>
							<th>instructor availability</th>
							<th></th>
						</tr>
					</thead>
					<?php
						$conn=mysqli_connect("localhost","root","","timeTable");
						$query = "SELECT * FROM instructor";
						$data=mysqli_query($conn,$query);
						foreach ($data as $key) {
							echo "<tr>
									<td>".$key['id']."</td>
									<td>".$key['name']."</td>
									<td>".$key['info']."</td>
									<td>".$key['courses']."</td>
									<td>".$key['ava']."</td>
									<td><button class='btn-danger btn-lg btn_del_instructor'>Delete</button></td>
								</tr>";
						}
					?>
				</table>
			</div>
			<br><br>
			<div id="insert" class="tab-pane fade">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>Insert instructor</caption>
					<thead>
						<tr>
							<th>instructor Id</th>
							<th>instructor Name</th>
							<th>instructor info</th>
							<th>instructor courses</th>
							<th>instructor availability</th>
							<th></th>
						</tr>
					</thead>
					<tr>
						<td><input type="text" id="id_in"></td>
						<td><input type="text" id="name_in"></td>
						<td><input type="text" id="info_in"></td>
						<td><input type="text" id="courses_in"></td>
						<td><input type="text" id="ava_in"></td>
						<td>
							<button class="btn-success btn-lg" id="btn_in_instructor">Insert</button>
						</td>
					</tr>
				</table>
			</div>
			<br><br>
			<div id="edit" class="tab-pane fade">
				<table class="table table-striped table-bordered table-hover table-condensed">
					<caption>EDIT instructor</caption>
					<thead>
						<tr>
							<th>instructor Id</th>
							<th>instructor New Id</th>
							<th>instructor Name</th>
							<th>instructor info</th>
							<th>instructor courses</th>
							<th>instructor availability</th>
							<th></th>
						</tr>
					</thead>
					<tr>
						<td><input type="text" id="id_edit"></td>
						<td><input type="text" id="nid_edit"></td>
						<td><input type="text" id="name_edit"></td>
						<td><input type="text" id="info_edit"></td>
						<td><input type="text" id="courses_edit"></td>
						<td><input type="text" id="ava_edit"></td>
						<td>
							<button class="btn-primary btn-lg" id="btn_edit_instructor">Edit</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>