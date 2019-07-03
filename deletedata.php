<?php
if(isset($_GET['bookname']))
{
	$bookname=$_GET['bookname'];
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql2="DELETE FROM itemdata WHERE bookname='$bookname'";
	$query=$dbhandler->query($sql2);
	header("location:librarian.php?m7=DELETE DATA");
}else{
	header("location:delete.php?m1=FILL ALL DATA PROPER");
}
?>