
var code;
function createCode(n){//参数n表示验证码的字符个数
 code="";  //每次在产生验证码之前，验证码字符串清空
   //获取用于存放随机生成的验证码的文本框对象
  var checkCode =document.getElementById("checkCode");
 //创建一个数组，自定义所有候选组成验证码的字符，当然也可以用中文的
  var sourceStr= new Array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','大','X','Y','Z');
  //从字符串数组中随机选取n个字符作为验证码，注意通过随机函数确定n个下标来选取  
  for (var i=0; i<n; i++){
//每次通过随机函数循环选取一个下标（即获取一个0~length-1的自然整数），共选取n个;    
var charIndex=Math.floor(Math.random()*sourceStr.length);    //选取的n个字符，组合生成验证码字符串
    code+=sourceStr[charIndex];
  }


//如果页面上验证码文本框对象存在，则修改其的类样式
  if (checkCode){
	 //设置元素的className属性（即类样式） 
    checkCode.className="code";
    checkCode.value=code;//在页面上的验证码文本框中显示验证码
 }
}

function validate(){
//先获取页面上文本框中输入的验证码
var inputcode=document.getElementById("check").value.toUpperCase();//toUpperCase() 方法用于把字符串转换为大写
    var changecode=code.toUpperCase();
    if(inputcode==""||inputcode==null){
	alert("请输入验证码");
	return false;
	}
	else if(inputcode!==changecode){	
     alert("输入验证码错误");
	 createCode(4);
	 document.getElementById("check").value="";
	 return false;
     }
	else{
	 alert("输入正确");
     return true;
}
}
window.onload=function(){
  createCode(4);

   }
