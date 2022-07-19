<?php 

include 'conn.php';

session_start();

?>

<?php
$name = $_SESSION['name'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/styles.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<title>Fi-CoST</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/logo.png" style="width: 185px; margin-left:5px; margin-top: 15px;"></a>		
		<ul class="side-menu top">
			<li>
				<a href="admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="barangay.php">
					<i class='bx bxs-building-house' ></i>
					<span class="text">Barangay</span>
				</a>
			</li>
			<li>
				<a href="fishermen.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Fishermen</span>
				</a>
			</li>
			<li class="active">
				<a href="enumerator.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Enumerator</span>
				</a>
			</li>
			<li>
				<a href="vessels.php">
					<i class='bx bxs-ship' ></i>
					<span class="text">Fishermen Vessels</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-map' ></i>
					<span class="text">Fishing Location</span>
				</a>
			</li>
			<li>
				<a href="catch.php">
					<i class='bx bxs-file' ></i>
					<span class="text">Catch Record</span>
				</a>
			</li>
			<li>
				<a href="announcement.php">
					<i class='bx bxs-megaphone' ></i>
					<span class="text">Announcement</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
			</form>
			<div class="role">
				<?php echo "$name";?><br>
				<?php echo "$role";?>		
			</div>
			<div class="profile">
				<img src="img/people.jpg" alt="">
				<ul class="profile-link">
					<li><a href="admin_profile.php"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="account_setting.php"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="index.php"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			 <div class="table">
			        <div class="table_header">
			            <p>List of Enumerator</p>
			        <div class="top-table"> 
			          <a href="#divOne" class="add_new" style="margin-top:5px">
						<i class='bx bx-plus' ></i>
						<span class="text">Add Enumerator</span>
						</a>
						<br></div>
			        </div>
			        <div class="table_section">
			            <table class="table-enumerator">
			                <thead>
			                    <tr>
			                        <th>Lastname</th>
			                        <th>Firstname</th>
			                        <th>Middlename</th>
			                        <th>Gender</th>
			                        <th>Contact Number</th>
			                        <th>Action</th>
			                    </tr>
			                </thead>
			                <tbody>
			                    <tr>
			                        <td>Lundag</td>
			                        <td>John Marky</td>
			                        <td>S</td>
			                        <td>Male</td>
			                        <td>09511357875</td>
			                        <td><button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
			                    </tr>
			                    <tr>
			                        <td>Lundag</td>
			                        <td>John Marky</td>
			                        <td>S</td>
			                        <td>Male</td>
			                        <td>09511357875</td>
			                        <td><button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
			                    </tr>
			                </tbody>
			            </table>
			        </div>
		</main>
		<!-- MAIN -->
				<div class="overlay" id="divOne" style="overflow:auto;">
					<div class="wrapper" style="margin-top:120px;">
						<h2>Add Enumerator</h2><a class="close" href="#">&times;</a>
						<div class="content">
							<div class="containers">
								<div class="row">
								  <div class="col-75">
								      <form action="#">
								        <div class="row">
								          <div class="col-50">
								            <label for="lastname">Lastname</label>
								            <input type="text" id="lastname">
								            <label for="firstname">Firstname</label>
								            <input type="text" id="firstname">
								            <label for="middlename">Middlename</label>
								            <input type="text" id="middlename">
								          </div>
								          <div class="col-50">
								            <label for="gender">Gender</label>
								            <select>
								            	<option>Male</option>
								            	<option>Female</option>
								            </select>
								            <label for="cnum">Contact Number</label>
								            <input type="text" id="cnum">
								            <label for="address">Address</label>
								            <input type="text" id="address">
								        </div>
								        <input type="submit" value="SUBMIT" class="btn-popup" style="background: #3C91E6;">
								      </form>
								    </div>
								  </div>
								</div>
							</div>
						</div>
					</div>
	</section>
	<!-- CONTENT -->

	<script src="js/script.js"></script>

</body>
</html>