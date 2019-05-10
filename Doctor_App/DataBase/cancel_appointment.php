<?php
	require 'config.php';
?>
<?php
					
					if(isset($_POST['submit_btn1']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						
							$id=$_POST['id'];
													
					    	$query="delete FROM project WHERE id='$id'";
							
							$query_run=mysqli_query($con,$query);
							
							if($query_run)
							{
									echo'<script type="text/javascript">alert("Record is Delete Successfully")</script>';
							}
					}
					echo "<script> location.replace('../patient_cancel_oppintment.html'); </script>";				
		
?>