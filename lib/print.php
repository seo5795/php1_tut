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
    //부모디렉토리로 접근을 금지시킴(basename)
}
function print_list(){
    $list=scandir('./data');
   
    
    $i=0;
    while($i<count($list)){
        $title=htmlspecialchars($list[$i]);
        if ($list[$i] != '.') {
            if($list[$i] != '..'){
                echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
            }
        }
        $i=$i+1;
        
    }
}
?>