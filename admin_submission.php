<!DOCTYPE html>
<html>
<head>
	<title>	ADMIN's PROFILE</title>
		<!-- CDN for BootStrap  -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<<<<<<< HEAD
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
=======
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  

  	<link rel="stylesheet" type="text/css" href="styles2.css">
  	<style>
  		span : hover{
  			background-color: hotpink ;
  		}
  	</style>
</head>
<body>
		<?php 	
			if (isset($_POST['submit'])) {

				echo "User Name is :".$_POST['admin_user'];	
<<<<<<< HEAD
				echo "<br>User password is :".$_POST['admin_password'];	
=======
				echo "User password is :".$_POST['admin_password'];	
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
			}
			else{
				echo " hey Piggie, how are you ?";
			}
		 ?>
<<<<<<< HEAD
		 	<!--  this divisor will show admins profile name and picture  -->
=======

>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
		 	<div class="jumbotron w-100 rounded border border-warning p-5 m-0">
		 		<table>	
			 		<tr>	
			 			<td class="	text-align-center">
<<<<<<< HEAD
			 				<img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" width="260px" height="260px">	
=======
			 				<img src="user_avatar.png" width="360px" height="200px">	
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
			 			</td>
			 			<td>			
			 				<h1>Hello, <?= $_POST['admin_user'];?></h1>
			 			</td>
			 		</tr>
		 		</table>
		 	</div>
		 	<div class="container-fluid row justify-content-around  " >	
		 			<div>	
		 				<span  id="createAdminSnippet" onclick="createAdmin()" class="bg-warning rounded p-3 m-2 "><a class="text-dark" ><b>	CREATE ADMIN</b></a></span>
		 			</div>
		 			<div>	
<<<<<<< HEAD
		 				<span id="createAdminSnippet" onclick="createEmployee()"  class="bg-warning rounded p-3 m-2"><a class="text-dark" ><b>	CREATE EMPLOYEE</b></a></span>
		 			</div>
		 			<div>	
		 				<span id="createAdminSnippet" onclick="attenenceRecord()" class="bg-warning rounded p-3 m-2"><a class="text-dark"><b>	ATTENDENCE RECORD</b></a>	</span>
=======
		 				<span id="createAdminSnippet" onclick="createAdmin()"  class="bg-warning rounded p-3 m-2"><a class="text-dark" ><b>	CREATE EMPLOYEE</b></a></span>
		 			</div>
		 			<div>	
		 				<span id="createAdminSnippet" onclick="createAdmin()" class="bg-warning rounded p-3 m-2"><a class="text-dark"><b>	ATTENDENCE RECORD</b></a>	</span>
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
		 			</div>
		 	</div>
		 	<!-- divisor for creating admin  -->
		 	 <div id="createAdminDiv" class="jumbotron w-100 rounded border border-warning p-5 m-0 text-align-center justify-content-center" style="display: none">
		 	 		<h3 class="text-seccondary"> You can create administrator Here  </h3>
		 	 	<div class="d-flex justify-content-center text-align-center bg-warning w-25 p-5" style="opacity: 0.7">
		 	 		
<<<<<<< HEAD
		 	 		<form action="adminSubmissionPage.php" method="post">
=======
		 	 		<form action="" method="post">
>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
						<label class="text-strong">ADMINISTRATOR USER NAME : </label><br>
						<input required type="text" name="newAdminUser" id="newAdminUser"><br>
						<label>NEW PASSWORD : </label><br>
						<input required type="password" name="newAdminPassword1" id="newAdminPassword1"><br>
						<label> RE-ENTER PASSWORD : </label><br>
						<input required type="password" name="newAdminPassword2" id="newAdminPassword2"><br>	
						<span class=""><input type="submit" name="createNewAdmin" id="createNewAdmin"></span> 	 		
		 	 		</form>
		 	 	</div>
		 	 </div>
<<<<<<< HEAD
		 	 <!-- divisor for creating Employee,   in here i display a form to create employee and i store the details in the db employee table   -->
		 	 <div id="createEmployeeDiv" class="jumbotron w-100 rounded border border-warning p-5 m-0 text-align-center justify-content-center" style="display: none">
		 	 		<h3 class="text-seccondary"> You can Create Employee Here  </h3>
		 	 	<div class="d-flex justify-content-center text-align-center bg-warning col-6 w-50 p-5" style="opacity: 0.7">
		 	 		
		 	 		<form action="adminSubmissionPage.php" method="post" enctype="multipart/form-data">
		 	 			<table class="table table-striped table-hover">
		 	 					<tr>
		 	 						<td>
		 	 							<label class="text-strong">EMPLOYEE USER NAME : </label><br>
		 	 						</td>
		 	 						<td>
		 	 							<input required type="text" name="newEmployeeUser" id="newEmployeeUser"><br>
		 	 						</td>
		 	 					</tr>
		 	 					<tr>s
		 	 						<td>
		 	 							<label class="text-strong">EMPLOYEE MAIL ID : </label><br>
				
		 	 						</td>
		 	 						<td>
		 	 							<input required type="text" name="newEmployeeId" id="newEmployeeId"><br>
						
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							<label class="text-strong">EMPLOYEE DATE OF BIRTH : </label><br>
						
		 	 						</td>
		 	 						<td>
		 	 							<input required type="calender" name="newEmployeeDOB" id="newEmployeeDOB" placeholder="DD-MM-YYYY"><br>
										
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							<label class="text-strong">EMPLOYEE DESIGNATION : </label><br>
										
		 	 						</td>
		 	 						<td>
		 	 							<input required type="text" name="newEmployeeDesignation" id="newEmployeeDesignation"><br>
										
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							<label class="text-strong">EMPLOYEE IMAGE: </label><br>
										
		 	 						</td>
		 	 						<td>
		 	 							<input required type="file" name="newEmployeeImage" id="newEmployeeImage" class="form-control"><br>
										
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							<label>NEW PASSWORD : </label><br>
										
		 	 						</td>
		 	 						<td>
		 	 							<input required type="password" name="newEmployeePassword1" id="newEmployeePassword1"><br>
										
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							<label> RE-ENTER PASSWORD : </label><br>
										
		 	 						</td>
		 	 						<td>
		 	 							<input required type="password" name="newEmployeePassword2" id="newEmployeePassword2"><br>	
						
		 	 						</td>
		 	 					</tr>
		 	 					<tr>
		 	 						<td>
		 	 							
		 	 						</td>
		 	 						<td>
		 	 							<span class=""><input type="submit" name="createNewEmployee" id="createNewEmployee"></span> 	 
		 	 						</td>
		 	 						</td>
		 	 					</tr>
		 	 			</table>
		 	 		</form>
		 	 	</div>
		 	 </div>
 			<!-- Attendence record for employees , I am going to have a search box so that i can serch for the employee record from the database  -->
 			<div id="attendenceRecordDiv" class="jumbotron w-100 rounded border border-warning p-5 m-0 text-align-center justify-content-center" style="display: none">
		 	 		<h3 class="text-seccondary"> Search Employee Record Here  </h3>
		 	 	<div class="d-flex justify-content-center text-align-center bg-warning w-25 p-5" style="opacity: 0.7">
		 	 		
		 	 		<form action="adminSubmissionPage.php" method="post">
						<div class="row d-flex justify-content-center">
						<span class="fa fa-search text-bottom bg-white"><input required type="text" name="searchEmployeeByName" id="searchEmployeeByName" placeholder="search.."></span><br>
							</div>	
						<input type="submit" name="searchEmployee">
		 	 		</form>
		 	 	</div>
		 	 </div>
=======
		 	 <!-- divisor for creating Employee  -->
		 	 <div>
		 	 	
		 	 </div>
 			

>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0


		 	<!-- all Scripts  -->  

		 	<script type="text/javascript">
		 		//script for creating admin 
<<<<<<< HEAD
		 		 
=======

>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0
		 		function createAdmin() {

		 			var flag = document.getElementById('createAdminDiv');
		 			flag.style.disply='none';
		 			if(flag.style.display==='none'){
		 				flag.style.display='block';
		 			}else{
		 				flag.style.display='none';
		 			}
		 		}
<<<<<<< HEAD
		 		function createEmployee() {

		 			var flag = document.getElementById('createEmployeeDiv');
		 			flag.style.disply='none';
		 			if(flag.style.display==='none'){
		 				flag.style.display='block';
		 			}else{
		 				flag.style.display='none';
		 			}
		 		}
		 		function attenenceRecord() {

		 			var flag = document.getElementById('attendenceRecordDiv');
		 			flag.style.disply='none';
		 			if(flag.style.display==='none'){
		 				flag.style.display='block';
		 			}else{
		 				flag.style.display='none';
		 			}
		 		}
=======

>>>>>>> 3bcd881f7ba7176c56abb44aa746339241e1bbc0

		 	</script>
		
</body>
</html>