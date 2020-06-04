//前端检验数据格式
var userName = document.getElementById("userName");
var userUrl = document.getElementById('userUrl');
var userDonate = document.getElementById('userDonate');
var payWay = document.getElementById('payWay');
var btn = document.getElementById('btn');

btn.addEventListener('click', function () {
    if (userName.value.length > 15) {
        userName.value="";
        warnRes("用户名过长");
      	return;
    } else if(userName.value.length == 0){
		userName.value="";
		warnRes("用户名不能为空");
      	return;
    }else if (parseFloat(userDonate.value) > 9999.99 || parseFloat(userDonate.value) < 0.01 || userDonate.value=="") {
        userDonate.value="";
        warnRes("打赏金额(0~9999.99)");
      	return;
    } else if ((payWay.value != "微信") && (payWay.value != "支付宝")) {
        payWay.value="";
        warnRes("打赏方式有误");
      	return;
    }else{
        submit_form.action="regist.php";
        submit_form.method="post";
        submit_form.target="nm_iframe";
        submit_form.submit();
    }
});


const container = document.getElementById('container');
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');

signUpButton.onclick = function () {
    container.classList.add('penal-right-active');
}

signInButton.onclick = function () {
    self.location = 'https://xingjiahui.top/donate';
}

function warnRes(res) {
    swal(
        res,
        '请检查数据格式！',
        'warning'
    );
}

function errorRes(res) {
    swal(
        res,
        '请按上面提示操作！',
        'error'
    );
}

function successRes(res) {
    swal(
        res,
        '感谢您的支持！',
        'success'
    );
}




















