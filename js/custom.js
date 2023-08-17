function check_empty() {
    $(document).ready(function () {
        if ($('#account').val().length == 0) {
            alert("帳號欄位不可以空白！");
        } else if ($('#password').val().length == 0) {
            alert("密碼欄位不可以空白！");
        } else {
            check_correct();
        }
    })
}
function check_correct() {
    $(document).ready(function () {
        var data = {
            "account": "1",
            "password": "1"
        }
        $.ajax({
            url: "api/search_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: 'application/json',
            dataType: "json",
            success: function (response) {
                //JSON.parse(response);
                alert(response);
                if (response == "correct") {
                    alert('帳號密碼正確!!!')
                } else {
                    alert('帳號密碼錯誤!!!')
                }
            },
            error: function () {
                alert('傳送失敗');
            }
        });
    })
}