<html>
<head>
<title>LIBRARIAN SITE</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="csss/css/main.1.0.css">
        <link rel="stylesheet" href="csss/css/materialize.min.css">
        <link rel="stylesheet" href="csss/css/main.1.0.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Anton|Roboto:300,400,500" rel="stylesheet">
        <link rel="canonical" href="<?php echo $canonUrl; ?>" />
<script> 
$(document).ready(function(){
  $("#s1").click(function(){
    
  	$("#re1").fadeToggle("slow");
    $("#s2").fadeToggle("slow");
  });
});
$(document).ready(function(){
  $("#s3").click(function(){
    
    $("#re2").fadeToggle("slow");
    $("#s4").fadeToggle("slow");
  });
});
$(document).ready(function(){
  $("#s5").click(function(){
    
    $("#re3").fadeToggle("slow");
    $("#s6").fadeToggle("slow");
  });
});
$(document).ready(function(){
  $("#s7").click(function(){
    
    $("#re4").fadeToggle("slow");
    $("#s8").fadeToggle("slow");
  });
});
$(document).ready(function(){
  $("#s9").click(function(){
    
    $("#re5").fadeToggle("slow");
    $("#s10").fadeToggle("slow");
  });
});
$(document).ready(function(){
  $("#s11").click(function(){
    
    $("#re6").fadeToggle("slow");
    $("#s12").fadeToggle("slow");
  });
});
</script>
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
#re2{
	
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
#re3{
	
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
#re4{
	
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
#re5{
	
	width:250px;
	height:40px;
	display:block;
	margin:20px;
	border-radius:10px;
	text-decoration:none;
	font-size:20px;
	color:black;
}
#re6{
	
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
			elseif(isset($_GET['m3']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m3']."</h2></center>";
			}
			elseif(isset($_GET['m4']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m4']."</h2></center>";
			}
			elseif(isset($_GET['m5']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m6']."</h2></center>";
			}
			elseif(isset($_GET['m6']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m6']."</h2></center>";
			}
			elseif(isset($_GET['m7']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m7']."</h2></center>";
			}
			elseif(isset($_GET['m8']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m8']."</h2></center>";
			}
			elseif(isset($_GET['m9']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m9']."</h2></center>";
			}
			elseif(isset($_GET['m10']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m10']."</h2></center>";
			}
			elseif(isset($_GET['m11']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m11']."</h2></center>";
			}
			elseif(isset($_GET['m12']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m12']."</h2></center>";
			}
			elseif(isset($_GET['m13']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m13']."</h2></center>";
			}
			elseif(isset($_GET['m14']))
			{
				echo "<center><h2 style='color:black;font-size:20px;'>".$_GET['m14']."</h2></center>";
			}
?>
<form action="issue.php" method="GET">
<h4>Enter the requestid</h4>
<input type="text" name="reqestid" id="re"/>
<input class="btn btn-info light blue" type="submit" name="Issue" value="Issue" />
<input class="btn btn-info light blue" type="submit" name="Re-Issue" value="Re-Issue" />
<input class="btn btn-info light blue" type="submit" name="Submit" value="Submit" /> 

</form>

<a href="add.php" id="a1">Add Book</a>
<a href="delete.php" id="a1">Delete Book</a>
<a href="update.php" id="a1">Update Book</a>
<a href="available.php" id="a1">Available Books</a>
<a href="issued.php" id="a1">Issued Books</a>

<form action="userreport.php" method="GET">
<input class="btn btn-info light blue" id="s1" type="button" name="uname" value="Search by User Name" />
<input type="text" name="unamereport" id="re1" style="display: none" />
<input class="btn btn-info light blue" id="s2" type="submit" name="Submit" style="display: none" value="Submit" />
</form>

<form action="userreport.php" method="GET">
<input class="btn btn-info light blue" id="s3" type="button" name="uname" value="Search by First Name" />
<input type="text" name="fnamereport" id="re2" style="display: none" />
<input class="btn btn-info light blue" id="s4" type="submit" name="Submit" style="display: none" value="Submit" />
</form>

<form action="deleterequest.php" method="GET">
<input class="btn btn-info light blue" type="submit" name="Submit" value="Delete Request" /> 
</form>

<form action="bookreport.php" method="GET">
<input class="btn btn-info light blue" id="s9" type="button" value="Search by Book Name" />
<input type="text" name="book1" id="re5" style="display: none" />	
<input class="btn btn-info light blue" type="submit" id="s10" name="Submit" style="display: none" value="Submit" />
</form>

<form action="bookreport.php" method="GET">
<input class="btn btn-info light blue" id="s11" type="button" name="authorname" value="Search by Author Name" />
<input type="text" name="authorname" id="re6" style="display: none" />
<input class="btn btn-info light blue" id="s12" type="submit" name="Submit" style="display: none" value="Submit" />
</form>
<center>

<form action="abook.php" method="GET">
<input class="btn btn-info light blue" id="s5" type="button" name="uname" value="Search Available Books by Book Name" />
<input type="text" name="book" id="re3" style="display: none" />
<input class="btn btn-info light blue" id="s6" type="submit" name="Submit" style="display: none" value="Submit" />
</form>

<form action="abook.php" method="GET">
<input class="btn btn-info light blue" id="s7" type="button" name="uname" value="Search Available Books by Author Name" />
<input type="text" name="author" id="re4" style="display: none" />
<input class="btn btn-info light blue" id="s8" type="submit" name="Submit" style="display: none" value="Submit" />
</form>

</body>
</html>