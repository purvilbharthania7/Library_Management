<?php
if(isset($_GET['bookid']) && isset($_GET['bookname']) && isset($_GET['authorname']) && isset($_GET['dept']) && isset($_GET['sem']) && isset($_GET['edition']) && isset($_GET['qauntity']))
{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$bookid = $_GET['bookid'];
	$bookname=$_GET['bookname'];
	$authorname=$_GET['authorname'];
	$dept=$_GET['dept'];
	$sem=$_GET['sem'];
	$edition=$_GET['edition'];
	$qauntity=$_GET['qauntity'];
	$sql="insert into itemdata (bookid,bookname,authorname,dept,sem,edition,qauntity) values ('$bookid','$bookname','$authorname','$dept','$sem','$edition','$qauntity')";
	$query=$dbhandler->query($sql);
	header("location:librarian.php?m7=ADDED DATA");
}
else
{
	header("location:add.php?m1=FILL ALL DATA PROPER");
}
?>