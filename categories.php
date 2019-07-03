<?php
	include './includes/header.php';
?>

        <br><br>
<form action="book.php" method="GET">
        <?php
			$cat = '';
			if(isset($_GET['q'])){
				if($_GET['q']=="Find Book")
				{	$cat = "ce";}
				else{
					$cat = $_GET['q'];}
			}
			else{
				header('Location:home.php ');
			}
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$dbhandler->prepare('SELECT * FROM itemdata WHERE dept = ?');
			$query->execute(array($cat));
			
			while($r=$query->fetch()){
			//echo specific attributes
			
			include './items.php';
			
			//echo all data in both format: numeric and associative
			}
		
        ?>
</form>
      

<?php
//include './includes/footer.php';
?>