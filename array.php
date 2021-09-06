<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php $coworkers=array('아리','티모','가렌'); 
	$str="문자열";
	echo "{$str}을 출력중입니다 <br>";
    echo "{$coworkers[0]} <br>";
    echo $coworkers[2].'<br>';
    //echo를 이용하여 변수를 출력하고 싶을 때 ""밖에 사용하거나 {}를 이용하여 사용한다.
    
    var_dump(count($coworkers)); 
   
    array_push($coworkers, '홍길동');
    //배열에 값을  추가
    
    var_dump($coworkers);
?>
</body>
</html>