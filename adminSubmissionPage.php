<!DOCTYPE html>
<html>
<head>
	<title>Submission Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		$host = 'localhost:3306';
		$user = 'root';
		$pass = '';
		$db = 'hrms';
		//Executing the connection with the db 
		$conn = mysqli_connect($host, $user, $pass, $db);
		

		if(isset($_POST['newAdminPassword1']) && isset($_POST['newAdminPassword2'])){

			$adminUser = $_POST['newAdminUser'];
			$adminPassword1 = $_POST['newAdminPassword2'];
			$adminPassword2 = $_POST['newAdminPassword2'];

			printf('AdminUser: %s, 
					<br>AdminPassword1:%s, 
					<br>AdminPassword2:%s',
					htmlspecialchars($adminUser,ENT_QUOTES),
					htmlspecialchars($adminPassword1, ENT_QUOTES),
				    htmlspecialchars($adminPassword2, ENT_QUOTES), 
					);
			



		}elseif(isset($_POST['newEmployeeUser']) && isset($_POST['newEmployeePassword1']) && isset($_POST['newEmployeePassword2'])){
			//print_r($_FILES['newEmployeeImage']['name']);
			echo "<br>";
			//storing all the value from the form to the variable 
			$employeeName = $_POST['newEmployeeUser'];
			$employeeId = $_POST['newEmployeeId'];
			$employeeDob = $_POST['newEmployeeDOB'];
			$employeeDesignation = $_POST['newEmployeeDesignation'];
			$employeePassword1 = $_POST['newEmployeePassword1'];
			$employeePassword2 = $_POST['newEmployeePassword2'];
			$employeeUserAccess = $_POST['newUserAccess'];
			// creating file folder path variable to store the image file into the local 
			$employeePicture = $_FILES['newEmployeeImage']['name'];
			$employeeTempPicture = $_FILES['newEmployeeImage']['tmp_name'];
			$folder = 'employeeImages/'; 
			move_uploaded_file($employeeTempPicture, $folder.$employeePicture);

			// coding for image to store into the local 
			
				//this is for testing purpose . since it is working perfectly now i'm commenting this out 
			printf(
				'Employee Name : %s,
				<br>Employee Mail : %s,
				<br>Employee Dob : %s,
				<br>Employee Designation :%s,
				<br>Employee Image Name :%s, 
				<br>Employee Password 1 : %s,
				<br>Employee Password 2 : %s,
				<br>Employee User Access : %s',
				htmlspecialchars($employeeName,ENT_QUOTES),
				htmlspecialchars($employeeId, ENT_QUOTES),
			    htmlspecialchars($employeeDob, ENT_QUOTES),    
			    htmlspecialchars($employeeDesignation, ENT_QUOTES),    
			   	htmlspecialchars($employeePicture, ENT_QUOTES),
			    htmlspecialchars($employeePassword1, ENT_QUOTES),
			    htmlspecialchars($employeePassword2, ENT_QUOTES),
			    htmlspecialchars($employeeUserAccess, ENT_QUOTES)
			);

		$sql_insert = "INSERT INTO employees_profiles( employee_name, employee_mail_id, employee_dob, employee_designation, employee_img, employee_password, employee_user_access) VALUES ('$employeeName','$employeeId','$employeeDob','$employeeDesignation','$employeePicture','$employeePassword1','$employeeUserAccess')";   


			if(mysqli_query($conn, $sql_insert)){   
			 
			 ?>
			 <div>
			 	<span class="bg-success"><h2>Profile added successfully</h2></span>
			 </div>
			 <div class=" container p-3 m-3 justify-content-center text-align-center" style="display: block" id='useraddedcard'>
		     <div class='card border border-xl border-warning text-white border-3px' style='width:350px '>
		     <img class='card-img-top' src="<?= "employeeImages/".$employeePicture ?>" alt='emp image'>
		     <div class='card-body bg-secondary'>
		     <h3 class='card-title'> User Id : <?= $employeeName?> <br></h3>
		     <p class='card-text'><h3> Designation  : <?= $employeeDesignation?></h3> <br>
		     <h3>Employee Id : <? $employeeId ?></h3></p>
		     </div>
		     <button class=" btn btn-warning p-2 m-2">
			 <a href=""> Open Profile </a>	         	
		     </button>

		     <?php

		}elseif(!mysqli_query($conn, $sql_insert)){   
			echo "<h3>Employee Not Created Successfully : </h3>". mysqli_error($conn);   
		  
		
		//INSERT INTO `employees_profile`( `employee_name`, `employee_mail_id`, `employee_dob`, `employee_designation`, `employee_img`, `employee_password`) VALUES ('test','test@test.com','02-02-1292','devloper','Avatar.img','qwert1234')

		}elseif(isset($_POST['searchEmployeeByName']) && isset($_POST['searchEmployee'])){

			$employee_mail_id = $_POST['searchEmployeeByName'];
			$sql = "SELECT sl_no, employee_name, employee_mail_id, employee_dob, employee_designation, employee_user_access, employee_img, employee_password FROM employees_profiles WHERE employee_mail_id = '$employee_mail_id'";
			$table_row = mysqli_query($conn,$sql);

			while($row = $table_row->fetch_assoc()) {
		     /* echo " Employee Profile No : ".$row['sl_no'].'<br>Employee Name :'.$row['employee_name'].'<br>employee mail :'.$row['employee_mail_id'].'<br> employee dob :'.$row['employee_dob'].'<br>'.$row['employee_designation'].'<br>'.$row['employee_img'].'<br>';*/

		     ?> <div class=' jumbotron bg-light '>
			     	<div class="container p-3 m-3">
			     		<div class=" container-fluid float-left  ">
			     		<button class="btn btn-warning " href="adminSubmissionPage.php"> GO BACK </button>
			     		</div>
			     	</div>
		     	</div>

		       <div class=" container p-3 m-3 justify-content-center text-align-center">
		       	<div class='card border border-xl border-warning text-white border-3px' style='width:350px '>
		       <img class='card-img-top' src="<?= "employeeImages/".$row['employee_img']?>" alt='emp image'>
		         <div class='card-body bg-secondary'>
		           <h4 class='card-title'> User Id : <?= $row['employee_name']?> <br></h4>
		          <p class='card-text'><h3> Designation  : <?= $row['employee_designation']?></h3> <br></p>
		         </div>
		         <button class=" btn btn-warning p-2 m-2">
			         	<a href=""> Open Profile </a>	         	
		         </button>
		      </div>
		       </div>
		     </div>



		<?php
			}
		}
	}
		//=====closing the connection 
		mysqli_close($conn);
	 ?>
</body>
</html>