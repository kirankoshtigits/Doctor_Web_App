<?php
	require 'config.php';
?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="College, Pokhara, IT College, Lions Marga, college in pokhara, nepalIT">
 <meta name="author" content="Bishworaj Poudel">
 <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="javascript/js.js="></script>

<body class="body">
	<header class="mainheader">
		<img src="images/logo.png">
	<content id="search">
		<form>
			<input type="text" name="search" placeholder="Search anything..." onclick="window.location.href='search.html'">
		</form>
	</content>
	<nav>
		<ul>
				<li><a href="../patientindex.html">Home</a></li>
				<li><a href="../patient_appointment.html">Patient Appointment</a></li>
				<li><a href="../patient_cancel_oppintment.html">Cancel Appointment</a></li>
				<li><a href="doctor_list1.php">Doctor List</a></li>
				<li><a href="DataBase/patient_list1.php">Patient List</a></li>
				<li><a href="../index.html">Logout</a></li>
		</ul> 
	</nav>
	
  <title>Doctor List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.txt
	{
		height:150px;
		width:100%;
		border-radius:10px;
	}
  </style>
  </body>

  <title>Doctor List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.txt
	{
		height:150px;
		width:100%;
		border-radius:10px;
	}
  </style>
</head>

<div class="container">
  <div class="panel-group">
	<h2 id="title">Doctor List</h2>
    <div class="panel panel-primary" id="formpage">
      <div class="panel-heading">Doctor List</div>
		    <div class="panel-body">
<?php
					$query1=mysqli_query($con,"SELECT * FROM doctor");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo" Doctor Name";
							echo "</th>";
							
							echo "<th width=120'>";
								echo"Mobile No";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"Age";
							echo "</th>";
							
							echo "<th width='300'>";
								echo"Address";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"Specialist";
							echo "</th>";
							echo "<th width='90'>";
								echo"Quelification";
							echo "</th>";
							
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query1))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['name']."</td>"; 
								echo"<td>".$fetch['mobileno']."</td>";
								echo"<td>".$fetch['age']."</td>";
								echo"<td>".$fetch['address']."</td>";
								echo"<td>".$fetch['specialist']."</td>";
								echo"<td>".$fetch['quelification']."</td>";
							echo "</tr>";
						}
					echo"</table>";
			?><br><br>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-2">
			</div>
			<div class="col-xs-3">
		</div>
	  </div>
   </div>