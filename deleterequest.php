<?php 		
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$idate = date("Y-m-d");
$i=strtotime($idate);
$query=$dbhandler->query("SELECT * FROM requestdata WHERE rldate < '$i'");
while($r=$query->fetch())
{
	$R=$r['bookid'];
	$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$R'");
	$r=$query->fetch();
	$R1= $r['qauntity']+1;
	$query=$dbhandler->query("UPDATE itemdata SET qauntity='$R1' WHERE bookid='$R'");
}
$query=$dbhandler->query("DELETE FROM requestdata WHERE rldate<'$idate'");
$count = $query->rowcount();
echo $count;
//$r=$query->fetch();
?>