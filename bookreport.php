<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Issued Book by Library</h2>
  <table class="table">
    <thead>
      <tr> 
      	<form action="bookreport.php" method="GET">
      		<input type="text" name="book1" id="re" value=<?php echo $_GET['book1'];?> style="display: none" />
			<input class="btn btn-info light blue" type="submit" name="uu" style="display: block" value="Sort by uname"/>
      	</form>
        <th>Username</th> 
        <th>First Name</th>
        <th>Last Name</th>
		<th>Book Name</th>
		<th>Edition</th>
      </tr>
    </thead>
<?php
$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$datezero = date("0000-00-00");
if(isset($_GET['book1']))
{
	$u=$_GET['book1'];
	
	$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookname='$u'");
	$r=$query->fetch();
		$bookid=$r['bookid'];
		
		$query1=$dbhandler->query("SELECT * FROM requestdata WHERE bookid='$bookid'");
		while($r1=$query1->fetch())
		{
			if((strtotime($r1['idate']) != strtotime($datezero)))
			{
				$uname=$r1['uname'];
				$query2=$dbhandler->query("SELECT * FROM registerdata WHERE uname='$uname'");
				

				while($r2=$query2->fetch())
				{
					include './bookreport1.php';
				}
			} 
		}
	
}
elseif(isset($_GET['authorname']))
{
	
	$v=$_GET['authorname'];
	$query=$dbhandler->query("SELECT * FROM itemdata WHERE authorname='$v'");
	$r=$query->fetch();
		$bookid=$r['bookid'];
		$query1=$dbhandler->query("SELECT * FROM requestdata WHERE bookid='$bookid'");
		while($r1=$query1->fetch())
		{
			if((strtotime($r1['idate']) != strtotime($datezero)))
			{
				$uname=$r1['uname'];
				$query2=$dbhandler->query("SELECT * FROM registerdata WHERE uname='$uname'");
				while($r2=$query2->fetch())
				{
					include './bookreport1.php';
				}
			}
		}
	
}


else{
	header("Location:librarian.php?m14=please enter the book name");
}
?>
  </table>
</div>

</body>
</html>