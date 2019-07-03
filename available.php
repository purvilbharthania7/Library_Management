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
  <h2>Available Books List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Book id</th>
        <th>Book Name</th>
		<th>Author Name</th>
		<th>Department</th>
		<th>Semester</th>
		<th>Edition</th>
		<th>Qauntity </th>
      </tr>
    </thead>
    <?php
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query=$dbhandler->query("SELECT * FROM itemdata");
		$total=0;
		while($r=$query->fetch())
		{
				
				$total = $total + (int)$r['qauntity'];
				include './availabledata.php';
				
			
		}
		echo "Total Available Books:".$total;
		
	?>
  </table>
  <h2></h2>
</div>

</body>
</html>