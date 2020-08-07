<?php

$type = $_REQUEST['type'];
$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$press = $_REQUEST['press'];
$time = $_REQUEST['time'];

header("Content-Type:text/html;charset=utf-8");

$link = mysqli_connect('localhost','root','root','db_gp03');
if (!$link){
    die("连接失败：".mysqli_connect_error());
}
// echo "OK—数据库连接成功！";
mysqli_set_charset( $link, "utf8" );

if ($type === 'searchAll'){
    $sql = "select * from book_manage";
    $result = mysqli_query($link, $sql);

    $arr = mysqli_fetch_all($result,1);
    $arrlength = count($arr); // 获取数组长度
    if ($arrlength > 0) {
        $json = json_encode($arr,JSON_UNESCAPED_UNICODE);// 返回json字符串数据
        echo $json;
    } else{
        echo '暂无数据！';
    }
}

if ($type === 'addBook'){
    
}


?>