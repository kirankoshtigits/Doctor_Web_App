<?php
	include 'config.php';
?>
<?php 
					if(isset($_POST['submit_btn1']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						$username=$_POST['username'];
						$password=$_POST['password'];
							$query="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)==1)
							{
								header('location:../adminindex.html');
								//echo'<script type="text/javascript">alert("Login Successfull")</script>';
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
									header('location:../adminlogin.html');
							}
					}	
					//echo "<script> location.replace('../adminlogin.html'); </script>";
										
?>




















