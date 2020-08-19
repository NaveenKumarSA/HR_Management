<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- CDN for BootStrap  -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  

  	<!-- relative style sheet  -->
		<link rel="stylesheet" type="text/css" href="styles.css">
	<script	 defer src="validation.js" ></script>
</head>
<body>
	<!-- <nav class=" navbar sidebar-extend-left text-white bg-dark ">
		<ul class="sidebar list-unstyled text-white">
			<li class="sidebar-list-item text-white border-white rounded ">
			<a href=" "><strong><span> HRM</span> </strong></a>	
			</li>
			<li class="sidebar-list-item text-white border-white rounded">
			<a href=" "><strong><span> Dashboard</span> </strong></a>	
			</li>
			<li class="sidebar-list-item text-white border-white rounded">
			<a href=" "><strong><span> About</span> </strong></a>	
			</li>
		</ul>
	</nav> -->
	<div class=" jumbotron border border-warning text-center	justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80'); background-size: cover;">
		<div><h1></h1><br>	
			<h1 class='text-white'><strong>HR MANAGEMENT</strong></h1><br>	
			<h1></h1><br>	
		</div>
	</div>
	<!-- side bar begins  -->
	<div class=" d-flex align-item-stretch py-2 ml-0 container-sm bg-warning-0.5 bg-light continer-fluid mh-100 mw-100 align-item-center justify-content-conter rounded-lg" style="background-image: url(	'https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80'); background-repeat: 	no-repeat;	background-repeat: 	background-size:cover; ">
		<div class="p-0 ml-0.1 bg-warning rounded border border-danger">
			<nav class="sidebar sidebar-expand-sm bg-warning fixed-left ">
		 	 <ul class="sidebar-sidebar	sidebar-list-tabs list-unstyled nav-items p-2 m-1">
		    <li class="sidebar-item ">
		      <a class="sidebar-brand nav-link text-secondary" href="index.php"><strong>Home</strong></a>
		    </li>
		    <li class="sidebar-item sidebar-list">
		      <a class="nav-link text-secondary" href="#"><strong>Dashboard 	</strong></a>
		    </li>
		    <li class="sidebar-item ">
		      <a class="nav-link text-secondary  " href="#"><strong>Courses 	</strong></a>
		    </li>
		    <li class="sidebar-item ">
		      <a class="nav-link text-secondary  " href="#"><strong>Departments 	</strong></a>
		    </li>
		    <li class="sidebar-item  ">
		      <a class=" nav-link text-secondary " href="#"> <strong>Sign In</strong></a>
		    </li>
		    <li class="sidebar-item  ">
		      <a class="nav-link text-secondary" href="#"><strong>	Register</strong></a>
		    </li>
		  	</ul>
			</nav>
		</div>
		<!-- Admin Login  -->	
		<div class="container w-25 rounded border border-warning p-5 m-5">
			<div class="text-align-center justify-content-center  "> <h1 class="text-white">ADMIN</h1></div>
			<form action="admin_submission.php" method="post">
					<label class=" text-white">
						User Name :
					</label><br>	
					<input required type="text" id="admin_user" name="admin_user"><br>
					<label class=" text-white">
						Password :
					</label><br>	
					<input required  type="password" id="admin_password" name=" admin_password"><br>	
					<button class=" rounded border-white bg-warning p-2 m-4 text-white  rounded text-align-center justify-content-center" type="submit " id="submit" name="submit">LOGIN</button>
					<div id="error"></div>
			</form>
		</div>
		<!-- Admin Login  -->	
		<div class="container w-25 rounded border border-warning p-5 m-5">
			<div class="text-align-center justify-content-center "> <h1 class="text-white">EMPLOYEE</h1></div>

			<form action="employee_submission.php" method="post">
					<label class="	text-white">
						User Name :
					</label><br>	
					<input required type="text" name="employee_user"><br>
					<label class="	text-white">
						Password :
					</label><br>	
					<input required type="password" name=" employee_password"><br>	
					<button class=" rounded border-white bg-warning p-2 m-4 text-white  rounded text-align-center justify-content-center" type="	submit ">LOGIN</button>
			</form>
	</div>
</div>
	<br>		
<!-- <div class="continer-fluid mh-100 mw-100 align-item-center justify-content-conter rounded-lg" style="background-image: url(	'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80'); background-repeat: 	no-repeat;	background-repeat: 	background-size:cover; "	> <h1>	you </h1><h1>are	</h1><h1>	handsome !</h1>	</div> -->


<<<<<<< HEAD
	<?php  ?>


=======
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0

</body>
</html>