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
			<li><a href="../std_register.html">Student Register</a></li>
			<li><a href="../cmp_register.html">Add Company</a></li>
			<li><a href="student_list.php">Student List</a></li>
		    <li><a href="company_list.php">Company List</a></li>
			<li><a href="Student_Sorted_list.php">Sort List Student</a></li>
		</ul> 
	</nav>
	
  <title>Company List</title>
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

  <title>Company List</title>
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
	formpage
	{
		margin-left:20%;
		
	}
  </style>
</head>

<div class="container">
  <div class="panel-group">
	<h2 id="title">Company List</h2>
    <div class="panel panel-primary" id="formpage">
      <div class="panel-heading">Company List</div>
		    <div class="panel-body" id="formpage">
<?php
					$query1=mysqli_query($con,"SELECT * FROM company_info");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
						
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Company Name";
							echo "</th>";
							
							echo "<th width='150'>";
								echo"Company Type";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"10th %";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Diploma %";
							echo "</th>";
							
							echo "<th width=70'>";
								echo"Degree %";
							echo "</th>";
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query1))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['name']."</td>"; 
								echo"<td>".$fetch['type']."</td>";
								echo"<td>".$fetch['tenth']."</td>";
								echo"<td>".$fetch['diploma']."</td>";
								echo"<td>".$fetch['degree']."</td>";
							echo "</tr>";
						}
					echo"</table>";
			?><br><br>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-2">
			</div>
			
		</div>
	  </div>
   </div>