<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>會員管理系統</title>
  <script src="js/jquery-3.7.0.js" defer></script>
  <script src="js/custom.js" defer></script>
</head>

<body>
  <p align="center"><img src="image/member.jpg"></p>
  <pre align="center">
  歡迎來到本站，您必須加入成為本站的會員，才有權限使用本站的功能
  若您已經擁有帳號，請輸入您的帳號及密碼，然後按 [登入] 鈕
  若尚未成為本站會員，請點按 [加入會員] 超連結
  若您忘記自己的帳號及密碼，請點按 [查詢密碼] 超連結
  </pre>
  <form action="api/login.php" method="post" id="myForm">
    <table width="40%" align="center">
      <tr>
        <td align="center">
          <font color="#3333FF">帳號：</font>
          <!--如果要檢查空白可以在input中用require或是使用Js函式來判斷-->
          <input name="account" id='account' type="text" size="15" required>
        </td>
      </tr>
      <tr>
        <td align="center">
          <font color="#3333FF">密碼：</font>
          <input name="password" id='password' type="password" size="15" required>
        </td>
      </tr>
      <tr>
        <td align="center">
          <input type="button" value="登入" onclick="check_login()">
          <input type="reset" value="重填">
        </td>
      </tr>
    </table>
  </form>
  <p align="center">
    <a href="front/join.php">加入會員</a>　
    <a href="front/search_pwd.php">查詢密碼</a>
  </p>
  <div>
    <h2 id="wrong_message" align="center" style="color:red"></h2>
  </div>
</body>

</html>