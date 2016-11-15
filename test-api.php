<?php
//新建数组用户保存输出
$output = array();
//三目运算符
$a = @$_GET['a'] ? $_GET['a'] : '';
$uid = @$_GET['uid'] ? $_GET['uid'] : 0;
//这个是get方法
if (empty($a)) {
    $output = array('data'=>NULL, 'info'=>'坑爹啊!', 'code'=>-201);
//    转为json输出
    exit(json_encode($output));
}
$output=array('data'=>'传的参数不为空','info'=>'你要发大财了','code'=>'200');
//exit(json_encode($output));
$type = $_POST['type'];
$data = '';
//是否为空,是不是数字,必须大于0
if (isset($type) && is_numeric($type) && $type >= 0) {
    if ($type == 1) {
        $data = array(
            'type' => $type,
            'name' => '标哥的技术博客',
            'site' => 'www.huangyibiao.com');
    } else if ($type == 2) {
        $data = array(
            'type' => $type,
            'name' => '公众号：标哥的技术博客',
            'site' => 'weixin search: biaogedejishuboke');
    }

    $response = array(
        'code'    => 200,
        'message' => 'success for request',
        'data'    => $data,
    );

    exit(json_encode($response));
}

$response = array(
    'code'    => 999,
    'message' => 'argument error for request',
    'data'    => $data,
);

exit(json_encode($response));
