<html>
<head>
<title>LIBRARIAN SITE</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="csss/css/main.1.0.css">
        <link rel="stylesheet" href="csss/css/materialize.min.css">
        <link rel="stylesheet" href="csss/css/main.1.0.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Anton|Roboto:300,400,500" rel="stylesheet">
     
<style>
#re{
	
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
#a1{
	padding-top:10px;
	border:1px solid black;
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
</style>
</head>
<body>

<br><br><br><br>
<center>
<?php
if(isset($_GET['m1']))
{
	echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m1']."</h2></center>";
}
elseif(isset($_GET['m2']))
{
	echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m2']."</h2></center>";
}


?>
<form action="updatedata.php" method="GET">
<span>Book Name</span><input type="text" name="bookname" id="re"/>
<input class="btn btn-info light blue" type="submit" name="Submit" value="Submit" />
</form>
</center>
</body>
</html> 