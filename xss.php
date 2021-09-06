<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php echo htmlspecialchars('<script>alert("babo");</script>')  ?>님

<!-- 유저의 script태그를 문자 <:&lt로 인식 -->
<?php 
require ('view/bottom.php');
?>