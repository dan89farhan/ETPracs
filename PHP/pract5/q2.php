<?php
	session_start();
	?>
<center><h2>Login Form</h2></center>
<form action="q2.php" method="post">
<label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<br>
<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<br>
<button  name="login" type="submit">Login</button>
</form>
<?php
if(isset($_POST['login']))
			{
			
				$username=$_POST['username'];
				$_SESSION['user']=$username;
			header("location:q2.php");
				
			}
				
		?>
		
	</body></html>