// JavaScript Document
var/*类型*/ video=document.getElementById("video");
	alert(video);
	var playProgress = document.getElementById("playProgress");
	
	function progress() {
 		document.getElementById("progress").innerHTML="视频时长："+video.duration+"秒";
		//setInterval(video.currentTime,60);
		document.getElementById("playProgress").innerHTML="当前时间："+video.currentTime+"秒";
	}
	
	function play()
	{
		video.play();	
	}
	
	function playpause(obj){
		if(video.paused){
			video.play();
			obj.value="暂停";
			
		}else{
			video.pause();
			obj.value="播放";
	
		}
	}
	function stop()
	{
		video.pause();	
	}
	function forward()
	{
		video.currentTime+=10;/*属性*/
	}
	function backward()
	{
		video.currentTime-=10;
	}
    function muted(obj)
	{
		if(video.muted){
			obj.value="语音关闭";
			video.muted=false;
		}else{
			obj.value="语音打开";
			video.muted=true;	
		}
	}
	
	function fast()
	{
		video.playbackRate=2.0;
		/*playbackRate速度
			1.0 正常速度
			0.5 半速（更慢）
			2.0 倍速（更快）
			-1.0 向后，正常速度
			-0.5 向后，半速
		*/	
	}
	function slow()
	{
		video.playbackRate=1/3;
	}
	
	function makeBig()
	{ 
	video.width=video.width+50; 
	} 
	
	function makeSmall()
	{ 
	video.width-=50; 
	} 
	
	function makeNormal()
	{ 
	video.width=800; 
	} 
	function upvolume(){
		video.volume=0.8;}
	function slowvolume(){
		video.volume=1.2;
		
		}
	