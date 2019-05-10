<?php
	require 'config.php';
?>
<?php
					
					if(isset($_POST['submit_btn1']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						
							$mobileno=$_POST['mobileno'];
							$password=$_POST['password'];
							
					    	$query="SELECT * FROM doctor WHERE mobileno='$mobileno' AND password='$password'";
							
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts>0)
							{
								header('location:../doctorindex.html');
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}	
echo "<script> location.replace('../doctor_login.html'); </script>";									
?>