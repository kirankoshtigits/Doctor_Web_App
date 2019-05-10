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
			<li><a href="../adminindex.html">Home</a></li>
			<li><a href="../doctor_reg.html">Add Doctor</a></li>
			<li><a href="doctor_list.php">Doctor List</a></li>
			<li><a href="patient_list.php">Patient List</a></li>
			<li><a href="../doctor_remove.html">Delete Doctor</a></li>
			<li><a href="../index.html">Logout</a></li>
		</ul> 
	</nav>
	
  <title>Patient List</title>
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

  <title>Patient List</title>
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
	<h2 id="title">Patient List</h2>
    <div class="panel panel-primary" id="formpage">
      <div class="panel-heading">Patient List</div>
		    <div class="panel-body">
<?php
					$query1=mysqli_query($con,"SELECT * FROM project");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='100'>";
								echo" Patient Name";
							echo "</th>";
							
							echo "<th width=200'>";
								echo"Mobile Number";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"Age";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Address";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"City";
							echo "</th>";
							
							echo "<th width='90'>";
								echo"date";
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
								echo"<td>".$fetch['city']."</td>";
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