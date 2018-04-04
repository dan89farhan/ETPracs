<?php
session_start();
echo "Hello ".$_SESSION['user']."<br>";
?>
<form action="q3.php" method="post">
<input type="submit" name="logout" value="logout"/>
</form>
<?php
if(isset($_POST['logout']))
			{
			session_destroy();
			header("location:q3.php");
				}
				?>