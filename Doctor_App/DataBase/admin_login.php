<?php
	require 'config.php';
?>
<?php
					
					if(isset($_POST['submit_btn1']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						
							$username=$_POST['username'];
							$password=$_POST['password'];
							
					    	$query="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
							
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts>0)
							{
								header('location:../adminindex.html');
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
?>