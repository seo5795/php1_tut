<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>function</title>
</head>
<body>

<h1>Function</h1>
<h2>Basic</h2>
<?php 
function basic(){
    print("Lorem ipsum dolor1");
    print("Lorem ipsum dolor1");
}
    
?>

<h2>parameter &amp; argument</h2>
<?php 
function sum($left, $right){//파라미터, 매개변수
    print($left+$right);
    print("<br>");
}
    sum(2,3);//입력값: argument
    sum(4,6);
?>

<h2>return</h2>

<?php 
function sum2($left,$right){
    return $left+$right;
}
print(sum2(2,4));
?>

</body>
</html>