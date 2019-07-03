
<center>
<div style="width:500px;height:500px;backgroundcolor:yellow;">
<br>
<img src="./images/products/<?php echo $r['authorname']; ?>.jpg" alt="<?php echo $r['bookname']; ?>" style="border:1px solid black;float:center;width:300px;height:400px;margin-top:40px;margin-left:20px;"/>                                
        <br><br>   
		<h4><?php echo "BookName: ".$r['bookname']; ?></h4>
		<h4><?php echo "AuthorName: ".$r['authorname']; ?></h4>
		<h4><?php echo "Department: ".$r['dept']; ?></h4>
		<h4><?php echo "Semester: ".$r['sem']; ?></h4>
		<h4><?php echo "Edition: ".$r['edition']; ?></h4>
		<h4><?php echo "Qauntity: ".$r['qauntity']; ?></h4>	
			<input class="btn btn-info light blue"  type="submit" name=<?php echo $r['bookid'] ?> value="Request" />
</div>	
</center>
<br><br>