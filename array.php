<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php $coworkers=array('아리','티모','가렌'); 
    echo $coworkers[0].'<br>';
    echo $coworkers[2].'<br>';
    var_dump(count($coworkers)); 
   
    array_push($coworkers, '홍길동');
    var_dump($coworkers);
?>

</body>
</html>