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
        <th>Username</th>
        <th>Book id</th>
        <th>Book Name</th>
		<th>Author Name</th>
		<th>Edition</th>
      </tr>
    </thead>
    <?php
		$datezero=date("0000-00-00");
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query=$dbhandler->query("SELECT * FROM requestdata");
		while($r=$query->fetch())
		{
			if((strtotime($r['idate']) != strtotime($datezero)) &&  (strtotime($r['ridate']) == strtotime($datezero)))
			{
				$bookid=$r['bookid'];
				$query1=$dbhandler->query("SELECT * FROM itemdata WHERE bookid='$bookid'");
				$r2=$query1->fetch();
				include './issueditem.php';
			}
			else{	continue;}
		}
	?>
  </table>
</div>

</body>
</html>