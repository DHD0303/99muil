var oUsername = document.getElementById("username"),
    oZh = document.getElementById("zh"),
    oPassword = document.getElementById("password"),
    oMm = document.getElementById("mm");
function account() {
    oZh.innerHTML = "";
    var acco = oUsername.value;
    var i, len, flag = -1;
    len = acco.length;
    for (var i = 0; i < len; i++) {
        if (acco[i] == " ") {
            oZh.innerHTML = "请输入正确的邮箱或手机号";
            flag = 3;
        }
    }
    if (len == 11) {
        for (i = 0; i < 11; i++) {
            if (isNaN(acco[i])) {
                flag = 0;
            }
        }
    } else {
        flag = 0;
    }
    if (flag == 0) {
        len--;
        for (i = 1; i < len; i++) {
            if (acco[i] == "@") {
                flag = 1;
                i++;
            }
            if (flag) {
                if (acco[i] == ".") {
                    flag = 2;
                }
            }
        }
    }
    if (flag == 0 || flag == 1 || flag == 3) {
        oZh.innerHTML = "请输入正确的邮箱或手机号";
        return false;
    } else {
        return true;
    }
}

function mmyz() {
    oMm.innerHTML = "";
    var mm = oPassword.value;
    var len = mm.length;
    if (len < 6 || len > 16) {
        oMm.innerHTML = "请输入6-16位密码，区分大小写，不能使用空格！";
        return false;
    } else {
        for (var i = 0; i < len; i++) {
            if (mm[i] == " ") {
                oMm.innerHTML = "请输入6-16位密码，区分大小写，不能使用空格！";
                return false;
            }
        }
    }

    return true;
}

function login() {
    if (account() && mmyz()) {
        //       oAlertt.style.display = "block";
        return true;
    } else {
        return false;
    }
}

/*function close1() {
    oAlertt.style.display = "none";
    oUsername.value = "";
    oPassword.value = "";
}
*/