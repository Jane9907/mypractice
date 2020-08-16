
//在全局定义验证码
var code;
var n=6;
function createCode(n){//参数n表示要指定的位数
    code="";
    //获取用于存放随机生成的验证码的文本框
    var checkCode=document.getElementById("checkCode");
    //创建一个数组，用于存放所有候选组成验证码的字符，当然也可以用中文的
    var sourceStr=new Array(1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    for (var i=0; i<n; i++) {
//产生随机数，用来从字符串数组中选取n位字符作为验证码
        var charIndex=Math.floor(Math.random()*62);
        //n位字符生成验证码字符串
        code+=sourceStr[charIndex];
    }
    //alert(code);
    if (checkCode){
        //设置或返回元素的class属性
        checkCode.className="code";
        checkCode.value=code;
    }
}


    function validate(){
        var inputCode = document.getElementById("input1").value.toUpperCase();
        var codeToUp=code.toUpperCase();
        if(inputCode.length<=0){
            alert("请输入验证码！");
            return false;
        }
        else if(inputCode != codeToUp){
            alert("验证码输入错误！");
            createCode(n);
            return false;
        }
        else{
            alert("输入正确，输入的验证码为："+inputCode);
            return true;
        }
    }

function checkPass()
{
    if(pass==""||pass==null){
        pass1="请输入密码！";
        document.getElementById("pass").style.background="#F00";
    }else if(pass.length>16||pass.length<6) pass1="密码名应为6-16个字符，请重新输入！";
    if(pass1.length!=0){
        document.getElementById("pass1").innerHTML=pass1.fontcolor("#FF0000").bold();
        //document.getElementById("pass").focus();
        return false;
    }else{
        document.getElementById("pass").style.background="white";
        document.getElementById("pass1").innerHTML="";
        return true;
    }
}
function checkPassword()
{
    if(password==""||password==null){
        password1="请输入确认密码！";
        document.getElementById("password").style.background="#F00";
    }else if(password.length>16||password.length<6) password1="确认密码名应为6-16个字符，请重新输入！";
    else if(password!=pass)password1="确认密码与密码不一致！";
    if(password1.length!=0){
        document.getElementById("password1").innerHTML=password1.fontcolor("#FF0000").bold();
        //document.getElementById("pass").focus();
        return false;
    }else{
        document.getElementById("password").style.background="white";
        document.getElementById("pass").innerHTML="";
        document.getElementById("password1").innerHTML="";
        return true;
    }
}

function setStyle(x){
    document.getElementById(x).style.background="yellow";
}
function loseStyle(x){
    document.getElementById(x).style.background="white";
    var name=document.getElementById(x).value;
    if(name==""||name==null)
        document.getElementById(x+"1").innerHTML="请输入内容！".foncolor("#FF0000").bold();
}
