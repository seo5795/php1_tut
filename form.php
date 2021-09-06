<?php

file_put_contents('data/'.$_POST['title'], $_POST['description']);
//파일 저장할 때 쓰는 함수 (경로(파일의 이름), 내용)
echo '<p>title : '.$_POST['title'].'</p>';
echo '<p>description : '.$_POST['description'].'</p>';

?>
