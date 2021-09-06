<?php
function print_title() {
    if($_GET['id']!=null){
        echo htmlspecialchars($_GET['id']);}
        else{
            echo 'Welcome!';
        }
}
function print_description(){
    $basename= basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/" . $basename));
    //file_get_contents: 파일 내용을 읽어오는 함수
    //부모디렉토리로 접근을 금지시킴(basename):파일의 경로에서 파일의 이름만 추출해주는 함수
    //htmlspecialchars: 사용자가 script태그를 사용할 지도 모르는 description과 title에 적용하여 js를 사용하지 못하게 만듬
}
function print_list(){
    $list=scandir('./data');
    // scandir: 특정한 디렉토리 목록을 배열로 받을 수 있다. 
   
    
    $i=0;
    while($i<count($list)){//배열의 갯수 알려주는 함수 count
        $title=htmlspecialchars($list[$i]);
        if ($list[$i] != '.') {
            if($list[$i] != '..'){
                echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
                //\를 이용하여 php가 "를 문자로 인식하도록 설정
            }
        }
        $i=$i+1;
        
    }
}
?>