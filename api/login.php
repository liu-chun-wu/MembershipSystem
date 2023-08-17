<?
include_once "../dbsetting.php";
$member = new DB('users');
if ($member->countByArray(['account' => $_POST['account'], 'password' => $_POST['password']]) > 0) {
    echo "corrrect";
    //$_SESSION['login'] = "true";
    //to('../admin.php');
} else {
    echo "wrong";
    //to("../index.php");
}
