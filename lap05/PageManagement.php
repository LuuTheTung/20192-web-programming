<!DOCTYPE html>
	<?php 
		require "PageClass.php";
	?>
<html>
<head>
	<title>Page Management</title>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table>
			<tr>
				<td>Title:</td>
				<td><input type="text" name="title" size="56"  required></td>
			</tr>
			<tr>
                <td>Content:</td>
                <td><textarea name="content" rows="5" cols="40" required></textarea></td>
			</tr>
			<tr>
				<td>Copyright by:</td>
				<td><input type="text" name="copyright" size="56" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Create page">
                    <input type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

	<hr>
    <br>
    
    <?php 
        echo"Created page";		
		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['copyright'])){
			$title = $_POST['title'];
			$content = $_POST['content'];
            $copyright = $_POST['copyright'];
            $year = date("m/d/Y");
            $newpage = new page($content,$title, $year ,$copyright);
            $curPageContent = $newpage->get();
            echo "<div>$curPageContent</div>";
        }	      
	 ?>
</body>
</html>