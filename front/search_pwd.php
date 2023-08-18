<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>查詢密碼</title>
  <script src="../js/jquery-3.7.0.js" defer></script>
  <script src="../js/custom.js" defer></script>
</head>

<body>
  <div>
    <p align="center"><img src="../image/inquire.jpg"></p>
    <p align="center">請輸入您的姓名及 E-mail 帳號，並選擇一種顯示方式，然後按 [查詢] 鈕。</p>
    <form method="post" action="search.php" id="myForm">
      <table align="center">
        <tr>
          <td>帳號：</td>
          <td><input type="text" name="account" id="account_input" size="10"></td>
        </tr>
        <tr>
          <td>電子郵件帳號：</td>
          <td><input type="text" name="email" id="email" size="30"></td>
        </tr>
        <tr>
          <td>顯示方式：</td>
          <td>
            <select name="show_method">
              <option value="網頁顯示">網頁顯示</option>
              <!-- <option value="E-mail 傳送">E-mail 傳送</option> -->
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="查詢" onclick="search_pwd()">　
            <input type="reset" value="重填">
          </td>
        </tr>
      </table>
    </form>
  </div>
  <div align="center">
    <table align="center">
      <tr align="left">
        <td>
          <h3 id="title" style="display:none">您好，您的帳號資料如下 : </h3>
        </td>
      </tr>
      <tr>
        <td>
          <h3 id="account_display" style="display:none">帳號 : </h3>
        </td>
      </tr>
      <tr>
        <td>
          <h3 id="password" style="display:none">密碼 : </h3>
        </td>
      </tr>
    </table>
    <td> <button onclick="goto('../index.php')">回去首頁</button>
    </td>
  </div>
</body>

</html>