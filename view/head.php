<?php 
require_once('lib/print.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php print_title();?></title>
</head>
<body>

	<h1>
		<a href="index.php">WEB</a>
	</h1>
	<ol>
		<?php 
		  print_list();
		  //echo "<li>$list[0]</li>\n";
		?>
		<!-- scandir: 특정한 디렉토리 목록을 배열로 받을 수 있다. -->
	</ol>