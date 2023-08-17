<?
include_once "../dbsetting.php";
$member = new DB('users');
$data = $member->findByArray($_POST);
$_SESSION['id'] = $data['id'];
to("../admin.php");
