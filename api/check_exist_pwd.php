<?
include_once '../dbsetting.php';
$member = new DB('users');

// 獲取POST請求的原始數據
$jsonData = file_get_contents("php://input");
//  解析JSON數據為關聯數組
$data = json_decode($jsonData, true);
// 解碼JSON字符串為PHP數組
if ($member->countByArray($data) > 0) {
    $message = array(
        "message" => "already exist"
    );
} else {
    $message = array(
        "message" => "does not exist"
    );
}
echo json_encode($message);
