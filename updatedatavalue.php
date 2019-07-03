<?php
if(isset($_GET['bookname']) && isset($_GET['authorname']) && isset($_GET['dept']) && isset($_GET['sem']) && isset($_GET['edition']) && isset($_GET['qauntity']))
{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	
	$bookname=$_GET['bookname'];
	$authorname=$_GET['authorname'];
	$dept=$_GET['dept'];
	$sem=$_GET['sem'];
	$edition=$_GET['edition'];
	$qauntity=$_GET['qauntity'];
	$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookname='$bookname'");
	$r=$query->fetch();
	$bookid = $r['bookid'];
	$sql="UPDATE itemdata SET bookid='$bookid',bookname='$bookname',authorname='$authorname',dept='$dept',sem='$sem',edition='$edition',qauntity='$qauntity' WHERE bookname='$bookname'";
	$query=$dbhandler->query($sql);
	header("location:librarian.php?m7=UPDATED DATA");
}
else
{
	header("location:add.php?m1=FILL ALL DATA PROPER");
}
?>