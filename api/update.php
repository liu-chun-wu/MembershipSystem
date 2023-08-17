<div align="center">
    <img src="../image/revise.jpg">
</div>
<?
include_once "setting.php";
$member = new DB('member');
$member->deleteById($_POST['id']);
to("../index.php");
