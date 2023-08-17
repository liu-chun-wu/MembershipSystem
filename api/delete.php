<head>
    <script src="../js/jquery-3.7.0.js" defer></script>
    <script src="../js/custom.js" defer></script>
</head>

<body>
    <div align="center">
        <img src="../image/erase.jpg">
    </div>
    <?
    include_once "../dbsetting.php";
    $member = new DB('users');
    $member->deleteById($_SESSION['id']);
    unset($_SESSION['id']);
    ?>
    <div align="center">
        <button onclick="goto('../index.php')">回到首頁</button>
    </div>
</body>