
<?php
	include './includes/header.php';
?>
<form action="sendmail.php" method="GET">
<?php
session_start();
if(isset($_SESSION['uname']))
{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('SELECT * FROM itemdata');
	while($r=$query->fetch())
	{
		$id=$r['bookid'];
	
		if(isset($_GET[$id]))
		{
			include './itemdetail.php';
		}
	}
}else
{
	header("Location:login.php");
}
?>
</form>
</body>
</html>