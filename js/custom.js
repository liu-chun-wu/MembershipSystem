function goto(x) {
    location.href = x;
}
function check_login() {
    $(document).ready(function () {
        if ($('#account').val().length == 0) {
            $("#wrong_message").text("帳號欄位不可以空白！");
            return;
        } else if ($('#password').val().length == 0) {
            $("#wrong_message").text("密碼欄位不可以空白！");
            return;
        }
        var data = {
            "account": $('#account').val(),
            "password": $('#password').val()
        }
        $.ajax({
            url: "api/check_correct_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            /*
            使用Ajax庫（如jQuery或axios）發送請求並從服務器收到回應時，回應數據已經被轉換成JavaScript對象（或數組）。
            不需要手動將回應數據轉換為JavaScript對象，因為這是函式庫的默認行為
            函式庫會根據回應的Content-Type（通常為application/json）自動解析回應數據並將其轉換為JavaScript對象。
            舉例來說，下面function中回傳的參數'response'已經被轉換成javascript物件了
            */
            success: function (response) {
                /*
                Note :        
                response["message"] 的寫法等同於 response.message
                兩個都是Javascript中 '物件'的用法，不是關聯式陣列!!!，不是關聯式陣列!!!，不是關聯式陣列!!!
                Javascript 沒有關聯式陣列!!
                */
                if (response['message'] == "correct") {
                    alert('帳號密碼正確');
                    myForm.submit();
                } else {
                    alert('帳號密碼錯誤');
                    return;
                }
            },
            error: function () {
                alert('傳送失敗');
                return;
            }
        });
    })
}
function check_join() {
    $(document).ready(function () {
        if ($("#account").val().length == 0) {
            alert("「使用者帳號」一定要填寫哦...");
            return;
        } else if ($("#account").val().length > 10) {
            alert("「使用者帳號」不可以超過 10 個字元哦...");
            return;
        } else if ($("#password").val().length == 0) {
            alert("「使用者密碼」一定要填寫哦...");
            return;
        } else if ($("#password").val().length > 10) {
            alert("「使用者密碼」不可以超過 10 個字元哦...");
            return;
        } else if ($("#re_password").val().length == 0) {
            alert("「密碼確認」欄位忘了填哦...");
            return;
        } else if ($("#password").val() != $("#re_password").val()) {
            alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
            return;
        } else if ($("#real_name").val().length == 0) {
            alert("您一定要留下真實姓名哦！");
            return;
        } else if ($("#year").val().length == 0) {
            alert("您忘了填「出生年」欄位了...");
            return;
        } else if ($("#month").val().length == 0) {
            alert("您忘了填「出生月」欄位了...");
            return;
        } else if ($("#month").val() > 12 || $("#month").val() < 1) {
            alert("「出生月」應該介於 1-12 之間哦！");
            return;
        } else if ($("#day").val().length == 0) {
            alert("您忘了填「出生日」欄位了...");
            return;
        } else if ($("#day").val() < 1 || $("#day").val() > 31) {
            alert("出生日應該在 1-31 之間");
            return;
        } else if ($("#month").val() == 2 & $("#day").val() > 29) {
            alert("二月只有 28 天，最多 29 天");
            return;
        } else if ($("#month").val() == 4 || $("#month").val() == 6 || $("#month").val() == 9 || $("#month").val() == 11) {
            if ($("#day").val() > 30) {
                alert("4 月、6 月、9 月、11 月只有 30 天哦！");
                return;
            }
        } else {
            if ($("#day").val() > 31) {
                alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
                return;
            }
        }
        var data = {
            "account": $('#account').val(),
        }
        $.ajax({
            url: "../api/check_exist_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
                if (response['message'] == "already exist") {
                    alert('此帳號已經存在');
                    return;
                } else {
                    myForm.submit();
                }
            },
            error: function () {
                alert('傳送失敗');
                return;
            }
        });

    });
}
function check_update() {
    $(document).ready(function () {
        if ($("#account").val().length == 0) {
            alert("「使用者帳號」一定要填寫哦...");
            return;
        } else if ($("#account").val().length > 10) {
            alert("「使用者帳號」不可以超過 10 個字元哦...");
            return;
        } else if ($("#password").val().length == 0) {
            alert("「使用者密碼」一定要填寫哦...");
            return;
        } else if ($("#password").val().length > 10) {
            alert("「使用者密碼」不可以超過 10 個字元哦...");
            return;
        } else if ($("#re_password").val().length == 0) {
            alert("「密碼確認」欄位忘了填哦...");
            return;
        } else if ($("#password").val() != $("#re_password").val()) {
            alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
            return;
        } else if ($("#real_name").val().length == 0) {
            alert("您一定要留下真實姓名哦！");
            return;
        } else if ($("#year").val().length == 0) {
            alert("您忘了填「出生年」欄位了...");
            return;
        } else if ($("#month").val().length == 0) {
            alert("您忘了填「出生月」欄位了...");
            return;
        } else if ($("#month").val() > 12 || $("#month").val() < 1) {
            alert("「出生月」應該介於 1-12 之間哦！");
            return;
        } else if ($("#day").val().length == 0) {
            alert("您忘了填「出生日」欄位了...");
            return;
        } else if ($("#day").val() < 1 || $("#day").val() > 31) {
            alert("出生日應該在 1-31 之間");
            return;
        } else if ($("#month").val() == 2 & $("#day").val() > 29) {
            alert("二月只有 28 天，最多 29 天");
            return;
        } else if ($("#month").val() == 4 || $("#month").val() == 6 || $("#month").val() == 9 || $("#month").val() == 11) {
            if ($("#day").val() > 30) {
                alert("4 月、6 月、9 月、11 月只有 30 天哦！");
                return;
            }
        } else {
            if ($("#day").val() > 31) {
                alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
                return;
            }
        }
        myForm.submit();
    });
}
function serach_pwd() {
    $(document).ready(function () {
        var data = {
            "account": $('#account').val(),
        }
        $.ajax({
            url: "../api/search_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
            },
            error: function () {
                alert('傳送失敗');
                return;
            }
        });
    })
}
/*
function check_empty() {
    $(document).ready(function () {
        if ($('#account').val().length == 0) {
            $("#wrong_message").text("帳號欄位不可以空白！");
            return;
        } else if ($('#password').val().length == 0) {
            $("#wrong_message").text("密碼欄位不可以空白！");
            return;
        }
    })
}
*/
/*
function check_correct() {
    $(document).ready(function () {
        var data = {
            "account": $('#account').val(),
            "password": $('#password').val()
        }
        $.ajax({
            url: "api/check_correct_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",

            //使用Ajax庫（如jQuery或axios）發送請求並從服務器收到回應時，回應數據已經被轉換成JavaScript對象（或數組）。
            //不需要手動將回應數據轉換為JavaScript對象，因為這是函式庫的默認行為
            //函式庫會根據回應的Content-Type（通常為application/json）自動解析回應數據並將其轉換為JavaScript對象。
            //舉例來說，下面function中回傳的參數'response'已經被轉換成javascript物件了
            
            success: function (response) {   
                //Note :        
                //response["message"] 的寫法等同於 response.message
                //兩個都是Javascript中 '物件'的用法，不是關聯式陣列!!!，不是關聯式陣列!!!，不是關聯式陣列!!!
                //Javascript 沒有關聯式陣列!!

                if (response['message'] == "correct") {
                    alert('帳號密碼正確');
                    myForm.submit();
                } else {
                    alert('帳號密碼錯誤');
                    return;
                }
            },
            error: function () {
                alert('傳送失敗');
            }
        });
    })
}
*/
/*
function check_already_exist() {
    $(document).ready(function () {
        var data = {
            "account": $('#account').val(),
        }
        $.ajax({
            url: "../api/check_exist_pwd.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (response) {
                if (response['message'] == "already exist") {
                    alert('此帳號已經存在');
                    return;
                } else {
                    myForm.submit();
                }
            },
            error: function () {
                alert('傳送失敗');
            }
        });
    })
}
*/
/*
function check_data() {
    $(document).ready(function () {
        if ($("#account").val().length == 0) {
            alert("「使用者帳號」一定要填寫哦...");
            return;
        } else if ($("#account").val().length > 10) {
            alert("「使用者帳號」不可以超過 10 個字元哦...");
            return;
        } else if ($("#password").val().length == 0) {
            alert("「使用者密碼」一定要填寫哦...");
            return;
        } else if ($("#password").val().length > 10) {
            alert("「使用者密碼」不可以超過 10 個字元哦...");
            return;
        } else if ($("#re_password").val().length == 0) {
            alert("「密碼確認」欄位忘了填哦...");
            return;
        } else if ($("#password").val() != $("#re_password").val()) {
            alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
            return;
        } else if ($("#real_name").val().length == 0) {
            alert("您一定要留下真實姓名哦！");
            return;
        } else if ($("#year").val().length == 0) {
            alert("您忘了填「出生年」欄位了...");
            return;
        } else if ($("#month").val().length == 0) {
            alert("您忘了填「出生月」欄位了...");
            return;
        } else if ($("#month").val() > 12 || $("#month").val() < 1) {
            alert("「出生月」應該介於 1-12 之間哦！");
            return;
        } else if ($("#day").val().length == 0) {
            alert("您忘了填「出生日」欄位了...");
            return;
        } else if ($("#day").val() < 1 || $("#day").val() > 31) {
            alert("出生日應該在 1-31 之間");
            return;
        } else if ($("#month").val() == 2 & $("#day").val() > 29) {
            alert("二月只有 28 天，最多 29 天");
            return;
        } else if ($("#month").val() == 4 || $("#month").val() == 6 || $("#month").val() == 9 || $("#month").val() == 11) {
            if ($("#day").val() > 30) {
                alert("4 月、6 月、9 月、11 月只有 30 天哦！");
                return;
            }
        } else {
            if ($("#day").val() > 31) {
                alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
                return;
            }
        }
    });
}
*/
