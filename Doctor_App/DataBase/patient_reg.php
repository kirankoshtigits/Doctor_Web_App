<?php
	require 'config.php';
?>
<?php
				
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$mobileno=$_POST['mobileno'];
					$age=$_POST['age'];
					$address=$_POST['address'];
					$city=$_POST['city'];
					$date=$_POST['date'];
					$password=$_POST['password'];
					$cpassword=$_POST['cpassword'];
					
						if($password==$cpassword)
						{	
							$query="select * from project_registration  WHERE email='$mobileno'";
							$query_run=mysqli_query($con,$query);
							
						    if(mysqli_num_rows($query_run)>0)
							{
								//ther is already a user with the same username
								echo '<script type="text/javascript"> alert("Mobile Number is already use try to another") </script>';
							}
							else
							{
								//insert value on database
								$query1="insert into project values('','$name','$mobileno','$age','$address','$city','$date','$password')";
								$query_run1=mysqli_query($con,$query1);
								if($query_run1)
								{
									echo '<script type="text/javascript"> alert("Successfull Register") </script>';
								}
							}
						}
				}
				echo "<script> location.replace('../patient_reg.html'); </script>";
				
?>