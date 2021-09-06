<?php 
require_once('lib/print.php');
?>
<?php 
require ('view/head.php');
?>
	
	<a href="create.php">create</a>
	<?php 
	if(isset($_GET['id'])){?>
	    
	<a href="update.php?id=<?= $_GET['id'];?>">update</a>
	<a href="delete.php?id=<?= $_GET['id'];?>">delete</a>
	<form action="delete.php" method="post">
		<input type="hidden" value="<?= $_GET['id'];?>">
		<input type="submit" value="delete">
	
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

<?php 
require ('view/bottom.php');
?>