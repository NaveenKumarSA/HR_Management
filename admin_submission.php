<!DOCTYPE html>
<html>
<head>
	<title>	ADMIN's PROFILE</title>
		<!-- CDN for BootStrap  -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  

  	<link rel="stylesheet" type="text/css" href="styles2.css">
  	<style>
  		span : hover{
  			background-color: white ;
  		}
  	</style>
</head>
<body>
		<?php 
// pulling data from the hrms db and checking weather the admin is loging in and employee is logging in 
//session_start();
	$host = 'localhost:3306';
		$user = 'root';
		$pass = '';
		$db = 'hrms';
		//Executing the connection with the db 
		$conn = mysqli_connect($host, $user, $pass, $db);
		$adminEmployee = $_POST['admin_user'];
		$row='';
		$table_row='';
		$adminName ='';
		
		$sql = "SELECT sl_no, employee_name, employee_mail_id, employee_dob, employee_designation, employee_user_access, employee_img, employee_password  FROM employees_profiles WHERE employee_mail_id = '$adminEmployee' ";
			$table_row = mysqli_query($conn,$sql);
			$row = $table_row->fetch_assoc();
			if($row['employee_user_access'] ==='Admin' && $_POST['admin_password']===$row['employee_password']){
						/*echo "<span class='bg-success p-2 ml-5 text-white'> correct credentials </span>";*/
						$adminName = $row['employee_name'];
			}else{
				header('location: error.php');	
				
			}
			

		mysqli_close($conn);
 ?>

		 	<!--  this divisor will show admins profile name and picture  -->



		 	<div class="jumbotron w-100 rounded border border-warning p-5 m-0">
		 		<table style="border-spacing: 5rem">	
			 		<tr>	
			 			<td class="	text-align-center">

			 				<img src="<?= "employeeImages/".$row['employee_img']?>" width="360px" height="360px" style="border-radius: 50%">	

			 			</td>
			 			<td>			
			 				<h1>Hello, <?= $adminName;?></h1>
			 			</td>
			 		</tr>
		 		</table>
		 	</div>
		 	<div class="container-fluid row justify-content-around  " >	
		 			<div>	
		 				<span  id="createAdminSnippet" onclick="createAdmin()" class="bg-warning rounded p-3 m-2 "><a class="text-dark" ><b>	CREATE ADMIN</b></a></span>
		 			</div>
		 			<div>	


		 				<span id="createAdminSnippet" onclick="createEmployee()"  class="bg-warning rounded p-3 m-2"><a class="text-dark" ><b>	CREATE EMPLOYEE</b></a></span>
		 			</div>
		 			<div>	
		 				<span id="createAdminSnippet" onclick="attenenceRecord()" class="bg-warning rounded p-3 m-2"><a class="text-dark"><b>	ATTENDENCE RECORD</b></a>	</span>
		 				
		 			</div>
		 			
		 	</div>
		 	<!-- divisor for creating admin  -->
		 	 <div id="createAdminDiv" class="jumbotron w-100 rounded border border-warning p-5 m-0 text-align-center justify-content-center" style="display: none">
		 	 		<h3 class="text-seccondary"> You can create administrator Here  </h3>
		 	 	<div class="d-flex justify-content-center text-align-center bg-warning w-25 p-5" style="opacity: 0.7">
		 	 		

		 	 		<form action="adminSubmissionPage.php" method="post">
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
		 	 							<label>USER ACCESS : </label><br>
										
		 	 						</td>
		 	 						<td>
		 	 							  <select name='newUserAccess'>
									            <option value="Admin">Administrator </option>
									            <option value="Employee">Employee </option>
									       </select>
										
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

		 	 <!-- divisor for creating Employee  -->
		 	 <div>
		 	 	
		 	 </div>
 			




		 	<!-- all Scripts  -->  

		 	<script type="text/javascript">
		 		//script for creating admin 

		 		 



		 		function createAdmin() {

		 			var flag = document.getElementById('createAdminDiv');
		 			flag.style.disply='none';
		 			if(flag.style.display==='none'){
		 				flag.style.display='block';
		 			}else{
		 				flag.style.display='none';
		 			}
		 		}

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




		 	</script>
		
</body>
</html>