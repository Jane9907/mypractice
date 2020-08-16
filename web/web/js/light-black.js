function ShowDiv(show_div,bg_div){
document.getElementById(show_div).style.display='block';
document.getElementById(bg_div).style.display='block' ;
var bgdiv = document.getElementById(bg_div);
bgdiv.style.width = document.body.scrollWidth;
// bgdiv.style.height = $(document).height();
$("#"+bg_div).height($(document).height());
};
//关闭弹出层
function CloseDiv(show_div,bg_div)
{
document.getElementById(show_div).style.display='none';
document.getElementById(bg_div).style.display='none';
};
window.onload = function (){
    var myDiv = document.getElementById("MyDiv");
    var move = document.getElementById("move");
    var bDrag = false;
    var disX = disY = 0;
    
    move.onmousedown = function (event){
        var event = event || window.event;
        bDrag = true;
        disX = event.clientX - myDiv.offsetLeft;
        disY = event.clientY - myDiv.offsetTop;
        this.setCapture && this.setCapture();
        return false;
    };
    document.onmousemove = function (event){
        if (!bDrag) return;
        var event = event || window.event;
        var iL = event.clientX - disX;
        var iT = event.clientY - disY;
        var maxL = document.documentElement.clientWidth - myDiv.offsetWidth;
        var maxT = document.documentElement.clientHeight - myDiv.offsetHeight;
        iL = iL < 0 ? 0 : iL;
        iL = iL > maxL ? maxL : iL;
        iT = iT < 0 ? 0 : iT;
        iT = iT > maxT ? maxT : iT;
        myDiv.style.marginTop = myDiv.style.marginLeft = 0;
        myDiv.style.left = iL + "px";
        myDiv.style.top = iT + "px";
        return false;
    };
    document.onmouseup = window.onblur = move.onlosecapture = function (){
        bDrag = false;
        move.releaseCapture && move.releaseCapture();
    };
}