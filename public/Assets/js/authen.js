var validation = {
    listID: [
        ".login_username",
        ".login_password",
        ".register_username",
        ".register_password",
        ".register_password-confirm",
    ],
};

isRequired(validation.listID);

//kiem tra du lieu co ton tai hay khong khi blur
function Required(selectorElement) {
    return selectorElement.value == "" ? true : false;
}

function isRequired(arr) {
    arr.forEach((selector) => {
        var selectorElement = document.querySelector(selector) || null;
        if (selectorElement == null) return;
        var notification = document.querySelector(selector + "+p");

        // trường hợp blur
        selectorElement.onblur = function () {
            //input chứa dữ liệu
            if (!Required(selectorElement)) {
                selectorElement.className = selectorElement.className.replace(
                    "unvalid",
                    ""
                );
                notification.innerText = "";
                //kiểm tra dữ liệu
                check(selector);
            }
            //truong hợp chưa có dữ liệu nhập vào
            else {
                unvalid(selectorElement, notification);
            }
        };
        // trường hợp focus lai
        selectorElement.onfocus = function () {
            selectorElement.className = selectorElement.className.replace(
                "unvalid",
                " "
            );
            notification.innerText = "";
        };
    });
}
function unvalid(selectorElement, notification) {
    for (var i = 0; i < selectorElement.classList.length; i++) {
        if (selectorElement.classList[i] === "unvalid") {
            notification.innerText = "Vui lòng nhập thông tin";
            return;
        }
    }
    selectorElement.className += " unvalid";
    notification.innerText = "Vui lòng nhập thông tin";
}

function check(selector) {
    var selectorElement = document.querySelector(selector);
    if (selectorElement == null) return false;
    var notification = document.querySelector(selector + "+p");
    if (Required(selectorElement)) {
        unvalid(selectorElement, notification);
        return false;
    }
    //xét trường hợp nhập sai username
    //username :Kí tự đầu tiên là chữ và độ dài lớn hơn 6
    if (selector === ".login_username" || selector === ".register_username") {
        if (
            selectorElement.value.length < 4 ||
            (selectorElement.value.charCodeAt(0) >= 48 &&
                selectorElement.value.charCodeAt(0) <= 57)
        ) {
            for (var i = 0; i < selectorElement.classList.length; i++) {
                if (selectorElement.classList[i] === "unvalid") return;
            }
            selectorElement.className += " unvalid";
            notification.innerText =
                "Tài khoản không hợp lệ! Vui lòng nhập lại";
            return false;
        }
    }

    //xét trường hợp nhập sai pass
    //password: Kí tự đầu tiên là chữ và viết hoa và độ dài lớn hơn 6

    if (selector === ".login_password" || selector === ".register_password") {
        if (
            selectorElement.value.length < 4 ||
            !(
                selectorElement.value.charCodeAt(0) >= 65 &&
                selectorElement.value.charCodeAt(0) <= 90
            )
        ) {
            for (var i = 0; i < selectorElement.classList.length; i++) {
                if (selectorElement.classList[i] === "unvalid") return;
            }
            selectorElement.className += " unvalid";
            notification.innerText = "Mật khẩu không hợp lệ! Vui lòng nhập lại";
            return false;
        }
    }
    //xét trường hợp nhập sai passconfirm
    if (selector === ".register_password-confirm") {
        var valuepass = document.querySelector(".register_password").value;
        if (selectorElement.value !== valuepass) {
            for (var i = 0; i < selectorElement.classList.length; i++) {
                if (selectorElement.classList[i] === "unvalid") return;
            }
            selectorElement.className += " unvalid";
            notification.innerText =
                "Mật khẩu không giống nhau! Vui lòng nhập lại";
            return false;
        }
    }
    return true;
}
document.querySelector(".form-register") &&
    document
        .querySelector(".form-register")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            var send = false;
            validation.listID.forEach((selector) => {
                check(selector) ? (send = true) : (send = false);
            });
            if (send) {
                e.target.submit();
                send = false;
            }
        });
document.querySelector(".form-login") &&
    document
        .querySelector(".form-login")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            var send = true;
            for(var i = 0; i < 2; i++){
                //tìm các class của form-login để lấy selector
                !check("."+this.children[1][i].classList[1]) && (send = false) 
            }
            if (send) {
                e.target.submit();
                send = false;
            }
        });
