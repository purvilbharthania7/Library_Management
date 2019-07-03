<html>
<head>
<?php
session_start();

	if(isset($_SESSION['uname']))
	{
		unset($_SESSION['uname']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['requestid']);
		unset($_SESSION['count']);
		session_destroy();
		header("location:login.php?msg4=Successful LOGOUT");
	}	
	else
	{
		header("location:login.php?msg4=Please Login First");
	}
?>

</body>
</html>