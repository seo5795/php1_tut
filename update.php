<?php
require('lib/print.php');
?>
<?php 
require ('view/head.php');
?>
		
	
	<a href="create.php">create</a>
	<?php 
	if(isset($_GET['id'])){?>
	    
	<a href="update.php?id=<?= $_GET['id'];?>">update</a>
	<?php 
	}
	?>
	<h2><?php 
	print_title();
	?></h2>
	
	<?php
       
           print_description();
        
    ?>
	<!-- 다른 경로의 파일을 읽어옴: file_get_contents -->
	<!-- isset($_GET['id'])---not null과 같음 -->
	<form action="update_proccess.php" method="post">
		<input type="hidden" name="old_name" value="<?php $_GET['id']?>">
		<p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"></p>
		<p><textarea name="description" placeholder="Description"><?php print_description()?></textarea></p>
		<p><input type="submit"></p>
	</form>
<?php 
require ('view/bottom.php');
?>