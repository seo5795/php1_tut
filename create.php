<?php
require('lib/print.php');
//객체화
?>
<?php 
require ('view/head.php');
?>
		<?php 
		  print_list();
		  //echo "<li>$list[0]</li>\n";
		?>
		<!-- scandir: 특정한 디렉토리 목록을 배열로 받을 수 있다. -->
	</ol>
	
	<a href="create.php">create</a>
	
	<form action="create_process.php" method="post">
		<p><input type="text" name="title" placeholder="Title"></p>
		<p><textarea name="description" placeholder="Description"></textarea></p>
		<p><input type="submit"></p>
	</form>
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