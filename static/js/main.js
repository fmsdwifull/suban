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

function searchByKey()
{
	var searchContent = document.getElementById("key").value;
	var url ="";
	if(searchContent.indexOf('速办网')!=-1 || searchContent.indexOf('云光纤')!=-1){
		url="home.html";
	}else if(searchContent.indexOf('活动')!=-1 || searchContent.indexOf('一元')!=-1 || searchContent.indexOf('续租')!=-1){
		url="huod.html";
	}else if(searchContent.indexOf('战狼')!=-1 || searchContent.indexOf('计划')!=-1 || searchContent.indexOf('升级')!=-1){
		url="huod.html";
	}else if(searchContent.indexOf('营销')!=-1 || searchContent.indexOf('整合')!=-1 || searchContent.indexOf('品牌')!=-1|| searchContent.indexOf('视觉')!=-1){
		url="wangl.html";
	}else if(searchContent.indexOf('行业')!=-1 || searchContent.indexOf('专属')!=-1 || searchContent.indexOf('数据')!=-1 || searchContent.indexOf('专线')!=-1|| searchContent.indexOf('资费')!=-1|| searchContent.indexOf('套餐')!=-1){
		url="hangy.html";
	}else if(searchContent.indexOf('会展')!=-1 ){
		url="zscp-hzkd.html";
	}else if(searchContent.indexOf('公寓')!=-1 ){
		url="zscp-gykd.html";
	}else if(searchContent.indexOf('海外')!=-1 ||searchContent.indexOf('优化')!=-1){
		url="zscp-hwyh.html";
	}else if(searchContent.indexOf('资源')!=-1 ||searchContent.indexOf('查询')!=-1){
		url="ziyuancx.html";
	}else if(searchContent.indexOf('速办')!=-1 ||searchContent.indexOf('办理')!=-1||searchContent.indexOf('流程')!=-1){
		url="subanlc.html";
	}else if(searchContent.indexOf('IT')!=-1 ||searchContent.indexOf('it')!=-1||searchContent.indexOf('外包')!=-1){
		url="itwb.html";
	}else if(searchContent.indexOf('电脑')!=-1 ||searchContent.indexOf('闪修')!=-1||searchContent.indexOf('设备')!=-1||searchContent.indexOf('检修')!=-1||searchContent.indexOf('网络')!=-1||searchContent.indexOf('病毒')!=-1){
		url="itw.html";
	}else if(searchContent.indexOf('驻场')!=-1 ){
		url="itzc.html";
	}else if(searchContent.indexOf('全国范围')!=-1 ||searchContent.indexOf('案例')!=-1){
		url="itqg.html";
	}else  if(searchContent.indexOf('电信')!=-1 || searchContent.indexOf('宽带')!=-1||searchContent.indexOf('企业')!=-1 || searchContent.indexOf('通信')!=-1){
		url="qiytx.html";
	}else if(searchContent.indexOf('联通')!=-1 ){
		url="liant.html";
	}else if(searchContent.indexOf('移动')!=-1 ){
		url="yid.html";
	}else if(searchContent.indexOf('鹏博士')!=-1 ){
		url="pengbs.html";
	}
	window.location.href = url;		
}

function opensem()
{
	window.location.href="sem-qykd.html";
}		
function openhome()
{
	window.location.href="home.html";
}

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?fb3de737644b93d7adee45eec3ed56e5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
