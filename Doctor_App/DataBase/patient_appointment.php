<?php
	require 'config.php';
?>
<?php
				
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$patient_id=$_POST['patient_id'];
					$diesease=$_POST['diesease'];
					$time=$_POST['time'];
					$dname=$_POST['dname'];
					$date=$_POST['date'];
	
		
							$query="select * from patient_appointment WHERE date='$date'";
							$query_run=mysqli_query($con,$query);
							
						    if(mysqli_num_rows($query_run)>0)
							{
								//ther is already a user with the same username
								echo '<script type="text/javascript"> alert("Doctor is already Appointed") </script>';
							}
							else
							{
								//insert value on database
								$query1="insert into patient_appointment values('','$patient_id','$diesease','$time','$dname','$date')";
								$query_run1=mysqli_query($con,$query1);
								if($query_run1)
								{
									echo '<script type="text/javascript"> alert(" Appintment is Successfull") </script>';
								}
							}
						
				}
				echo "<script> location.replace('../patient_appointment.html'); </script>";
				
?>