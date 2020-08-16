/**
 * Created by Administrator on 2018/11/28 0028.
 */
$("#ysmm").blur(function(){ysmm();});
$("#xmm").keyup(function(){xmm();});
function ysmm(){
    var a = true;
    var ysmm = $("#ysmm").val();

    if(ysmm==""){
        $("#ysmmts").html("您输入的原始密码为空！");
        a = false;
    }
    else{
        $.ajax({
            async:false,
            url:"ysmm.php",
            data:{ysmm:ysmm},
            type:"POST",
            dataType:"TEXT",
            success:function(data){
                if(data.trim()==0)
                {
                    $("#ysmmts").html("");
                }
                else if(data.trim()==1)
                {
                    $("#ysmmts").html("您输入的原始密码有误！");

                    a = false;
                }
            }
        })
    }
    return a;

}
function xmm(){
    var xmm = $("#xmm").val();
    var b = true;
    $.ajax({
        async:false,
        url:"xmm.php",
        data:{xmm:xmm},
        type:"POST",
        dataType:"TEXT",
        success:function(data){
            //alert(data);
            if(data.trim()==0)
            {
                $("#xmmts").html("您输入的新密码弱爆啦！换一个吧");
                b = false;
            }
            else if(data.trim()==1)
            {
                $("#xmmts").html("您输入的新密码强度强强强！");
            }
            else if(data.trim()==2)
            {
                $("#xmmts").html("您输入的新密码强度强！");
            }
            else if(data.trim()==3)
            {
                $("#xmmts").html("您输入的新密码强度中！");
            }
            else if(data.trim()==4)
            {
                $("#xmmts").html("您输入的新密码强度中！");
            }
            else if(data.trim()==5)
            {
                $("#xmmts").html("您输入的新密码强度弱！");
            }

        }

    });
    return b;
}

//修改密码的确认修改按钮的对应事件
$("#qrxg").click(function(){
    var qrxmm = $("#qrxmm").val();
    var xmm1 = $("#xmm").val();
    var ysmm1 = $("#ysmm").val();

    if(xmm1 != qrxmm)
    {
        $("#qrxmmts").html("您输入的新密码不一致！");
        return false;
    }
    if(xmm1=="" && ysmm1=="")
    {
        $("#ysmmts").html("您输入的原始密码为空！");
        $("#xmmts").html("您输入的新密码为空！");
        return false;
    }
    else if(xmm1=="" || ysmm1=="" )
    {
        if(xmm1=="")
        {
            $("#xmmts").html("您输入的新密码为空！");
            return false;
        }
        else if(ysmm1=="")
        {
            $("#ysmmts").html("您输入的原始密码为空！");
            return false;
        }
    }
    else if(xmm1==ysmm1)
    {

        $("#xmmts").html("您输入的新密码与原始密码相同！");
        return false;
    }
    else if(ysmm() && xmm())
    {
        return true;
    }
    else
    {
        return false;
    }

});
