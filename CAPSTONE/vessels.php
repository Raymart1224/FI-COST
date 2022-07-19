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
			<i class='bx bxs-user-circle'></i>
			<span class="text">FI-COST</span>
		</a>
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
			<li>
				<a href="enumerator.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Enumerator</span>
				</a>
			</li>
			<li class="active">
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
			           <p>List of Fishing Vessles</p>
			        <div class="top-table"> 
			          <a href="#" class="add_new_print">
								<i class='bx bx-printer' ></i>
								<span class="text">Print Report</span>
							</a>
					 <a href="#divOne" class="add_new">
								<i class='bx bx-plus' ></i>
								<span class="text">Add Fishing Vessels</span>
							</a><br></div>
			        </div>
			        <div class="table_section">
			            <table class="table-vessels">
			                <thead>
			                    <tr>
								<th>Barangay</th>
								<th>BGS-<br>Nummber</th>
								<th>Fishermen<br>Owner</th>
								<th>Vessel Name</th>
								<th>Length</th>
								<th>Breadth</th>
								<th>Depth</th>
								<th>GT</th>
								<th>NT</th>
								<th>Engine Type</th>
								<th>Horse Power</th>
								<th>Fees</th>
								<th>Serial<br>Number</th>
								<th>Registration<br> Date</th>
								<th>Remarks</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Baclaran</td>
								<td>31022</td>
								<td>Duman Eliseo</td>
								<td>TYRON KESA GAB</td>
								<td>6.14</td>
								<td>0.73</td>
								<td>0.59</td>
								<td>0.65</td>
								<td>0.44</td>
								<td>Golden House</td>
								<td>15 HP</td>
								</td>
								<td>Php.200</td>
								<td></td>
								<td>06-01-2022</td>
								<td><span>Renew</span></td>
								<td><button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button> </td>
							</tr>
						</tbody>
					</table>
				</div>
		</main>
		<!-- MAIN -->
				<div class="overlay" id="divOne" style="overflow:auto;">
					<div class="wrapper">
						<h2>Add Fishing Vessels</h2><a class="close" href="#">&times;</a>
						<div class="content">
							<div class="containers">
								<div class="row">
								  <div class="col-75">
								      <form action="#">
								        <div class="row" style="margin-top:15px">
								            <div class="col-50">
								                <label>Barangay</label>
								                <input type="text" id="brgy">
								            </div>
								            <div class="col-50">
								                <label>BGS-Number</label>
								                <input type="text" id="bgs">
								            </div>
								        </div>
								         
								        <div class="row">
								          	<div class="col-50">
								            	<label for="owner">Fishermen Owner</label>
								            	<input type="text" id="owner">
											<div class="row">
								              	<div class="col-50">
								                	<label for="length">Length</label>
								                	<input type="text" id="length">
								              	</div>
								             	<div class="col-50">
								                	<label for="breadth">Breadth</label>
								                	<input type="text" id="breadth">
								              	</div>
								            </div>
								          	</div>

								        <div class="col-50">
								            <label for="vname">Vessel Name</label>
								            <input type="text" id="vname">
								            	<div class="row">
								              		<div class="col-50">
								                		<label for="depth">Depth</label>
								               			 <input type="text" id="depth">
								              		</div>
								              		<div class="col-50">
								                		<label for="gt">Gross Tonnage</label>
								                		<input type="text" id="gt">
								              		</div>
								            	</div>
								        </div>
										</div>

										<div class="row">
								            <div class="col-50">
								                <label for="nt">Net Tonnage</label>
								                <input type="text" id="nt">
								            </div>
								            <div class="col-50">
								                <label for="et">Engine Type</label>
								                <input type="text" id="et">
								            </div>
								            <div class="col-50">
								                <label for="hp">Horsepower</label>
								                <input type="text" id="hp">
								            </div>
								            <div class="col-50">
								                <label for="fee">Fees</label>
								                <input type="text" id="fee">
								            </div>
								            
								        </div>
									
										<div class="row">
								              <div class="col-50">
								                <label>Serial Number</label>
								                <input type="text" id="snumber">
								              </div>
								              <div class="col-50">
								                <label>Registration Date</label>
								                <input type="date" id="registration" style="margin-left:-3px;">
								              </div>
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