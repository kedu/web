<?php
//新建数组用户保存输出
//$output = array();
////三目运算符
//$a = @$_GET['a'] ? $_GET['a'] : '';
//$uid = @$_GET['uid'] ? $_GET['uid'] : 0;
////这个是get方法
//if (empty($a)) {
//    $output = array('data'=>NULL, 'info'=>'坑爹啊!', 'code'=>-201);
////    转为json输出
////    exit(json_encode($output));
//    exit(json_encode($output));
//}
$name = $_POST["name"];
//$sex  = $_POST["sex"];
$name="lisi";

// 连接数据库的函数,后边的三个参数分别是数据库地址、数据库账号、密码
$link = mysqli_connect("likangbin.top","a1112210156","1664a59a","a1112210156");
// 判断链接是否成功
if ($link) {
    echo("链接成功\n");
} else {
    echo("连接失败\n");
}
$sql="SELECT * FROM test";
echo $sql;
$data=mysqli_query($link,$sql);
echo ("\n");
$result=$data->fetch_assoc();
echo $result['name'];
$result=$data->fetch_assoc();
echo $result['name'];
