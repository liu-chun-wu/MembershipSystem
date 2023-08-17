<!DOCTYPE html>
<html>

<head>
  <title>加入會員</title>
  <meta charset="utf-8">
  <script src="../js/jquery-3.7.0.js" defer></script>
  <script src="../js/custom.js" defer></script>
</head>

<body>
  <div>
    <p align="center"><img src="../image/join.jpg"></p>
    <form action="../api/add.php" method="post" id="myForm">
      <table border="2" align="center" bordercolor="#6666FF">
        <tr>
          <td colspan="2" bgcolor="#6666FF" align="center">
            <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*使用者帳號：</td>
          <td><input name="account" id="account" type="text" size="15">
            (請使用英文或數字鍵)</td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*使用者密碼：</td>
          <td><input name="password" id="password" type="password" size="15">
            (請使用英文或數字鍵)</td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*密碼確認：</td>
          <td><input id="re_password" type="password" size="15">
            (再輸入一次密碼)</td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*姓名：</td>
          <td><input name="name" id="real_name" type="text" size="8"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*性別：</td>
          <td>
            <input type="radio" name="sex" id="sex" value="男" checked>男
            <input type="radio" name="sex" id="sex" value="女">女
          </td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">*生日：</td>
          <td>民國
            <input name="year" id="year" type="TEXT" size="2">年
            <input name="month" id="month" type="TEXT" size="2">月
            <input name="day" id="day" type="TEXT" size="2">日
          </td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">電話：</td>
          <td><input name="telephone" id="telephone" type="text" size="20"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">行動電話：</td>
          <td><input name="cellphone" id="cellphone" type="text" size="20"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">地址：</td>
          <td><input name="address" id="address" type="text" size="45"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">E-mail 帳號：</td>
          <td><input name="email" id="email" type="text" size="30"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">個人網站：</td>
          <td><input name="url" id="url" type="text" value="http://" size="40"></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="right">備註：</td>
          <td><textarea name="comment" id="comment" cols="45" rows="3"></textarea></td>
        </tr>
        <tr bgcolor="#99FF99">
          <td align="center" colspan="2">
            <input type="button" value="加入會員" onclick="check_join()">　
            <input type="reset" value="重新填寫">
          </td>
        </tr>
      </table>
    </form>
  </div>
  <div align="center">
    <button onclick="goto('../admin.php');">回上一頁</button>
  </div>
</body>

</html>