<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href='http://www.qqershou.com/Member/Images/Head.css' rel='stylesheet' type='text/css'>
		<link href='http://www.qqershou.com/Member/Images/Index.css' rel='stylesheet' type='text/css'>
		<script language='JavaScript' src='http://www.qqershou.com/Member/User.js'></script>
		<script src="<?php echo JS_URL; ?>jquery-1.7.2.min.js"></script>
	</head>
<body>
<div class="topbar">
<div class="topbarnav">
<div class="bar-right"><a href=""> <?php print_r(session('username'));?></a>&nbsp;&nbsp;用户中心&nbsp;&nbsp;|&nbsp;<a href="<?php echo HOME;?>user/logout">退出</a>&nbsp;</div>
</div></div>
<div class="head"><div class="head-left">
<a href="/" target="_blank" class="logo"><img src="http://www.qqershou.com/Member/images/logo.png" alt=全球二手网></a><span>用户中心</span></div>
<a class="ask-price fr" href="/Member/User_ClassADD?Action=Add" title="发布信息" target="_blank">发布信息</a><a class="ask-xianzhi fr" href="#" title="处理闲置" target="_blank">处理闲置</a>
<div class="ali-search fr">
<form action="/Search/Search" name="searchform" method="POST" target="_blank">
<input name="City" type=hidden value=0>
<input name="Type" type=hidden value="class">
<input id="alisearch-keywords" class="empty" accesskey="s" maxlength="50" name="Key" value="请输入想查询的关键字" onclick="if(this.value=='请输入想查询的关键字'){this.value='';this.style.color='#333333'}" onKeyUp="searchajax(this.value,Type.value,'<?php echo ($InstallDir); ?>')" autocomplete=off >
<button type="submit" id="alisearch-submit" class="">搜 索</button></form>
</div></div>
<div class="memnav"><div class="module"><ul>
<span style="float:right; font-size:12px; width:140px;color:#FFFFFF"><a href="#" style="color:#FFFFFF" >帮助中心</a> | <a style="color:#FFFFFF" href="#">我要推广</a></span>
<li id="h"><a href="<?php echo HOME;?>">网站首页</a></li>
<li id="h_index" class="active"><a href="<?php echo HOME;?>index/member">用户中心</a></li>
<li id="h_account" class="noactive"><a href="<?php echo HOME;?>index/user">我的账户</a></li>
<li id="h_security" class="noactive"><a href="#">安全中心</a></li>
<li id="h_e" class="noactive"><a href="#">我的推广</a></li>
<li class="noactive"><a href="#">申请VIP</a></li>
</ul></div></div>
<script type="text/javascript">
var data=eval('<?php echo json_encode($data)?>');
$(function(){
	if (data[13] == 1){
		$(".renzheng-user").empty().append('<span class="email-rz" title="邮箱认证"></span><a href="#">邮箱已认证</a><span class="idcard-norz" title="身份证未认证"></span><a href="#">身份证未认证</a>')
	}
})
</script>
<DIV class="body-wrap">
<div class="left-wrap">
<div class="left-menu">
<span onmouseover="$(this).addClass('active')" class="active"><a href="<?php echo HOME;?>index/member" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/user_product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/user_classadd" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="<?php echo HOME;?>index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="<?php echo HOME;?>index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<div class="userinfo">
<div class="user-photo">
<div class="photo"><img alt="头像" title="头像" src="<?php echo $data[14];?>"><s></s></div>
<span><a href="<?php echo HOME;?>index/user">完善个人资料</a></span></div>
<div class="user-info">
<div class="index-user">
<strong>a88953360</strong>
</div>
<div class="jifen-user">余额：<span>0.00</span>元  <a href="<?php echo HOME;?>index/PayOnline">去充值&gt;&gt;</a></div>
<div class="renzheng-user">
<span class="email-norz" title="邮箱未认证"></span><a href="<?php echo HOME;?>index/email">邮箱未认证</a>
<span class="idcard-norz" title="身份证未认证"></span><a href="#">身份证未认证</a>
</div></div>
</div>
<div class="quickroad">
<span class="quickroad-title">快速通道：</span>
<div class="quickroad-a">
<a href="<?php echo HOME;?>index/user_classadd">我的信息</a><a href="#">我的积分</a><a href="<?php echo HOME;?>index/payonline?action=detail">我的余额</a><a href="<?php echo HOME;?>index/PayOnline">我要充值</a><a href="<?php echo HOME;?>index/user_message">我的消息</a><a href="#" style="color:#FF6600">升级VIP</a><a href="#" >我的推广</a></div></div>
<script type="text/javascript">
function tab_qiche(elementID,listName,n) {
var elem = document.getElementById(elementID);
var elemlist = elem.getElementsByTagName("h3");
for (var i=0; i<elemlist.length; i++) {
elemlist[i].className = "normal";
var m = i+1;
document.getElementById(listName+"_"+m).className = "normal";
}
var elem2 = document.getElementById(listName+"_"+n);
var elemlist2 = elem2.getElementsByTagName("img");
if(n > 1) {
for (var j=0; j<elemlist2.length; j++) {
if(elemlist2[j].src == '') elemlist2[j].src = elemlist2[j].getAttribute("src1");
}
}
elemlist[n-1].className = "current";
document.getElementById(listName+"_"+n).className = "current";
}
</script>
<div id='qiche_tab' class='menu'>
<h3 class=current  onmouseover="tab_qiche(&#39;qiche_tab&#39;,&#39;qiche_info&#39;,1);" href="javascript:;">您最新登记的物品</h3><h3 class=normal  onmouseover="tab_qiche(&#39;qiche_tab&#39;,&#39;qiche_info&#39;,2);" href="javascript:;">您最新发布的信息</td><td class=sec3 width=376>&nbsp;</h3>
</div>
<div class="menu_text">
<div id="qiche_info_1" class="current">
<TABLE class="basetb " cellSpacing=0 cellPadding=0 width='100%'>
<TBODY>
<TR id=tablehead>
<TH width=78>图片</TH>
<TH >名称 </TH>
<TH width=150>发布时间 </TH>
<TH width=50>状态 </TH>
<TH width=80>竞价排名 </TH>
</TR>
</TBODY></TABLE>
</div>
<div id='qiche_info_2' class='normal'>
<TABLE class=basetb cellSpacing=0 cellPadding=0 width='100%' id='qiche_info_2'>
<TBODY>
<TR id=tablehead>
<TH >信息标题</TH>
<TH width=130>发布时间 </TH>
<TH width=45>状态 </TH>
<TH width=45>推荐 </TH>
<TH width=100>管理 </TH>
<TH width=130>推广 </TH>
</TR>
</TBODY></TABLE>
</div></div>
</div>
</DIV>

<div class="footer-box">
<div class="footer-table">
<div class="footer-copy">
<a href='#' title='关于我们' >关于我们</a>| <a href='#' title='有问题请与全球二手网客服进行对话' class=fduihua>联系客服</a>| <a href='#' title='VIP会员' >VIP会员</a>| <A href='#' target=_blank>我要删除信息</A>| <a href='#' target=_blank>免责声明</a> | <a href='#'>帮助中心</a>| <a href='#' >广告服务</a>| <a href=/Area target=_blank>分站列表</a>| <a href='#' target=_blank 不良信息举报></a>| <a href='#' target=_blank>我要提建议</a><br>
Copyright &copy; 2010-2016 全球二手网 Inc. All rights reserved. <script src=http://s11.cnzz.com/stat.php?id=2193493&web_id=2193493 language=JavaScript></script><br>
<span class="credit icon1"></span><span class="credit icon2"></span><span class="credit icon3"></span>
</div></div></div>
<script language="JavaScript" src="http://www.qqershou.com/JS/jquery.js"></script><script type="text/javascript" src="http://www.qqershou.com/JS/backtop.js"></script>
</body>

</html>