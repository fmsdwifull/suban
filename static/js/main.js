function over1(id)
{
	if(id=="tel")
	{
		$("#li_0").hide();//隐藏
		$("#li_1").show();//隐藏	
		$("#li_2").hide();//隐藏		
	}	
	if(id=="email")
	{
		$("#li_0").hide();//隐藏
		$("#li_1").hide();//隐藏	
		$("#li_2").show();//隐藏		
	}			
}

function out2(id)
{
    if(id=="tel")
	{
		$("#li_0").show();//隐藏
		$("#li_1").hide();//隐藏
		$("#li_2").hide();//隐藏
	} 
}
function out3(id)
{
    if(id=="email2")
	{
		$("#li_0").show();//隐藏
		$("#li_1").hide();//隐藏
		$("#li_2").hide();//隐藏
	} 
}

/*
function over(id){
	//$('#navtel').src=;
	if(id=="tel")
	{
		$("#navtel").attr("src","./static/img/web/home/导航_电话_.png");
		$("#navtel").attr("width","100px");
		$("#navtel").attr("height","30px");
	}
	if(id=="email")
	{
		$("#navmail").attr("src","./static/img/web/home/导航_邮箱_.png");
		$("#navmail").attr("width","140px");
		$("#navmail").attr("height","30px");
	}		
	var kong = document.getElementById('kong');
	var id =  document.getElementById(id);
	kong.style.width = '2%';
	id.style.width = '11.5%';
}
function out(id){
	if(id=="tel")
	{	
		$("#navtel").attr("src","./static/img/web/home/导航_电话.png");	
		// $("#navtel").attr("width","150px");
		$("#navtel").attr("width","100%");
	}
	if(id=="email")
	{	
		$("#navmail").attr("src","./static/img/web/home/导航_邮箱.png");	
		// $("#navmail").attr("width","150px");
		$("#navmail").attr("width","100%");
		$("#navmail").attr("height","28px");

	}	
	var kong = document.getElementById('kong');
	var id =  document.getElementById(id);
	kong.style.width = '10%';
	id.style.width = '3.5%';
}
*/

function over_bj(id){
    // var kong = document.getElementById('sd1');
    // kong.style.backgroundImage  ='./static/img/web/home/赛道01_.jpg';
    //
    $("#sd").css("background-image","static/img/web/home/banner.png");
}

function telover()
{
	$('#showtelid').html("免费咨询&nbsp;&nbsp;<span style='font-family:GOTHIC;'>400-820-7778</span>");
}
function telout()
{
	$('#showtelid').html("");
}	  
function smb() {
	$.ajax({
		//几个参数需要注意一下
		type: "POST",//方法类型
		//dataType: "json",//预期服务器返回的数据类型
		url: "http://www.cloud-open.cn/client.php?c=feedback&a=getClientInfo",//url
		//data: $(form[name=dd]).serialize(),
		data:"xxxd",
		success: function (result) {
			alert(result);
		},
		error: function () {
			alert("异常！");
		}
	})
}		
function setCheckState(obj)
{
	if(obj.value==0)
	{
		obj.src="../static/img/web/system/checked.png";
		obj.value=1;
	}else{
		obj.src="../static/img/web/system/unchecked.png";
		obj.value=0;
	}
}