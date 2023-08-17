<?
include_once '../dbsetting.php';
$member = new DB('users');

// 获取POST请求的原始数据
$jsonData = file_get_contents("php://input");
// 解析JSON数据为关联数组
$data = json_decode($jsonData, true);
// 解码JSON字符串为PHP数组
$message = array(
    "message" => "correct"
);
if ($member->countByArray($data) > 0) {
    echo json_encode($message);
} else {
    echo "wrong";
}
//to('../index.php');
