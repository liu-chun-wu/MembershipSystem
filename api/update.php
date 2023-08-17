<div align="center">
    <img src="../image/revise.jpg">
</div>
<?
include_once "../dbsetting.php";
$member = new DB('users');
$member->updateByArray($_POST);
to("../admin.php");
