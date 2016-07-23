<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php include('style.php'); ?>
</head>
<body>
	<?php include('nav_head.php'); ?>
	<div class='col-lg-12 mydiv'>
				<img class="header" src="img/timetable.png">
				<h1 class='header'><span>Welcome to PUA TimeTable Web Appilcation</span></h1>
				<h2 class="header"><span>" Enroll, Organize and collaborate "</span></h2>
	</div>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-4 col-md-4 col-sm-12 text-center firstrow'>
				<img src="img/course.png">
				<h1>Courses</h1>
				<p>Here, we can add new courses and the information about each course, aslo and edit can be done over each indivdual course</p>
				<button class="btn btn-default"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Courses</button>
			</div>
			<div class='col-lg-4 col-md-4 col-sm-12 text-center firstrow'>
				<img src="img/instructor.png">
				<h1>Instructors</h1>
				<p>Instructors section will be so each instructor can register into the system, and also linked with the courses that he will be teach in the university</p>
				<button class="btn btn-default"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp;Instructors</button>
			</div>
			<div class='col-lg-4 col-md-4 col-sm-12 text-center firstrow'>
				<img src="img/map_pin.png">
				<h1>Rooms</h1>
				<p>Rooms, will display the number of rooms, and the capacity of each room for students, also will define the type of the room wheather it's a lecture room or Lab or Tutorial place</p>
				<button class="btn btn-default"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>&nbsp;Rooms</button>
			</div>
		</div>
	</div>
	<footer class="footer">
      <div class="container">
        <p class="text-muted"><i class="fa fa-copyright fa-fw" aria-hidden="true"></i>All rights reserved</p>
      </div>
    </footer>
	<?php include('js.php');?>
</body>
</html>