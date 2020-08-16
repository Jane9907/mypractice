// JavaScript Document

<!--改变图片边框-->
function borderit(which,color){
if (document.all||document.getElementById){
which.style.borderColor=color
}
}
<!--消息轮播-->
var area=document.getElementById('Box');
var con1=document.getElementById('con1');
var con2=document.getElementById('con2');
con2.innerHTML=con1.innerHTML;
//Element.scrollTop属性：获取或设置一个元素的内容垂直滚动的像素数
function scrollup(){
if(area.scrollTop>=con1.offsetHeight){
	area.scrollTop=0
}else{
	area.scrollTop++;}
}
var time=50;
var myScroll=setInterval('scrollup()',time);
area.onmouseover=function(){
clearInterval(myScroll);
}
area.onmouseout=function(){
	myScroll=setInterval('scrollup()',time);
	//setInterval('scrollup()',time);
}
