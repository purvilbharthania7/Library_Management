<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="csss/css/main.1.0.css">
        <link rel="stylesheet" href="csss/css/materialize.min.css">
        <link rel="stylesheet" href="csss/css/main.1.0.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Anton|Roboto:300,400,500" rel="stylesheet">
        <link rel="canonical" href="<?php echo $canonUrl; ?>" />

<style>
#re1{
	
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
<br><br><br><br><br>
<center>

<form action="pass.php" method="GET">
	
	<label class="labelclass">USERNAME:</label><input type="text" name="u" id="re1" />
	<label class="labelclass">EMAIL_ID:</label><input type="text" name="emailid" id="re1" />
	
	
	<input class="btn btn-info light blue" id="s2" type="submit" name="Submit" value="Submit" />
	
</form>	
<br><br>
<?php
	if(isset($_GET['msg']))
	{
		echo "<center><h2>".$_GET['msg']."</h2></center>";
	}
	elseif(isset($_GET['msg1']))
	{
		echo "<center><h2>".$_GET['msg1']."</h2></center>";
	}
	elseif(isset($_GET['msg2']))
	{
		echo "<center><h2>".$_GET['msg2']."</h2></center>";
	}
	
?>
</center>

</body>
</html>