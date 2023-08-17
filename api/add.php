<div align="center">
    <img src="../image/success.jpg">
</div>
<?
include_once "../dbsetting.php";
$member = new DB('users');
$member->createByArray($_POST);
to("../index.php");
