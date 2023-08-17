<?php
include_once "../dbsetting.php";
$member = new DB('users');
$data = $member->findById($_SESSION['id']);; ?>
<!DOCTYPE html>
<html>

<head>
    <title>修改會員資料</title>
    <meta charset="utf-8">
    <script src="../js/jquery-3.7.0.js" defer></script>
    <script src="../js/custom.js" defer></script>
</head>

<body>
    <?
    $male_checked = ($data['sex'] == "male") ? "checked" : "";
    $female_checked = ($data['sex'] == "female") ? "checked" : "";
    ?>
    <div>
        <p align="center"><img src="../image/modify.jpg"></p>
        <form id="myForm" method="post" action="../api/update.php">
            <table border="2" align="center" bordercolor="#6666FF">
                <tr>
                    <td colspan="2" bgcolor="#6666FF" align="center">
                        <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*使用者帳號：</td>
                    <td><?= $data["account"];; ?></td>
                    <input type="hidden" id="account" size="15" value="<?= $data["account"]; ?>">
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*使用者密碼：</td>
                    <td>
                        <input type="password" name="password" id="password" size="15" value="<?= $data["password"]; ?>">
                        (請使用英文或數字鍵，勿使用特殊字元)
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*密碼確認：</td>
                    <td>
                        <input type="password" id="re_password" size="15" value="<?= $data["password"]; ?>">
                        (再輸入一次密碼，並記下您的使用者名稱與密碼)
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*姓名：</td>
                    <td><input type="text" name="name" id="real_name" size="8" value="<?= $data["name"]; ?>"></td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*性別：</td>
                    <td>
                        <input type="radio" name="sex" id="sex" value="male" <?= $male_checked; ?>>男
                        <input type="radio" name="sex" id="sex" value="female" <?= $female_checked; ?>>女
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">*生日：</td>
                    <td>民國
                        <input type="text" name="year" id="year" size="2" value="<?= $data["year"]; ?>">年
                        <input type="text" name="month" id="month" size="2" value="<?= $data["month"]; ?>">月
                        <input type="text" name="day" id="day" size="2" value="<?= $data["day"]; ?>">日
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">電話：</td>
                    <td>
                        <input type="text" name="telephone" id="telephone" size="20" value="<?= $data["telephone"]; ?>">
                        (依照 (02) 2311-3836 格式 or (04) 657-4587)
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">行動電話：</td>
                    <td>
                        <input type="text" name="cellphone" id="cellphone" size="20" value="<?= $data["cellphone"]; ?>">
                        (依照 (0922) 302-228 格式)
                    </td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">地址：</td>
                    <td><input type="text" name="address" id="address" size="45" value="<?= $data["address"]; ?>"></td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">E-mail 帳號：</td>
                    <td><input type="text" name="email" id="email" size="30" value="<?= $data["email"]; ?>"></td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">個人網站：</td>
                    <td><input type="text" name="url" id="url" size="40" value="<?= $data["url"]; ?>"></td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td align="right">備註：</td>
                    <td><textarea name="comment" id="comment" rows="4" cols="45"><?= $data["comment"]; ?></textarea></td>
                </tr>
                <tr bgcolor="#99FF99">
                    <td colspan="2" align="CENTER">
                        <input type="hidden" name="id" value=<?= $_SESSION['id']; ?>>
                        <input type="button" value="修改資料" onclick="check_update()">
                        <input type="reset" value="重新填寫">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div align="center">
        <h1></h1>
        <button onclick="goto('../admin.php');">回上一頁</button>
    </div>
</body>

</html>