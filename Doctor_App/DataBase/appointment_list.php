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
			<li><a href="../doctorindex.html">Home</a></li>
			<li><a href="appointment_list.php">Appointment List</a></li>
			<li><a href="../index.html">Logout</a></li>
		</ul> 
	</nav>
	
  <title>Appointment List</title>
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

  <title>Appointment List</title>
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
	<h2 id="title">Appointment List</h2>
    <div class="panel panel-primary" id="formpage">
      <div class="panel-heading">Appointment List</div>
		    <div class="panel-body">
<?php
					$query1=mysqli_query($con,"SELECT * FROM patient_appointment");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='100'>";
								echo" Patient ID";
							echo "</th>";
							
							echo "<th width=200'>";
								echo"Diesease";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"Time";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Doctor Name";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"Date";
							echo "</th>";
							
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query1))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['patient_id']."</td>"; 
								echo"<td>".$fetch['diesease']."</td>";
								echo"<td>".$fetch['time']."</td>";
								echo"<td>".$fetch['dname']."</td>";
								echo"<td>".$fetch['date']."</td>";
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