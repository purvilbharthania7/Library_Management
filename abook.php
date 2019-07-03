
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
  <h2>Available Book</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Book id</th>
        <th>Book Name</th>
		<th>Author Name</th>
		<th>Edition</th>
		<th>Department</th>
		<th>Quantity</th>
      </tr>
    </thead>
 <?php

	if(isset($_GET['book']))
    {	
		$u=$_GET['book'];
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query=$dbhandler->query("SELECT * FROM itemdata WHERE bookname='$u'");
		while($r=$query->fetch())
		{
		
		
				include './abookdetails.php';
		
	
		}
	}elseif(isset($_GET['author']))
    {	
		$u=$_GET['author'];
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query=$dbhandler->query("SELECT * FROM itemdata WHERE authorname='$u'");
		while($r=$query->fetch())
		{
		
		
				include './abookdetails.php';
		}
	}
?>
	
  </table>
</div>

</body>
</html>