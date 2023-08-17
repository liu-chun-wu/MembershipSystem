<?
include_once '../dbsetting.php';
$member = new DB('users');

// 獲取POST請求的原始數據
$jsonData = file_get_contents("php://input");
//  解析JSON數據為關聯數組
$data = json_decode($jsonData, true);
// 解碼JSON字符串為PHP數組
$message = array(
    "message" => "correct"
);
if ($member->countByArray($data) > 0) {
    $message = array(
        "message" => "correct"
    );
} else {
    $message = array(
        "message" => "wrong"
    );
}
echo json_encode($message);
